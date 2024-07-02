<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller
{
    public function setLocale($locale): RedirectResponse
    {

        if(in_array($locale, ['en', 'lv'])) {
            Session::put('locale', $locale);
            App::setLocale($locale);
            Log::info('Locale changed to: ' . $locale);
        }

        return redirect()->back();
    }
}
