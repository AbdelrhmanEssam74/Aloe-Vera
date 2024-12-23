<?php

namespace App\Models;


class User extends Model
{
    private $id;
  private $user_id;
  private $full_name;
  private $username;
  private $email;
  private $password;
    private $active;
    private $address;
    private $role;
    private $profile_img;
    private $remember_me;
    private $phone_number;
  private $created_at;
  private $authentication_code;
  private $auth_code_created_at;
  public static function getUserData($column, $value = null)
  { // Fetch user data
    $userData = User::where('*', [$column, '=', $value]);
    $data = array(
      'user_id' => $userData[0]->user_id,
      'full_name' => $userData[0]->full_name,
      'username' => $userData[0]->username,
      'email' => $userData[0]->email,
    );
    return $data;
  }
}
