<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class IlkomController extends Controller
{
    public function index()
    {
        $ilkom = Post::latest()->paginate(10);
        return view('mipa.ilkom.index', compact('ilkom'));
    }

    public function course()
    {
        $ilkom = Post::latest()->paginate(10);
        return view('mipa.ilkom.course', compact('ilkom'));
    }
}
