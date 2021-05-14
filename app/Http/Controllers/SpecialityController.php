<?php

namespace App\Http\Controllers;

use App\Http\Requests\SpecialityRequest;
use App\Managers\TranslationManager;
use App\Models\Post;
use App\Models\Speciality;
use App\Models\User;
use Illuminate\Support\Facades\App;

class SpecialityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getSpecialities()
    {
        $specialities = new Speciality();

        return view('admin.speciality.index')
            ->with('model', $specialities)
            ->with('setting', 'speciality');
    }

    /**
     * Create speciality form page
     * 
     * 
     */
    public function getAddSpeciality()
    {
        return view('admin.speciality.add');
    }

    /**
     * Store speciality
     * 
     */
    public function postAddSpeciality(SpecialityRequest $request)
    {
        $speciality = new Speciality();
        $speciality->getTranslationOrNew('ka')->name = $request->input('name_ka');
        $request->input('name_en') !== null ? $speciality->getTranslationOrNew('en')->name = $request->input('name_en') : '';
        
        $speciality->save();
        return redirect(url('admin/specialities'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function getEditSpeciality(Speciality $speciality)
    {
        return view('admin.speciality.edit')->with('speciality', $speciality);
    }   


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function postEditSpeciality(SpecialityRequest $request, Speciality $speciality)
    {

        $speciality->getTranslation('ka')->name = $request->input('name_ka');
        $request->input('name_en') !== null ? $speciality->getTranslationOrNew('en')->name = $request->input('name_en') : '';
        $speciality->save();
        return redirect(url('admin/specialities'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function getDeleteSpeciality(Speciality $speciality)
    {
        $speciality->delete();
        return back();
    }
}
