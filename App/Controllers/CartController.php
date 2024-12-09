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
      'quantity' => $cart['quantity'],
    ]);
  }
  public function items(): void
  {
    $response = new Response();
    $allItems = Cart::getItems();
    $response->json($allItems);
  }
}
