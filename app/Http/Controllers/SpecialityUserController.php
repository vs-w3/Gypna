<?php

namespace App\Http\Controllers;

use App\Models\SpecialityUser;
use Illuminate\Http\Request;

class SpecialityUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAddSpecialityUser()
    {
        return view('app.profile.speciality.add');
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
     * @param  \App\Models\SpecialityUser  $specialityUser
     * @return \Illuminate\Http\Response
     */
    public function show(SpecialityUser $specialityUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SpecialityUser  $specialityUser
     * @return \Illuminate\Http\Response
     */
    public function edit(SpecialityUser $specialityUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SpecialityUser  $specialityUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SpecialityUser $specialityUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SpecialityUser  $specialityUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpecialityUser $specialityUser)
    {
        //
    }
}
