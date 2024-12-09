<?php

namespace App\Controllers;

use App\Models\Product;
use PROJECT\HTTP\Response;

class ProductsController
{
    /**
     * Display a list of products in JSON format.
     */
    public function page($page, $filter): void
    {
//        echo $filter;
        $response = new Response();
        $products = Product::getProducts($page, $filter);
        $response->json($products);
    }

}
