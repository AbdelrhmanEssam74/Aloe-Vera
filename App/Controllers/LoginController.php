<?php

namespace App\Controllers;

use App\Models\Login;
use PROJECT\support\Hash;
use PROJECT\Validation\Validation;
use PROJECT\View\View;
use App\Models\User;
use PROJECT\HTTP\Response;

class LoginController
{
  public function index()
  {
    $csrfToken = Hash::makeToken(date('Y-m-d H:i:s'));
    $data = array(
      'csrf_token' => $csrfToken,
      'translation' => app()->languages->get(getLanguage()),
    );
    app()->session->set('csrf_token', $data['csrf_token']);
    View::makeView('auth.login', $data);
  }

  /**
   * Handles the login process.
   *
   * This function validates the user's email and password, and if valid, redirects the user to the dashboard.
   * If the validation fails, it sets flash messages for errors and old input, and redirects back to the login page.
   *
   * @return void
   */
  public function login()
  {
    if (hash_equals($_SESSION['csrf_token'], request('csrf_token'))) {
      // Token is valid
      $validator = new Validation();
      $validator->rules([
        'email' => 'required|email|email_exists:users,email|email_active:users,active',
        'password' => 'required|password_verification:users,password'
      ]);
      $validator->make(request()->all());
      if (!$validator->passes()) {
        if ($validator->errors('email')) {
          app()->session->setFlash('email', $validator->errors('email'));
        }
        if ($validator->errors('password')) {
          app()->session->setFlash('password', $validator->errors('password'));
          if (!$validator->errors('email'))
            app()->session->setFlash('oldEmail', request()->get('email'));
        }
        return backRedirect();
      }
      $userData = User::getUserData('email', request('email'));
      app()->session->set('email', $userData['email']);
      app()->session->set('login', true);
      app()->session->set('user_id', $userData['user_id']);
      if(request('remember_me')){
          // update user remember me in database
          User::update('user_id', $userData['user_id'] , ['remember_me' => 1]);
          // set user_id in cookies and encrypt it
          $cookieName = 'ui';
          $userId = $userData['user_id'];
          $hash = hash_hmac('sha256', $userId, 'your_secret_key'); // Secure hash
          $expiration = strtotime('+2 month');
          setcookie($cookieName, $hash, $expiration, "/", "", true, true);

      }
      // return RedirectToView("user/profile/" . $userData['user_id']);
      return RedirectToView("/");
    } else {
      // Invalid token
      $response = new Response();
      $response->setStatusCode(403);
      View::makeErrorView('403');
    }
    // if (isset($_COOKIE['lng']) and $_COOKIE['lng'] === "ar")
    //   return RedirectToView('/ar');
    // else
    //   return RedirectToView('/');
  }

  public function logout(): void
  {
    Login::logout();
  }
}
