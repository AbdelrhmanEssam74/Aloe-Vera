<?php

namespace App\Controllers;

use App\Models\Product;
use PROJECT\HTTP\Response;

class ProductsController
{
    /**
     * Display a list of products in JSON format.
     */
    public function index(): void
    {
        $response = new Response();
        $products = Product::getProducts();
        $response->json($products);
    }

}
