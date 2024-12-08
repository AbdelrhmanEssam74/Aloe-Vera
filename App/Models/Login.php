<?php

namespace App\Models;
class Login extends Model
{
    private $user_id;
    private $full_name;
    private $username;
    private $email;
    private $password;

    public static function login($data)
    {
        self::$instance = static::class;
        return app()->db->create($data);
    }
    public static function logout()
    {
        session_unset();
        session_destroy();
        RedirectToView('login');
    }
}