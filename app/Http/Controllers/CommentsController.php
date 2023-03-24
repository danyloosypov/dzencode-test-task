<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Finfo;


class CommentsController extends Controller
{
    public function store(Request $request)
    {

        $rules = [
            'comment_body' => 'required|max:1000',
            'file' => 'nullable|file|max:4096',
        ];
    
        if ($request->has('parent_id')) {
            $rules['parent_id'] = 'nullable|integer|exists:comments,id';
        }

    
        $request->validate($rules);

        $comment = new Comment();
        $comment->user_id = Auth::id();
        $comment->comment_body = $request->input('comment_body');
        $comment->parent_id = $request->input('parent_id');


        /*if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('public/comments', $filename); // modify the file storage path as needed
            $comment->file = $filename;
        }*/

        /*if ($request->hasFile('file')) {
            $file = $request->file('file');

            

           $filename = time() . '_' . $file->getClientOriginalName();
        
            // resize the image if it is larger than 320x240
            $image = Image::make($file->getRealPath());
            $image->resize(320, 240, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            });
        
            // save the resized image to storage
            $path = storage_path('app/public/comments/' . $filename);
            $image->save($path);
        
            $comment->file = $filename;
        }*/

        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
    
            if (in_array($extension, ['jpg', 'jpeg', 'png'])) {
                $filename = time() . '_' . $file->getClientOriginalName();
                $image = Image::make($file->getRealPath());
                $image->resize(320, 240, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                });
                $path = storage_path('app/public/comments/' . $filename);
                $image->save($path);
                $comment->file = $filename;
            } elseif ($extension == 'txt') {
                $filename = time() . '_' . $file->getClientOriginalName();
                $path = $file->storeAs('public/comments', $filename);
                $comment->file = $filename;
            }
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
