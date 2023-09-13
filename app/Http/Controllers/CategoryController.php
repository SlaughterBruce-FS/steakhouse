<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::all();

        return view('admin.category.index', [
            'category' => $category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();

        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('category.all')->with('success', 'Category added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category, Request $request, $id)
    {

        $category = Category::find($id);


        return view('admin.category.edit', [
            'category' => $category,
            'id' => $id
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category, $id)
    {
        $category = Category::find($id);



        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('category.all')->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category, $id)
    {
        $category = Category::find($id);

        $category->delete();

        return redirect()->route('category.all')->with('success', 'Category deleted successfully');
    }
}
