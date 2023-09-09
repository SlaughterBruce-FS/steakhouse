<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $food = Food::all();

        return view('admin.food.index', [
            'food' => $food
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.food.create', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $food = new Food();

        request()->validate([
            'image' => 'required|file',

        ]);
        // get the photo name and size
        $newName = time() . '-' . $request->file('image')->getClientOriginalName();
        $size = $request->file('image')->getSize();
        $name = $newName;
        $request->file('image')->storeAs('/public/images', $name);

        $food->name = $request->input('name');
        $food->price = $request->input('price');
        $food->description = $request->input('description');
        $food->new = $request->input('new');
        $food->category_id = $request->input('category_id');
        $food->img_name = $name;
        $food->image = $name;
        $food->img_size = $size;
        $food->save();

        return redirect()->route('food.all')->with('success', 'Food added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food)
    {
        return view('admin.food.edit', [
            'food' => $food
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Food $food)
    {
        $food = Food::find($food->id);

        $food->name = $request->input('name');
        $food->price = $request->input('price');
        $food->description = $request->input('description');
        $food->new = $request->input('new');
        $food->category_id = $request->input('category_id');
        $food->save();

        return redirect()->route('food.all')->with('success', 'Food added successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        $food = Food::find($food->id);

        $food->delete();

        return redirect()->route('food.all')->with('success', 'Food deleted successfully');
    }
}
