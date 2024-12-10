<?php

namespace App\Controllers;

use App\Models\Product;
use PROJECT\support\Files;
use PROJECT\Validation\Validation;
use PROJECT\View\View;

class CategoriesController
{
    public function aloe_vera_farmers()
    {
        if (isset($_COOKIE['lng']) and $_COOKIE['lng'] === "ar"):
            return View::makeView("ar.categories.aloe_vera_farmers");
        else:
            return View::makeView("categories.aloe_vera_farmers");
        endif;
    }

    public function farmers_upload()
    {
        // handle upload request
        $user_id = app()->session->get('user_id');
        $images = request()->file('images');
        $filesHandler = new Files($images, $user_id);
        // Upload the files and check for errors
        $storedImages = $filesHandler->getImagesArr();
        $validator = new Validation();
        $validator->rules([
            'product_title' => 'required',
            'cactus_type' => 'required',
            'available_quantity' => 'required',
            'price' => 'required',
        ]);
        $validator->make(request()->all());

        if (!$validator->passes()) {
            app()->session->setFlash('errors', $validator->errors());
            return backRedirect();
        }
        $uploadedFiles = $filesHandler->upload();
        Product::create([
            'product_id' => $filesHandler->getProductId(),
            'product_title' => request('product_title'),
            'user_id' => $user_id,
            'cactus_type' => request('cactus_type'),
            'quantity' => request('available_quantity'),
            'price' => request('price'),
            'negligible' => (request('negligible') === "on") ? 1 : 0,
            'details' => request('additional-details'),
            'images' => $filesHandler->getImagesArr()
        ]);
        app()->session->setFlash('success', 'Product uploaded successfully');
        return RedirectToView('/categories/aloe-vera-farmers');
    }

    public function buy_aloe_vera(): null
    {
        if (isset($_COOKIE['lng']) and $_COOKIE['lng'] === "ar"):
            return View::makeView('ar.categories.buy_aloe_vera_leaves');
        else:
            return View::makeView('categories.buy_aloe_vera_leaves');
        endif;

    }
    public function buy_aloe_vera_extract(): null
    {
        if (isset($_COOKIE['lng']) and $_COOKIE['lng'] === "ar"):
            return View::makeView('ar.categories.buy_aloe_vera_extract');
        else:
            return View::makeView('categories.buy_aloe_vera_extract');
        endif;

    }
    public function aloe_vera_benefits(): null
    {
        if (isset($_COOKIE['lng']) and $_COOKIE['lng'] === "ar"):
            return View::makeView('ar.categories.aloe_vera_benefits');
        else:
            return View::makeView('categories.aloe_vera_benefits');
        endif;

    }
}