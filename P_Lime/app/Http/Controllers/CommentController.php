<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Validator;


class CommentController extends Controller
{
    public function store(Request $request)
    {

    //     
    //    echo "ss"; 
    //     echo $comment = $request->comment;

    // echo $nama = $request->laporan_id;

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
}
