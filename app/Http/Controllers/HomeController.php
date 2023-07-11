<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.home.index');
    }

    public function specialist(Request $request)
    {
        return view('pages.home.specialist');
    }

    public function help(Request $request)
    {
        return view('pages.home.help');
    }

    public function faq(Request $request)
    {
        return view('pages.home.faq');
    }

    public function askASpecialist(Request $request)
    {
        return view('pages.home.ask-a-specialist');
    }
}
