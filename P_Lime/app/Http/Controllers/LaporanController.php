<?php

namespace App\Http\Controllers;

use App\Models\laporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function view()
    {
        $data = Laporan::orderByRaw("FIELD(status,'Belum Selesai', 'Selesai')")->get();
        return view('laporan.view',compact('data'));
        
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
}