<?php

namespace App\Models;

class Cart extends Model
{
  public $cart_id;
  public $user_id;
  public $product_id;
  public $quantity;
  public $added_at;
  public $updated_at;

  public static function add($data)
  {
    self::$instance = static::class;
    return app()->db->create($data);
  }
  public static function getItems()
  {
  return app()->db->row("SELECT * FROM carts JOIN products ON products.product_id = carts.product_id");
  }
}
