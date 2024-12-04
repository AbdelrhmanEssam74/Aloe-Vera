<?php

namespace App\Controllers;

use http\Env\Request;
use PROJECT\View\View;

class UserController
{
    public function profile($id = null)
    {
        // Fetch user data
        $userData = app()->db->row("SELECT * FROM `users` WHERE user_id = ?", [$id]);
        $date = [
            'full_name' => $userData[0]->full_name,
            'username' => $userData[0]->username,
            'role' => $userData[0]->role,
        ];
        if ($date)
            return View::makeView('main.profile', $date);
    }

    public function settings()
    {
        return View::makeView('main.settings');
    }
}