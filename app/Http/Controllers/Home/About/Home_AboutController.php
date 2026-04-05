<?php

namespace App\Http\Controllers\Home\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home_AboutController extends Controller
{
     public function index()
    {
        return view("pages.templates.about-us.index");
    }
}
