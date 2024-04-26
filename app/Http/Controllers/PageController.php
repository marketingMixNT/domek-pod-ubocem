<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function home()
    {
        return view('pages.home.index');
    }
    public function chalet()
    {
        return view('pages.chalet.index');
    }
    public function contact()
    {
        return view('pages.contact.index');
    }
    public function attractions()
    {
        return view('pages.attractions.index');
    }
    public function privacy_policy()
    {
        return view('pages.privacy_policy.index');
    }
   
}
