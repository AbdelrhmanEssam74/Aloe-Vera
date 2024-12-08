<?php

namespace App\Models;


class Product extends Model
{
    public $product_id;
    public $full_name;
    public $phone_number;
    public $user_id;
    public $cactus_type;
    public $quantity;
    public $price;
    public $negligible;
    public $address;
    public $details;
    public $images;
    public $upload_date;
    public $updated_date;


    public static function getProducts($page)
    {
        self::$instance = static::class;
        // Fetch all products from the database
        $allProducts = app()->db->read("*");
        // Split products into chunks of 6
        $productsPerPage = array_chunk($allProducts, 6);
        // Return the array corresponding to the requested page (zero-based index)
        // If the page does not exist, return an empty array
        return $productsPerPage[$page - 1] ?? [];
    }

}