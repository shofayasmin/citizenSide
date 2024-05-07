<?php

namespace App\Http\Controllers;

use App\Models\Organisasi;
use App\Models\Rumah;
use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Rt;
use App\Models\Kk;


class CitizenController extends Controller
{
    public function index(){
        return view('Citizen.home_citizen');
    }
    public function create()
    {
        return view('Acara.create');
    }
    

    //RT
    public function rt()
    {
        $data = Rt::get();

        return view('Citizen.rt',compact('data'));
    }
    public function create_rt()
    {
        return view('citizen.create_rt');
    }
    public function store_rt(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama_ketua' => 'required',
            'no_rt' => 'required',
            'mulai_masa_jabatan' => 'required',
            'berakhir_masa_jabatan' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $data['nama_ketua'] = $request->nama_ketua; 
        $data['no_rt'] = $request->no_rt; 
        $data['mulai_masa_jabatan'] =  $request->mulai_masa_jabatan;
        $data['berakhir_masa_jabatan'] =  $request->berakhir_masa_jabatan;

        Rt::create($data);

        return redirect()->route('citizen.rt');
    }
    public function edit_rt(Request $request,$id)
    {   
        $data = Rt::find($id);
        
        return view('Citizen.edit_rt',compact('data'));
    }
    public function update_rt(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'nama_ketua' => 'required',
            'no_rt' => 'required',
            'mulai_masa_jabatan' => 'required',
            'berakhir_masa_jabatan' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $data['nama_ketua'] = $request->nama_ketua; 
        $data['no_rt'] = $request->no_rt; 
        $data['mulai_masa_jabatan'] =  $request->mulai_masa_jabatan;
        $data['berakhir_masa_jabatan'] =  $request->berakhir_masa_jabatan;

        Rt::where('rt_id',$id)->update($data);

        return redirect()->route('citizen.rt');
    }

    public function delete_rt(Request $request,$id)
    {
        $data = Rt::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('citizen.rt');
    }


    // KK
    public function kk()
    {
        $data = Kk::get();

        return view('Citizen.kk',compact('data'));
    }
    public function create_kk(){
        return view('Citizen.create_kk');
    }
    public function store_kk(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'no_kk' => 'required',
            'alamat' => 'required',
            'nik_kepala_keluarga' => 'required',
            'jumlah_usia_produktif' => 'required',
            'jumlah_anggota_kk' => 'required',
            'jumlah_usia_lanjut' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $data['no_kk'] = $request->no_kk; 
        $data['alamat'] = $request->alamat; 
        $data['nik_kepala_keluarga'] =  $request->nik_kepala_keluarga;
        $data['jumlah_usia_produktif'] =  $request->jumlah_usia_produktif;
        $data['jumlah_anggota_kk'] =  $request->jumlah_anggota_kk;
        $data['jumlah_usia_lanjut'] =  $request->jumlah_usia_lanjut;

        Kk::create($data);

        return redirect()->route('citizen.kk');
    }
    public function edit_kk(Request $request,$id)
    {
        $data = Kk::find($id);
        
        return view('Citizen.edit_kk',compact('data'));
    }
    public function update_kk(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'no_kk' => 'required',
            'alamat' => 'required',
            'nik_kepala_keluarga' => 'required',
            'jumlah_usia_produktif' => 'required',
            'jumlah_anggota_kk' => 'required',
            'jumlah_usia_lanjut' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $data['no_kk'] = $request->no_kk; 
        $data['alamat'] = $request->alamat; 
        $data['nik_kepala_keluarga'] =  $request->nik_kepala_keluarga;
        $data['jumlah_usia_produktif'] =  $request->jumlah_usia_produktif;
        $data['jumlah_anggota_kk'] =  $request->jumlah_anggota_kk;
        $data['jumlah_usia_lanjut'] =  $request->jumlah_usia_lanjut;
        Kk::where('id_kk',$id)->update($data);
        return redirect()->route('citizen.kk');
    }

    public function delete_kk(Request $request,$id)
    {
        $data = Kk::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('citizen.kk');
    }

    // ORGANISASI
    public function organisasi()
    {
        $data = Organisasi::get();
        return view('Citizen.organisasi',compact('data'));
         
    }
    public function create_organisasi()
    {
        return view('Citizen.create_organisasi');
    }
    public function store_organisasi(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama_organisasi'   => 'required',
            'ketua'             => 'required',
            'wakil'             => 'required',
            'jumlah_anggota'    => 'required',
            
            
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $data['nama_organisasi']    = $request->nama_organisasi; 
        $data['ketua']              = $request->ketua; 
        $data['wakil']              =  $request->wakil;
        $data['jumlah_anggota']     =  $request->jumlah_anggota;
        

        Organisasi::create($data);

        return redirect()->route('citizen.organisasi');
    }
    public function edit_organisasi(Request $request,$id)
    {
        $data = Organisasi::find($id);
        
        return view('Citizen.edit_organisasi',compact('data'));
    }
    public function update_organisasi(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'nama_organisasi'   => 'required',
            'ketua'             => 'required',
            'wakil'             => 'required',
            'jumlah_anggota'    => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $data['nama_organisasi']    = $request->nama_organisasi; 
        $data['ketua']              = $request->ketua; 
        $data['wakil']              =  $request->wakil;
        $data['jumlah_anggota']     =  $request->jumlah_anggota;

        Organisasi::where('id_organisasi',$id)->update($data);
        return redirect()->route('citizen.organisasi');
    }
    public function delete_organisasi(Request $request,$id)
    {
        $data = Organisasi::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('citizen.organisasi');
    }
    


    // RUMAH
    public function rumah()
    {
        $data = Rumah::get();

        return view('Citizen.rumah',compact('data'));
    }
    public function create_rumah()
    {
        return view('Citizen.create_rumah');
    }
    public function store_rumah(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama_pemilik' => 'required',
            'alamat' => 'required',
            'luas_bangunan' => 'required',
            'luas_tanah' => 'required',
            'jumlah_anggota_kk' => 'required',
            
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $data['nama_pemilik'] = $request->nama_pemilik; 
        $data['alamat'] = $request->alamat; 
        $data['luas_bangunan'] =  $request->luas_bangunan;
        $data['luas_tanah'] =  $request->luas_tanah;
        $data['jumlah_anggota_kk'] =  $request->jumlah_anggota_kk;

        Rumah::create($data);

        return redirect()->route('citizen.rumah');
    }
    public function edit_rumah(Request $request,$id)
    {
        $data = Rumah::find($id);
        
        return view('Citizen.edit_rumah',compact('data'));
    }
    public function update_rumah(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'nama_pemilik' => 'required',
            'alamat' => 'required',
            'luas_bangunan' => 'required',
            'luas_tanah' => 'required',
            'jumlah_anggota_kk' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $data['nama_pemilik'] = $request->nama_pemilik; 
        $data['alamat'] = $request->alamat; 
        $data['luas_bangunan'] =  $request->luas_bangunan;
        $data['luas_tanah'] =  $request->luas_tanah;
        $data['jumlah_anggota_kk'] =  $request->jumlah_anggota_kk;

        Rumah::where('rumah_id',$id)->update($data);
        return redirect()->route('citizen.rumah');
    }

    public function delete_rumah(Request $request,$id)
    {
        $data = Rumah::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('citizen.rumah');
    }


    // WARGA
    public function warga()
    {
        $data = Warga::get();

        return view('Citizen.warga',compact('data'));
    }

    public function create_warga()
    {
        return view('Citizen.create_warga');
    }
    public function store_warga(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nik' => 'required',
            'no_kk' => 'required',
            'nama' => 'required',
            'tempat_tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'kewarganegaraan' => 'required',
            
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $data['nik'] = $request->nik; 
        $data['no_kk'] = $request->no_kk; 
        $data['nama'] =  $request->nama;
        $data['tempat_tanggal_lahir'] =  $request->tempat_tanggal_lahir;
        $data['jenis_kelamin'] =  $request->jenis_kelamin;
        $data['alamat'] =  $request->alamat;
        $data['agama'] =  $request->agama;
        $data['status'] =  $request->status;
        $data['pekerjaan'] =  $request->pekerjaan;
        $data['kewarganegaraan'] =  $request->kewarganegaraan;

        Warga::create($data);

        return redirect()->route('citizen.warga');
    }
    public function edit_warga(Request $request,$id)
    {
        $data = Warga::find($id);
        
        return view('Citizen.edit_warga',compact('data'));
    }
    public function update_warga(Request $request,$id)
    {
        $validator = Validator::make($request->all(),[
            'nik' => 'required',
            'no_kk' => 'required',
            'nama' => 'required',
            'tempat_tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'agama' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'kewarganegaraan' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $data['nik'] = $request->nik; 
        $data['no_kk'] = $request->no_kk; 
        $data['nama'] =  $request->nama;
        $data['tempat_tanggal_lahir'] =  $request->tempat_tanggal_lahir;
        $data['jenis_kelamin'] =  $request->jenis_kelamin;
        $data['alamat'] =  $request->alamat;
        $data['agama'] =  $request->agama;
        $data['status'] =  $request->status;
        $data['pekerjaan'] =  $request->pekerjaan;
        $data['kewarganegaraan'] =  $request->kewarganegaraan;

        Warga::where('id_warga',$id)->update($data);
        return redirect()->route('citizen.warga');
    }

    public function delete_warga(Request $request,$id)
    {
        $data = Warga::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('citizen.warga');
    }

}
