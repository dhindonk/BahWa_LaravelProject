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
class PostController extends Controller
{

    public function index(): View
    {
        //get posts/ambil data lewat model
        $posts = Post::latest()->paginate(5);

        //render view with posts/mengirim variabel $post ke view
        return view('posts.dashboard', compact('posts'));
    }


    public function create(): View
    {
        return view('posts.create');
    }

    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'video'     => 'required|mimetypes:video/mp4,video/3gpp,video/x-msvideo',
            'title'     => 'required',
            'content'   => 'required'
        ]);


        //upload video
        $video = $request->file('video');
        $video->storeAs('public/posts', $video->hashName());

        //create post
        Post::create([
            'video'     => $video->hashName(),
            'title'     => $request->title,
            'content'   => $request->content,
        ]);

        //redirect to index
        return redirect()->route('admin.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    // untuk mencari data berdasarkan ID
    /**
     * show
     *
     * @param  mixed $id
     * @return View
     */
    public function show(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.show', compact('post'));
    }

    // untuk edit dan update
     /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //render view with post
        return view('posts.edit', compact('post'));
    }

    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {

        //validate form
        $this->validate($request, [
            'video'     => 'required|mimetypes:video/mp4,video/3gpp,video/x-msvideo',
            'title'     => 'required',
            'content'   => 'required'
        ]);

        //get post by ID
        $post = Post::findOrFail($id);

        //check if video is uploaded
        if ($request->hasFile('video')) {

            //upload new video
            $video = $request->file('video');
            $video->storeAs('public/posts', $video->hashName());

            //delete old video
            Storage::delete('public/posts/'.$post->video);

            //update post with new video
            $post->update([
                'video'     => $video->hashName(),
                'title'     => $request->title,
                'content'   => $request->content
            ]);

        } else {

            //update post without video
            $post->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('admin.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    // destroy

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $post = Post::findOrFail($id);

        //delete video
        Storage::delete('public/posts/'. $post->video);

        //delete post
        $post->delete();

        //redirect to index
        return redirect()->route('admin.index')->with(['success' => 'Dihapus!']);
    }

}
