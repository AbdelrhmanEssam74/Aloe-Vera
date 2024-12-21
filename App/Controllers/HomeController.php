<?php

namespace App\Controllers;

use PROJECT\View\View;

class HomeController
{
  public function index(): null
  {
    $data = array(
      'translation' => app()->languages->get(getLanguage()),
    );
    return View::makeView("index", $data);
  }


  public function aboutUs(): null
  {
    $data = array(
      'translation' => app()->languages->get(getLanguage()),
    );
    return View::makeView("main.about-us", $data);
  }

  public function contactUs()
  {
    $data = array(
      'translation' => app()->languages->get(getLanguage()),
    );
    return View::makeView("main.contact-us", $data);
  }
}
