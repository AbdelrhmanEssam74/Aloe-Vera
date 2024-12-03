<?php

namespace App\Controllers;

use PROJECT\View\View;

class CategoriesController
{
    public function aloe_vera_farmers()
    {
        return View::makeView("categories.aloe_vera_farmers");
    }
}