<?php

namespace App\Controllers;

use PROJECT\View\View;

class HomeController
{
    public function index(): null
    {
        // Set a flag or output a script to run JavaScript in the browser
        echo '<script>
        document.cookie = "lng=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    </script>';

        return View::makeView("index");
    }


    public function aboutUs(): null
    {
        if(isset($_COOKIE['lng']) and $_COOKIE['lng'] === "ar")
            return View::makeView("ar.main.about-us");
        else
            return View::makeView("main.about-us");

    }

    public function contactUs()
    {
        if(isset($_COOKIE['lng']) and $_COOKIE['lng'] === "ar")
            return View::makeView("ar.main.contact-us");
        else
            return View::makeView("main.contact-us");

    }

    public function ar(): null
    {
        setcookie('lng', "ar", time() + 60 * 60 * 24 * 30, "/");
        return View::makeView("ar.index");
    }
}