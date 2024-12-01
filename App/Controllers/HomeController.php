<?php

namespace App\Controllers;

use PROJECT\View\View;

class HomeController
{
    public function index(): null
    {
        return View::makeView("index");
    }
    public function aboutUs(): null
    {
        return View::makeView("main.about-us");
    }
    public function contactUs(): null
    {
        return View::makeView("main.contact-us");
    }
}