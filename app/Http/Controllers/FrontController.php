<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogPhotos;
use App\Models\Gallery;
use App\Models\Slider;
use App\Models\Category;
use App\Models\Discount;
use App\Models\EmailList;
use App\Models\Food;
use App\Models\Reservation;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        $gallery = Gallery::all();
        $categories = Category::all();
        $food = Food::with('categories')->get();
        $discounts = Discount::all();
        $blogs = Blog::all();
        $blogsphotos = BlogPhotos::all();
        $teams = Team::all();



        return view('welcome', [
            'sliders' => $sliders,
            'gallery' => $gallery,
            'categories' => $categories,
            'food' => $food,
            'discounts' => $discounts,
            'blogs' => $blogs,
            'blogsphotos' => $blogsphotos,
            'teams' => $teams
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $reservation = new Reservation();

        $reservation->name = $request->input('name');
        $reservation->phone = $request->input('phone');
        $reservation->date = $request->input('date');
        $reservation->time = $request->input('time');
        $reservation->message = $request->input('message');
        $reservation->number_of_guests = $request->input('number_of_guests');

        $reservation->save();

        return redirect()->back()->with('status', 'Reservation created successfully');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function storeEmail(Request $request)
    {

        $emails = new EmailList();

        $emails->email = $request->input('email');

        $emails->save();

        return redirect()->back()->with('status', 'Email created successfully');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
