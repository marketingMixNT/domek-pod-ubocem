<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function home()
    {
        return view('pages.home.index');
    }
    public function cottage()
    {
        return view('pages.cottage.index');
    }
    public function contact()
    {
        return view('pages.contact.index');
    }
   
}
