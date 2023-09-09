<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gallery = Gallery::all();


        return view('admin.gallery.index', [
            'gallery' => $gallery
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $photo = new Gallery();

        request()->validate([
            'image' => 'required|file',

        ]);


        // get the photo name and size
        $newName = time() . '-' . $request->file('image')->getClientOriginalName();
        $size = $request->file('image')->getSize();
        $name = $newName;
        $request->file('image')->storeAs('/public/images', $name);

        // return $name;

        $photo->path = $request->input('path');
        $photo->name = $name;
        $photo->size = $size;


        // return $photo;
        $photo->save();
        return redirect()->route('gallery.all')->with('success', 'Photo added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $photo = Gallery::find($id);

        return view('admin.gallery.edit', [
            'slider' => $photo
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $photo = Gallery::find($id);

        $photo->sub_title = $request->input('sub_title');
        $photo->title = $request->input('title');
        $photo->description = $request->input('description');
        $photo->button_text = $request->input('button_text');
        $photo->link = $request->input('link');

        $photo->save();



        return redirect()->route('gallery.all')->with('success', 'Photo updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $photo = Gallery::find($id);

        $photo->delete();

        return redirect()->route('gallery.all')->with('success', 'Photo deleted successfully');
    }
}
