<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use App\Helper\Helper;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();

        return view('admin.blog.index', [
            'blogs' => $blogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required',

        ]);


        $blog = new Blog();

        $blog->title = $request->get('title');
        $blog->type = $request->get('type');
        $blog->category = $request->get('category');
        $blog->user_id = auth()->user()->id;
        $blog->description = "{$request->description}";
        $newAddress = Helper::slugify($request->title);
        // return $newAddress;
        $blog->slug = "{$newAddress}";
        $blog->status = $request->get('status');



        $blog->save();

        //goto edit page
        return redirect("/blogs/{$blog->slug}/{$blog->id}/edit")->with('success', 'Blog created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $bolg)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug, $id)
    {
        $blogs = Blog::where(['id' => $id, 'slug' => $slug])->first();

        // return $blogs;

        return view('admin.blog.edit', [
            'blogs' => $blogs
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        $blog = Blog::find($blog->id);

        $blog->title = $request->get('title');
        $blog->type = $request->get('type');
        $blog->category = $request->get('category');
        $blog->description = "{$request->description}";
        $blog->status = $request->get('status');

        $blog->save();

        return redirect("/blogs/{$blog->slug}/{$blog->id}/edit")->with('success', 'Blog updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
