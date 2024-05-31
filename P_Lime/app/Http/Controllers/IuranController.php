<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use App\Models\Iuran;
use App\Http\Requests\StoreIuranRequest;
use App\Http\Requests\UpdateIuranRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IuranController extends Controller
{
    
    public function index()
    {
        $iuran = Iuran::get();
        return view('Iuran.index',compact('iuran'));
    }

    
    public function bayar()
    {
        $bayar = Contribution::get();
        return view('Iuran.bayar',compact('bayar'));
    }
    
    public function store_iuran(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'contribution_name' => 'required',
            'payment_status' => 'required',
            'amount' => 'required',
        ]);
        
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $bayar['contribution_name'] = $request->contribution_name; 
        $bayar['payment_status'] = $request->payment_status; 
        $bayar['amount'] =  $request->amount;

        Contribution::create($bayar);

        return redirect()->route('iuran.bayar');
    }

    public function edit_iuran(Request $request,$id)
    {
        $data = Contribution::find($id);
        
        return view('iuran.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_iuran(Request $request,$id)
    {
        
        $validator = Validator::make($request->all(),[
            'contribution_name' => 'required',
            'payment_status' => 'required',
            'amount' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        // $data['nama_field_di_database'] = $request->nama_di_inputan;
        $bayar['contribution_name'] = $request->contribution_name; 
        $bayar['payment_status'] = $request->payment_status; 
        $bayar['amount'] =  $request->amount;

        Contribution::where('contribution_id',$id)->update($bayar);

        return redirect()->route('iuran.bayar');
    }

    
    public function delete_iuran(Request $request,$id)
    {
        $data = Contribution::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('iuran.bayar');
    }
}
