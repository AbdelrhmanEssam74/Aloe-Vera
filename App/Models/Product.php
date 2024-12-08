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


    public static function getProducts()
    {
        self::$instance = static::class;
        return app()->db->read("*");
    }
}