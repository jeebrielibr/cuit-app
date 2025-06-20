<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
class CuitController extends Controller
{
    public function index(): View 
    {
        $posts = Post::with('user')
            ->latest()
            ->get();
        return view('home', compact('posts'));
    }

    
}
