<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\umkm;

class UmkmController extends Controller
{
    public function register()
    {
        return view('umkm.register');
    }
    public function view(){
        $data = umkm::get();
        return view('umkm.view',compact('data'));
    }

    public function store_umkm(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'Nama' => 'required',
            'umkm' => 'required',
            
        ]);
        
        
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $data['Nama'] = $request->Nama; 
        $data['umkm'] = $request->umkm; 
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
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $data['Nama'] = $request->Nama; 
        $data['umkm'] = $request->umkm; 

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
}
