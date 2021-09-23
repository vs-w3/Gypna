<?php

namespace App\Http\Controllers;

//use App\Models\Profile;

use App\Managers\ProfileManager;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function __controller()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        return view('app.profile.index')
            ->with('user', $user)
            ->with('navComponent',  ProfileManager::navComponent($user->userable_type))
            ->with('mainComponent', ProfileManager::mainComponent($user->userable_type));
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
     * @param  \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show($locale, User $user)
    {
        //$user = $profile->user; Profi
        //dd($user);
        
        return view('app.profile.index')
            ->with('user', $user)
            ->with('navComponent',  ProfileManager::navComponent($user->userable_type))
            ->with('mainComponent', ProfileManager::mainComponent($user->userable_type));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //
    }
}
