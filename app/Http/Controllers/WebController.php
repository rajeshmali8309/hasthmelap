<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Team;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('website.index');
    }

    public function gallery()
    {
        $query = Customer::select('id', 'first_name', 'last_name', 'age', 'caste', 'image', 'gender');

        if (session()->has('user_id')) {
            $userId = session('user_id');
            $userGender = session('user_gender');

            // Male user -> female fetch
            if ($userGender == 'male') {
                $query->where('gender', 'female');
            }
            // Female user -> male fetch
            elseif ($userGender == 'female') {
                $query->where('gender', 'male');
            }

            // exclude self profile
            $query->where('id', '!=', $userId);
        }

        $customers = $query->paginate(8);

        return view('website.gallery', compact('customers'));
    }



    public function services()
    {
        return view('website.services');
    }
    public function about()
    {
        $teams = Team::orderBy('id', 'desc')->get();
        return view('website.about', compact('teams'));
    }

    public function contact()
    {
        return view('website.contact');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
