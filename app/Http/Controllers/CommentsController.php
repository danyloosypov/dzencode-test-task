<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Auth;


class CommentsController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'comment_body' => 'required',
            'file' => 'file|mimes:jpeg,png,pdf|max:2048', // modify the allowed file types and max size as needed
        ]);

        $comment = new Comment();
        $comment->user_id = Auth::id();
        $comment->comment_body = $request->input('comment_body');
        $comment->parent_id = $request->input('parent_id');

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/comments', $filename); // modify the file storage path as needed
            $comment->file = $filename;
        }

        $comment->save();

        return back()->with('success', 'Comment added successfully.');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();

        return back()->with('success', 'Comment deleted successfully.');
    }

}
