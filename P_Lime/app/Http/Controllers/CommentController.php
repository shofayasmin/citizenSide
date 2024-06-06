<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'laporan_id' => 'required|exists:laporans,laporan_id',
            'content' => 'required|string|max:255',
        ]);

        Comment::create([
            'laporan_id' => $request->laporan_id,
            'user_id' => auth()->id(),
            'content' => $request->content,
        ]);

        return redirect()->back()->with('success', 'Comment added successfully.');
    }
}