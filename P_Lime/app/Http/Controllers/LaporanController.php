<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;


class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view()
    {      
        
        $data = laporan::with('comments.user')->get();
        $comments = Comment::all();

        return view('laporan.view',compact('data','comments'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('laporan.create');


    }

    public function track()
    {
        return view('laporan.track');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function storecomment(Request $request)
    {

        // dd($request->all());
        $validator = Validator::make($request->all(),[
            'laporan_id' => 'required',
            'author' => 'required',
            'comment' => 'required',
        ]);

        // if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['laporan_id'] = $request->laporan_id; 
        $data['author'] = $request->author; 
        $data['comment'] =  $request->comment;
        

        Comment::create($data);

        // return redirect()->route('citizen.kk');
        return redirect()->back()->with('success', 'Comment added successfully!');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            
            'judul'         => 'required',
            'pengirim'         => 'required',
            'deskripsi'     => 'required',
            'gambar'        => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        

        $photo = $request->file('gambar');
        $filename = date('Y-m-d') . $photo->getClientOriginalName();
        $path = 'photo-acara/' . $filename;

        Storage::disk('public')->put($path,file_get_contents($photo));

        $data['judul'] = $request->judul;
        $data['pengirim'] = $request->pengirim;
        $data['deskripsi'] = $request->deskripsi;;
        $data['gambar'] = $filename;

        laporan::create($data);

        return redirect()->route('laporan.view');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {
        $data = laporan::find($id);
        
        return view('laporan.edit',compact('data'));
    }
    public function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'judul'                     => 'required',
            'pengirim'                 => 'required',
            'deskripsi'                 => 'required',
            'gambar'                    => 'required|mimes:png,jpg,jpeg|max:2048',
            
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $data['judul'] = $request->judul;
        $data['pengirim'] = $request->pengirim;
        $data['deskripsi'] = $request->deskripsi;
        $data['gambar'] = $request->gambar;
        

        laporan::where('laporan_id',$id)->update($data);
        return redirect()->route('laporan.view');
    }

    // public function updateStatus(Request $request)
    // {
    //     $laporan = Laporan::find($request->id);
    //     if ($laporan) {
    //         $laporan->status = $request->status;
    //         $laporan->save();
    //         return response()->json(['success' => true]);
    //     }
    //     return response()->json(['success' => false]);
    // }

//     public function updateStatus(Request $request)
// {
//     $laporan = Laporan::find($request->id);
    
//     if (!$laporan) {
//         return response()->json(['success' => false, 'message' => 'Laporan not found']);
//     }

//     try {
//         $laporan->status = $request->status;
//         $laporan->save();
//         return response()->json(['success' => true]);
//     } catch (\Exception $e) {
//         return response()->json(['success' => false, 'message' => $e->getMessage()]);
//     }
// }

public function updateStatus(Request $request)
{
    Log::info('Update status request received', ['request' => $request->all()]);

    $laporan = Laporan::find($request->id);
    
    if (!$laporan) {
        Log::error('Laporan not found', ['id' => $request->id]);
        return response()->json(['success' => false, 'message' => 'Laporan not found']);
    }

    try {
        $laporan->status = $request->status;
        $laporan->save();
        Log::info('Status updated successfully', ['laporan' => $laporan]);
        return response()->json(['success' => true]);
    } catch (\Exception $e) {
        Log::error('Error updating status', ['error' => $e->getMessage()]);
        return response()->json(['success' => false, 'message' => $e->getMessage()]);
    }
}

public function index()
{
    $data = Laporan::with('comments')->get();
    return view('your-view', compact('data'));
}

public function addComment(Request $request, $laporan_id)
    {
        $request->validate([
            'content' => 'required',
        ]);

        Comment::create([
            'laporan_id' => $laporan_id,
            'user_id' => auth()->id(),
            'content' => $request->content,
        ]);

        return redirect()->back();
    }


}