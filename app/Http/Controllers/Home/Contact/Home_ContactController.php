<?php

namespace App\Http\Controllers\Home\Contact;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Home_ContactController extends Controller
{
    public function index()
    {
        return view("pages.templates.contact-us.index");
    }
}
