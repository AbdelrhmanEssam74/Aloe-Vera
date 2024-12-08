<?php

namespace App\Controllers;

use App\Models\Product;
use PROJECT\HTTP\Response;

class ProductsController
{
    /**
     * Display a list of products in JSON format.
     */
    public function p($page): void
    {
        $response = new Response();
        $products = Product::getProducts($page);
        $response->json($products);
    }

}
