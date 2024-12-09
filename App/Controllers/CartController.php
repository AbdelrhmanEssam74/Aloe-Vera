<?php

namespace App\Controllers;

use App\Models\Cart;
use App\Models\Product;
use PROJECT\HTTP\Response;
use PROJECT\support\Files;
use PROJECT\Validation\Validation;
use PROJECT\View\View;

class CartController
{
  public function add(): void
  {
    $cart = request()->all()['data'][0];
    Cart::add([
      'user_id' => $cart['user_id'],
      'product_id' => $cart['product_id'],
      'order_quantity' => $cart['quantity'],
    ]);
  }
  public function items($user_id): void
  {
    $response = new Response();
    $allItems = Cart::getItems($user_id);
    $response->json($allItems);
  }
  public function count($user_id)
  {
    echo count(Cart::getItems($user_id));
  }
  public function delete($user_id, $item_id): void
  {
    Cart::deleteItem($user_id, $item_id);
  }
}
