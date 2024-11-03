<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Models\User;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.admin.pages.categories.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.pages.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        try {
            $category = new Category();
            $category->name = $request->name;
            $category->parent_id = $request->parent_id;
            $category->slug = Str::slug($request->name);
            $category->save();
            return redirect()->route('categories.index')->with(['success' => __('admin/messages.saved')]);
        } catch (\Exception $ex) {
            return redirect()->route('categories.index')->with(['error' => __('admin/messages.error')]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category $Category
     * @return \Illuminate\Http\Response
     */
    // public function show(Category $Category)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category $Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('pages.admin.pages.categories.edit', compact('category','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Category $Category
     * @return \Illuminate\Http\Response
     */

    public function update(CategoryRequest $request, Category $category)
    {
        try {
            $category->name = $request->name;
            $category->parent_id = $request->parent_id;
            $category->slug = Str::slug($request->name);
            $category->update();

            return redirect()->route('categories.index')->with(['success' => __('admin/messages.updated')]);
        } catch (\Exception $ex) {

            return redirect()->route('categories.index')->with(['error' => __('admin/messages.error')]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category $Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        try {
            if ($category) {
                $category->delete();
                return redirect()->route('categories.index')->with(['success' => __('admin/messages.status_changed')]);
            }
        } catch (\Exception $ex) {
            return redirect()->route('categories.index')->with(['error' => __('admin/messages.error')]);
        }
    }
}
