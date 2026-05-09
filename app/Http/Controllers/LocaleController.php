<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function switch(Request $request, string $locale): RedirectResponse
    {
        $supported = array_keys(config('site.locales', ['en' => 'English']));

        if (in_array($locale, $supported, true)) {
            $request->session()->put('locale', $locale);
        }

        return redirect()->back();
    }
}
