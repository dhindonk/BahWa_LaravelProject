<?php

namespace App\Http\Controllers;
//import model post
use App\Models\Post;
// return tipe view
use Illuminate\View\View;
//return type redirectResponse
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
//import Facade "Storage"
use Illuminate\Support\Facades\Storage;
class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
         //get posts/ambil data lewat model
        $foods = Post::latest()->paginate(50);

         //render view with posts/mengirim variabel $post ke view
        return view('users.food', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(string $id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(string $id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, string $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(string $id)
    // {
    //     //
    // }
}
