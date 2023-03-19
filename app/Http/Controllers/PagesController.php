<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function page1()
    {
        return view('page1');
    }

    public function admin_db()
    {
        $posts = Post::all();
        return view('admin/admin-dashboard', compact('posts'));
    }

    public function home()
    {
        $posts = Post::all();
        return view('home', compact('posts'));
    }

    public function single_post(Request $request)
    {
        $post = Post::find($request->post_id);
        return view('single_post', compact('post'));
    }

    public function all_blog()
    {
        $posts = Post::all();
        return view('all_blog', compact('posts'));
    }

    public function create_page()
    {
        return view('admin/create_post');
    }

    // public function store(Request $request)
    // {
    //     $new_post = new Post;
    //     $new_post->title = $request->title;
    //     $new_post->excerpt = $request->excerpt;
    //     $new_post->content = $request->content;

    //     if ($request->hasFile('image')) {
    //         $this->validate($request, [
    //             'image' => 'image|mimes:jpg,png,jpeg|max:2048'
    //         ]);

    //         $location = public_path('images');
    //         $request->file('image')->move($location, $request->file('image')->getClientOriginalName());
    //         $new_post->image = $request->file('image')->getClientOriginalName();
    //     }

    //     $new_post->save();
    //     return redirect('/admin-dashboard')->with('status', 'Postingan baru sudah ditambahkan');
    // }

    public function edit_page(Request $request)
    {
        $post = Post::find($request->post_id);
        return view('admin/edit_post', compact('post'));
    }

    public function store_edited_post(Request $request)
    {

        $post = Post::find($request->post_id);

        Post::where('id', $request->post_id)->update([
            'title' => htmlspecialchars($request->title),
            'excerpt' => htmlspecialchars($request->excerpt),
            'content' => htmlspecialchars($request->content),
        ]);

        if ($request->hasFile('image')) {
            $location = public_path('images');
            $request->file('image')->move($location, $request->file('image')->getClientOriginalName());
            $post->image = $request->file('image')->getClientOriginalName();
            $post->save();
        }
        return redirect('/admin-dashboard')->with('status', 'Postingan baru sudah diperbaharui');
    }

    public function delete(Request $request)
    {
        $post = Post::find($request->post_id);
        $post->delete();

        return redirect('/admin-dashboard')->with('delete_status', 'Your blog has beeen deleted!');
    }
}
