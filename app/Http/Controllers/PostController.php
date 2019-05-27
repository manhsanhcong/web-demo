<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Http\Requests\BlogRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class   PostController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(15);
        $categories = Category::all();
        return view('post.list', compact('posts', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|min:5',
            'content' => 'required|min:5',
            'avatar' => 'required'
        ]);
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = $request->input('user_id');
        $post->category_id = $request->input('category_id');
        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $path = $avatar->store('avatars', 'public');
            $post->avatar = $path;
        }
        $post->save();
        Session::flash('success', 'Tạo mới bài viết thành công');
        return redirect()->route('post.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {
        $post = Post::findOrFail($id);
        if (Auth::check()) {
            return view('post.view', compact('post'));
        }else {
            return view('home.xemchitet', compact('post'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $categories = Category::all();
        return view('post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:5',
            'content' => 'required|min:5',
            'avatar' => 'required'
        ]);
        $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = $request->input('user_id');
        $post->category_id = $request->input('category_id');
        if ($request->hasFile('avatar')) {
            $avatar = $request->avatar;
            $path = $avatar->store('avatars', 'public');
            $post->avatar = $path;
        }
        $post->save();
        Session::flash('success', 'Cập nhật bài viết thành công');
        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $avatar = $post->avatar;
        if ($avatar) {
            Storage::delete('/public/' . $avatar);
        }
        $post->delete();
        Session::flash('success', 'Xóa bài viết thành công');
        return redirect()->route('post.index');
    }

    public function show(Request $request)
    {
        $posts = Post::orderBy('id', 'desc')->paginate(9, ['*'], 'trang');
        return view('home.tintuc', compact('posts'));
    }

    public function showDetail($id)
    {

        $post = Post::findOrFail($id);
        return view('home.tintucchitiet', compact('post'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('post.index');
        }
        $posts = Post::where('title', 'LIKE', '%' . $keyword . '%')->paginate(15);
        return view('post.list', compact('posts', 'keyword'));
    }


    public function filterByCatogory(Request $request)
    {
        $idCategory = $request->input('category_id');
        $categoryFilter = Category::findOrFail($idCategory);
        $posts = Post::where('category_id', $categoryFilter->name)->get();
        $totalPostFilter = count($posts);
        $categories = Category::all();
        return view('post.list', compact('posts', 'categories', 'totalPostFilter', 'categoryFilter'));
    }
}
