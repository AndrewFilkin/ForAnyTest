<?php

namespace App\Http\Controllers\Localization;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Cookie;

class TestLocalizationController extends Controller
{
    public function index(Request $request)
    {
        $cookieLocate = $request->cookie('locate');
        if ($cookieLocate) {
            App::setLocale($cookieLocate);
            return view('Localization.index', ['cookieLocate' => trans('message.text')]);
        } else {
            return view('Localization.index', ['choiceText' => 'Вашего теста еще нет в cookie, пожалуйста выберете язык, он отправится в cookie на 3 минуты!']);
        }
    }

    protected function setLocale(Request $request, $locale)
    {
        $cookieLocate = cookie('locate', $locale, 1);
        App::setLocale($locale);
        return response()->view('Localization.index', ['variable' => $locale])->cookie($cookieLocate);
    }
}
