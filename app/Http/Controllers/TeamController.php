<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = Team::all();

        return view('admin.team.index', [
            'teams' => $teams
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $team = new Team();

        request()->validate([
            'image' => 'required|file',

        ]);
        // get the photo name and size
        $newName = time() . '-' . $request->file('image')->getClientOriginalName();
        $size = $request->file('image')->getSize();
        $name = $newName;
        $request->file('image')->storeAs('/public/images', $name);

        $team->name = $request->input('name');
        $team->position = $request->input('position');
        $team->image = $name;

        $team->save();

        return redirect()->route('team.all');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team, $id)
    {
        $team = Team::find($id);

        $team->delete();

        return redirect()->route('team.all');
    }
}
