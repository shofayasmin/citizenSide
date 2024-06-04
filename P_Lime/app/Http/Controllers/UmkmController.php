<?php

namespace App\Http\Controllers;

use App\Models\UmkmParticipation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\umkm;
use Illuminate\Support\Facades\DB;


class UmkmController extends Controller
{
    public function register()
    {
        return view('umkm.register');
    }
    public function view(){
        $data = umkm::all();
        return view('umkm.view',compact('data'));
    }

    public function store_umkm(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'Nama' => 'required',
            'umkm' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg|max:2048',
            'tipe_umkm' => 'required',
            'deskripsi' => 'required',
            
        ]);
        
        
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        $photo = $request->file('gambar');
        $filename = date('Y-m-d') . $photo->getClientOriginalName();
        $path = 'photo-acara/' . $filename;

        Storage::disk('public')->put($path,file_get_contents($photo));
        

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $data['Nama'] = $request->Nama; 
        $data['umkm'] = $request->umkm; 
        $data['gambar'] = $filename; 
        $data['tipe_umkm'] = $request->tipe_umkm;
        $data['deskripsi'] = $request->deskripsi;
        umkm::create($data);

        return redirect()->route('umkm.view');
    }
    public function edit_umkm(Request $request,$id)
    {
        $data = umkm::find($id);
        
        return view('umkm.edit',compact('data'));
    }
    public function update_umkm(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'Nama' => 'required',
            'umkm' => 'required',
            'gambar' => 'required|mimes:png,jpg,jpeg|max:2048',
            'tipe_umkm' => 'required',
            'deskripsi' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $data['Nama'] = $request->Nama; 
        $data['umkm'] = $request->umkm; 
        $data['gambar'] = $request->gambar;
        $data['tipe_umkm'] = $request->tipe_umkm;
        $data['deskripsi'] = $request->deskripsi;

        umkm::where('umkm_id',$id)->update($data);
        return redirect()->route('umkm.view');
    }

    public function delete_umkm(Request $request,$id)
    {
        $data = umkm::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('umkm.view');
    }

    public function store_kandidat(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'umkm_id' => 'required|exists:umkms,umkm_id'
        ]);

        // Create the new participation record
        UmkmParticipation::create($validatedData);

        return redirect()->route('umkm.view');




        // Return a success response
        // return response()->json(['success' => true]);
    }
}
