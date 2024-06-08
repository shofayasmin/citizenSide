<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class AcaraController extends Controller
{
    public function manage()
    {
        $data = Acara::get();

        return view('Acara.ManageAcara_RW',compact('data'));
    }

    public function view()
    {
        $data = Acara::get();
        $user = Auth::user();

        return view('Acara.ViewAcara_Warga',compact('data','user'));
    }

    public function create()
    {
        return view('Acara.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul'         => 'required',
            'deskripsi'     => 'required',
            'tipe_acara'    => 'required',
            'image'         => 'required|mimes:png,jpg,jpeg|max:2048',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        // $photo = $request->file('image');
        // $filename = date('Y-m-d') . $photo->getClientOriginalName();
        // $path = 'photo-acara/' . $filename;

        // Storage::disk('public')->put($path,file_get_contents($photo));
        if(request()->has('image')){
            $image = request()->file('image')->store('gambarAcara', 'public');
        }

        $data['judul'] = $request->judul;
        $data['deskripsi'] = $request->deskripsi;
        $data['tipe_acara'] = $request->tipe_acara;
        $data['image'] = $image;


        Acara::create($data);

        return redirect()->route('acara.manage');
    }

    public function edit_acara(Request $request,$id)
    {
        $data = Acara::find($id);
        
        return view('Acara.edit',compact('data'));
    }
    public function update_acara(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'judul'                     => 'required',
            'deskripsi'                 => 'required',
            'tipe_acara'                => 'required',
            
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $data['judul'] = $request->judul;
        $data['deskripsi'] = $request->deskripsi;
        $data['tipe_acara'] = $request->tipe_acara;
        

        Acara::where('id_acara',$id)->update($data);
        return redirect()->route('acara.manage');
    }

    public function delete_acara(Request $request,$id)
    {
        $data = Acara::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('acara.manage');
    }

    public function storeIkutiAcara(Request $request, $acaraId)
    {
        $user = Auth::user();
        $acara = Acara::findOrFail($acaraId);

        // Simpan data peserta ke tabel pivot
        $acara->participants()->attach($user->id);

        return redirect()->back()->with('success', 'Anda telah mengikuti kegiatan.');
    }
    public function showParticipants($acaraId)
    {
        $acara = Acara::with('participants')->findOrFail($acaraId);
        return view('acara.ViewAcara_Warga', compact('acara'));
    }


    
}
