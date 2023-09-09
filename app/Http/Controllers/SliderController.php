<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();


        return view('admin.slider.index', [
            'sliders' => $sliders
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $slider = new Slider();

        request()->validate([
            'image' => 'required|file',

        ]);


        // get the photo name and size
        $newName = time() . '-' . $request->file('image')->getClientOriginalName();
        $size = $request->file('image')->getSize();
        $name = $newName;
        $request->file('image')->storeAs('/public/images', $name);

        // return $name;

        $slider->sub_title = $request->input('sub_title');
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');
        $slider->button_text = $request->input('button_text');
        $slider->link = $request->input('link');
        $slider->img_name = $name;
        $slider->img_size = $size;


        // return $slider;
        $slider->save();
        return redirect()->route('slider.all')->with('success', 'Slider created successfully');
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
        $slider = Slider::find($id);

        return view('admin.slider.edit', [
            'slider' => $slider
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slider = Slider::find($id);

        $slider->sub_title = $request->input('sub_title');
        $slider->title = $request->input('title');
        $slider->description = $request->input('description');
        $slider->button_text = $request->input('button_text');
        $slider->link = $request->input('link');

        $slider->save();



        return redirect()->route('slider.all')->with('success', 'Slider updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::find($id);

        $slider->delete();

        return redirect()->route('slider.all')->with('success', 'Slider deleted successfully');
    }
}
