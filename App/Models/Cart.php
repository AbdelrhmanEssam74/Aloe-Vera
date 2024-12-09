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
  public static function getItems($user_id)
  {
    return app()->db->row("SELECT * FROM carts JOIN products ON products.product_id = carts.product_id WHERE carts.user_id = ?", [$user_id]);
  }
  public static function deleteItem($user_id, $product_id)
  {
    return app()->db->row("DELETE FROM carts WHERE user_id = ? AND product_id = ?", [$user_id, $product_id]);
  }
}
