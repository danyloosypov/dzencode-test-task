<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $comments = Comment::whereNull('parent_id')->with('replies')->get();

        return view('home', compact('comments'));
       // return view('home');
    }
}
