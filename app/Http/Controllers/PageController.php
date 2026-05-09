<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('home');
    }

    public function about(): View
    {
        return view('about');
    }

    public function implants(): View
    {
        return view('services.implants');
    }

    public function aligners(): View
    {
        return view('services.aligners');
    }

    public function cookiePolicy(): View
    {
        return view('legal.cookie-policy');
    }

    public function privacyPolicy(): View
    {
        return view('legal.privacy-policy');
    }

    public function termsOfUse(): View
    {
        return view('legal.terms-of-use');
    }
}
