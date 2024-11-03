<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->get();
        return view('pages.admin.pages.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'ASC')->get();
        return view('pages.admin.pages.posts.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        try {
            $imagesName = UploadImage($request->thumbnail, 'uploads/posts');
            $post = new  Post();
            $post->thumbnail = $imagesName;
            $post->title = $request->title;
            $post->category_id = $request->category_id;
            $post->slug = Str::slug($request->title);
            $post->content = $request->content;
            $post->save();

            return redirect()->route('posts.index')->with(['success' => __('admin/messages.saved')]);
        } catch (\Exception $ex) {
            return redirect()->route('posts.index')->with(['error' => __('admin/messages.error')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    // public function show(Post $post)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        try {
            $categories = Category::orderBy('id', 'ASC')->get();
            if ($post)
                return view('pages.admin.pages.posts.edit', compact('post', 'categories'));
        } catch (\Exception $ex) {
            return redirect()->route('posts.index')->with(['error' => __('admin/messages.error')]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */

    public function update(UpdatePostRequest $request, $id)
    {

        try {
            $p = Post::where('id', $id)->get()->first();

            $photoName = ($request->thumbnail)
                ? UploadImage($request->thumbnail, 'uploads/posts')
                : $p->thumbnail;

            $post = Post::find($id);
            $category_id = $request->category_id ? $request->category_id  : $post->category_id;
            $post->thumbnail = $photoName;
            $post->title = $request->title;
            $post->category_id = $request->category_id;
            $post->slug = Str::slug($request->title);
            $post->content = $request->content;
            $post->category_id = $category_id;
            $post->update();

            $post->tags()->sync($request->tag_id);

            return redirect()->route('posts.index')->with(['success' => __('admin/messages.updated')]);
        } catch (\Exception $ex) {
            return redirect()->route('posts.index')->with(['error' => __('admin/messages.error')]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        try {
            // if ($post) {
            //     if (file_exists($post->thumbnail())) unlink($post->thumbnail);
            //     $post->delete();
            if($post){
                $post->delete();

                return redirect()->route('posts.index')->with(['success' => __('admin/messages.deleted')]);
            }
        } catch (\Exception $ex) {
            return redirect()->route('posts.index')->with(['error' => __('admin/messages.error')]);
        }
    }

    public function changeStatus(Post $post)
    {
        try {
            if (!$post) return redirect()->route('posts.index')->with(['error' => __('admin/messages.not_found')]);

            $status =  $post->status  == '0' ? '1' : '0';

            $post->status = $status;
            $post->update();

            return redirect()->route('posts.index')->with(['success' => __('admin/messages.status_changed')]);
        } catch (\Exception $ex) {
            return redirect()->route('posts.index')->with(['error' => __('admin/messages.error')]);
        }
    }
}
