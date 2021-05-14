<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutUsRequest;
use App\Models\AboutUs;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $aboutus = AboutUs::first();
        return view('app.aboutus.index')
            ->with('aboutus', $aboutus);
    }

    /**
     * Admin
     */
    public function getAdminAboutUs()
    {
        $aboutus = new AboutUs();

        return view('admin.aboutus.index')
            ->with('model', $aboutus)
            ->with('setting', 'aboutus');
    }

    public function getAddAboutUs()
    {
        return view('admin.aboutus.add');
    }

    public function postAddAboutUs(AboutUsRequest $request)
    {
        $aboutus = new AboutUs();

        $aboutus->getTranslationOrNew('ka')->title = $request->input('title_ka');
        $aboutus->getTranslationOrNew('ka')->body = $request->input('body_ka');
        $aboutus->getTranslationOrNew('en')->title !== null ? $aboutus->getTranslationOrNew('en')->title = $request->input('title_en') : '';
        $aboutus->getTranslationOrNew('en')->body !== null ? $aboutus->getTranslationOrNew('en')->body = $request->input('body_en') : '';
        $aboutus->save();

        return back();
    }

    public function getEditAboutUs(AboutUs $aboutus)
    {
        return view('admin.aboutus.edit')->with('aboutus', $aboutus);
    }

    public function postEditAboutUs(AboutUsRequest $request, AboutUs $aboutus)
    {
        $aboutus->getTranslationOrNew('ka')->title = $request->input('title_ka');
        $aboutus->getTranslationOrNew('ka')->body = $request->input('body_ka');
        $request->input('title_en') !== null ? $aboutus->getTranslationOrNew('en')->title = $request->input('title_en') : 'ddddd';
        $request->input('body_en') !== null ? $aboutus->getTranslationOrNew('en')->body = $request->input('body_en') : '';
        $aboutus->save();

        return back();
    }

    public function getDeleteAboutUs(AboutUs $aboutus)
    {
        $aboutus->delete();
        return back();
    }
}
