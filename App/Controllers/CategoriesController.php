<?php

namespace App\Controllers;

use PROJECT\support\Files;
use PROJECT\View\View;

class CategoriesController
{
    public function aloe_vera_farmers()
    {
        $user_id = !empty(app()->session->get('user_id')) ? app()->session->get('user_id') : null;
        $userData = app()->db->row("SELECT * FROM `users` WHERE user_id = ?", [$user_id]);
        if ($userData):
            $date = [
                'full_name' => $userData[0]->full_name,
                'phone_number' => $userData[0]->phone_number,
            ];
            return View::makeView("categories.aloe_vera_farmers", $date);

        else:
            return View::makeView("categories.aloe_vera_farmers");
        endif;
    }

    public function farmers_upload()
    {
        // handle user_data upload
        // handle upload request
        $user_id = app()->session->get('user_id');
        $images = request()->file('images');
        $filesHandler = new Files($images, $user_id);
        // Upload the files and check for errors
        $uploadedFiles = $filesHandler->upload();
        if ($filesHandler->hasError()) {
            // Display errors
            $errors = $filesHandler->getErrors();
            foreach ($errors as $error) {
                echo "Error [{$error['key']}]: {$error['message']} (Severity: {$error['severity']}, Code: {$error['code']}, Timestamp: {$error['timestamp']})<br>";
            }
        }
    }


}