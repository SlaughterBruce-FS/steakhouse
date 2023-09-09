<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discounts = Discount::with('food')->get();

        // return $discounts;

        return view('admin.discount.index', [
            'discounts' => $discounts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $foods = Food::all();

        return view('admin.discount.create', [
            'foods' => $foods
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $discount = new Discount();

        request()->validate([
            'image' => 'required|file',

        ]);

        $newName = time() . '-' . $request->file('image')->getClientOriginalName();
        $name = $newName;
        $request->file('image')->storeAs('/public/images', $name);


        //random string
        // $discount->code = Str::random(10);
        //random digit
        $discount->code = rand(1000, 9999);
        $discount->title = $request->input('title');
        $discount->percent_off = $request->input('percent_off');
        $discount->amount_off = $request->input('amount_off');
        $discount->price = $request->input('price');
        $discount->description = $request->input('description');
        $discount->image = $name;
        $discount->status = $request->input('status');
        $discount->food_id = $request->input('food_id');

        $discount->save();

        return redirect()->route('discount.all')->with('success', 'Dicount added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Discount $discount, $id)
    {
        $discount = Discount::find($id);



        return view('admin.discount.edit', [
            'discount' => $discount
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Discount $discount, $id)
    {

        $discount = Discount::find($id);

        $discount->title = $request->input('title');
        $discount->percent_off = $request->input('percent_off');
        $discount->amount_off = $request->input('amount_off');
        $discount->price = $request->input('price');
        $discount->description = $request->input('description');
        $discount->status = $request->input('status');
        $discount->food_id = $request->input('food_id');

        $discount->save();

        return redirect()->route('discount.all')->with('success', 'Discount updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discount $discount)
    {
        $discount = Discount::find($discount->id);

        $discount->delete();

        return redirect()->route('discount.all')->with('danger', 'Discount deleted successfully');
    }
}
