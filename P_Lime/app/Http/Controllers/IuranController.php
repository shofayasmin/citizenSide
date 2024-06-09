<?php

namespace App\Http\Controllers;

use App\Models\Contribution;
use App\Models\Income;
use App\Models\Iuran;
use App\Http\Requests\StoreIuranRequest;
use App\Http\Requests\UpdateIuranRequest;
use App\Models\Expenditure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class IuranController extends Controller
{
    
    // public function index()
    // {
    //     $iuran = Iuran::get();
    //     return view('Iuran.index',compact('iuran'));
    // }

    public function income(Request $request)
    {
        $income = Income::query();

        if ($request->income_type) {
            $income->where('income_type', $request->income_type);
        }

        if ($request->start_date && $request->end_date) {
            $income->whereBetween('date', [$request->start_date, $request->end_date]);
        } elseif ($request->start_date) {
            $income->where('date', '>=', $request->start_date);
        } elseif ($request->end_date) {
            $income->where('date', '<=', $request->end_date);
        }

        return view('Iuran.income', ['income' => $income->paginate(10)]);
    }
    
    public function expenditure(Request $request)
    {
        $start_date = $request->input('start_date');
        $end_date = $request->input('end_date');

        $expenditure = Expenditure::query();
        
        if ($start_date && $end_date) {
            $expenditure->whereBetween('date', [$start_date, $end_date]);
        }

        return view('Iuran.expenditure', ['expenditure' => $expenditure->paginate(10)]);
    }

    //Income (Pemasukan)
    public function store_income(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'income_name' => 'required',
            'income_type' => 'required',
            'description' => 'required',
            'inflow' => 'required',
            'date' => 'required',
        ]);
        
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $income['income_name'] = $request->income_name; 
        $income['income_type'] = $request->income_type; 
        $income['description'] = $request->description;
        $income['inflow'] =  $request->inflow;
        $income['date'] = $request->date;
        
        Income::create($income);

        return redirect()->route('iuran.income');
    }

    public function edit_income(Request $request,$id)
    {
        $data = Income::find($id);
        
        return view('income.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_income(Request $request,$id)
    {
        
        $validator = Validator::make($request->all(),[
            'income_name' => 'required',
            'income_type' => 'required',
            'description' => 'required',
            'inflow' => 'required',
            'date' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $income['income_name'] = $request->income_name; 
        $income['income_type'] = $request->income_type; 
        $income['description'] = $request->description;
        $income['inflow'] =  $request->inflow;
        $income['date'] = $request->date;

        Income::where('income_id',$id)->update($income);

        return redirect()->route('iuran.income');
    }

    public function delete_income(Request $request,$id)
    {
        $data = Income::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('iuran.income');
    }

    //Expenditure (Pengeluaran)
    
    public function store_expenditure(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'date' => 'required',
            'expenditure_name' => 'required',
            'amount' => 'required',
            'description' => 'required',
        ]);
        
        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $expenditure['date'] = $request->date; 
        $expenditure['expenditure_name'] = $request->expenditure_name; 
        $expenditure['amount'] = $request->amount; 
        $expenditure['description'] = $request->description;

        Expenditure::create($expenditure);

        return redirect()->route('iuran.expenditure');
    }

    public function edit_expenditure(Request $request,$id)
    {
        $data = Expenditure::find($id);
        
        return view('expenditure.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update_expenditure(Request $request,$id)
    {
        
        $validator = Validator::make($request->all(),[
            'date' => 'required',
            'expenditure_name' => 'required',
            'amount' => 'required',
            'description' => 'required',
        ]);

        if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $expenditure['date'] = $request->date; 
        $expenditure['expenditure_name'] = $request->expenditure_name; 
        $expenditure['amount'] = $request->amount; 
        $expenditure['description'] =  $request->description;
        

        Expenditure::where('expenditure_id',$id)->update($expenditure);

        return redirect()->route('iuran.expenditure');
    }

    
    public function delete_expenditure(Request $request,$id)
    {
        $data = Expenditure::find($id);

        if($data){
            $data->delete();
        }

        return redirect()->route('iuran.expenditure');
    }
}
