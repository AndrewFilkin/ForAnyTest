<?php

namespace App\Http\Controllers\Localization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class TestLocalizationController extends Controller
{
    public function index()
    {
        return view('Localization.index');
    }

    public function setLocale($locale)
    {
        App::setLocale($locale);
        return view('Localization.index', ['variable' => $locale]);
    }
}
