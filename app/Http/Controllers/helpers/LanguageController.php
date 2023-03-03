<?php

namespace App\Http\Controllers\helpers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('applocale', $lang);
        }

        $message = 'Languaged changed to ' . $lang . ' succesfully!';
        $type = 'info';

        return Redirect::back()->with(['message' => $message, 'type' => $type]);
    }
}
