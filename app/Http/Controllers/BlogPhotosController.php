<?php

namespace App\Http\Controllers;

use App\Models\BlogPhotos;
use Illuminate\Http\Request;

class BlogPhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($slug, $id)
    {
        $photo = BlogPhotos::where(['user_id' => auth()->user()->id, 'blog_id' => $id])->paginate(10);

        if ($photo->total() < 1) {
            return redirect("/blogs/{$slug}/{$id}/photos/create");
        }
        return view('admin.blog.photos.index', [
            'photo' => $photo,
            'slug' => $slug,
            'id' => $id,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($slug, $id)
    {
        return view('admin.blog.photos.create', [
            'slug' => $slug,
            'id' => $id
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $slug, $id)
    {

        request()->validate([
            'image' => 'required|file',

        ]);

        $newName = time() . '-' . $request->file('image')->getClientOriginalName();
        $size = $request->file('image')->getSize();
        $name = $newName;
        $request->file('image')->move(public_path('img'), $name);



        $photo = new BlogPhotos();
        $photo->user_id = auth()->user()->id;
        $photo->blog_id = $id;
        $photo->name = $name;
        $photo->size = $size;
        $photo->featured = 0;

        $photo->save();

        return redirect("/blogs/{$slug}/{$id}/photos");
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogPhotos $blogPhotos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BlogPhotos $blogPhotos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogPhotos $blogPhotos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug, $id, $photo_id)
    {
        $photo = BlogPhotos::find($photo_id);

        $photo->delete();
        return redirect("/blog/{$slug}/{$id}/photo");
    }

    public function featured($slug, $id, $photo_id)
    {
        $old_photo = BlogPhotos::where([
            'blog_id' => $id,
            'featured' => 1,
        ])->first();

        if ($old_photo != null) {
            $old_photo->featured = 0;
            $old_photo->save();
        }



        $new_photo = BlogPhotos::where([
            'blog_id' => $id,
            'id' => $photo_id,
        ])->first();

        $new_photo->featured = 1;
        $new_photo->save();

        return redirect("/blogs/{$slug}/{$id}/photos");
    }
}
