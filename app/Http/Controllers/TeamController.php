<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderBy('id', 'desc')->get();
        return view('admin.team.list', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'position'      => 'required',
            'qualification' => 'required',
            'experience'    => 'required',
            'linkedin'      => 'nullable',
            'twitter'       => 'nullable',
            'image'         => 'nullable',
        ]);

        $team = new Team();
        $team->name          = $request->name;
        $team->position      = $request->position;
        $team->qualification = $request->qualification;
        $team->experience    = $request->experience;
        $team->linkedin      = $request->linkedin;
        $team->twitter       = $request->twitter;

        // image upload
        if ($request->hasFile('image')) {
            $image      = $request->file('image');
            $imageName  = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/team'), $imageName);
            $team->image = $imageName;
        }

        $team->save();

        return redirect()->back()->with('success', 'Team member added successfully!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = base64_decode($id);
        $team = Team::findOrFail($id);
        return view('admin.team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'          => 'required',
            'position'      => 'required',
            'qualification' => 'required',
            'experience'    => 'required',
            'linkedin'      => 'nullable',
            'twitter'       => 'nullable',
            'image'         => 'nullable',
        ]);

        $team = Team::findOrFail($id);
        $team->name          = $request->name;
        $team->position      = $request->position;
        $team->qualification = $request->qualification;
        $team->experience    = $request->experience;
        $team->linkedin      = $request->linkedin;
        $team->twitter       = $request->twitter;

        if ($request->hasFile('image')) {
            // delete old image if exists
            if (!empty($team->image) && file_exists(public_path('uploads/team/' . $team->image))) {
                unlink(public_path('uploads/team/' . $team->image));
            }
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('uploads/team'), $imageName);
            $team->image = $imageName;
        }

        $team->save();

        return redirect()->route('manage_team')->with('success', 'Team member updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id = base64_decode($id);
        $team = Team::findOrFail($id);

        // image delete from folder if exists
        if (!empty($team->image) && file_exists(public_path('uploads/team/' . $team->image))) {
            unlink(public_path('uploads/team/' . $team->image));
        }
        $team->delete();

        return redirect()->route('manage_team')->with('success', 'Team member deleted successfully!');
    }
}
