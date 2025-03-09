<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function __invoke($locale)
    {
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
