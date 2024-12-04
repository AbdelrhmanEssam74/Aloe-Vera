<?php

namespace App\Controllers;

use PROJECT\View\View;

class CategoriesController
{
    public function aloe_vera_farmers(): null
    {
        return View::makeView("categories.aloe_vera_farmers");
    }

    public function farmers_upload()
    {
        // Simulating getting the user ID from a session
        $user_id = app()->session->get('user_id'); // Replace with your session management logic

        // Accessing uploaded files
        $images = $_FILES['images']; // Use native PHP $_FILES
        $item_id = uniqid('', true); // Generate a unique identifier

        // Directory setup
        $upload_dir = 'assets/uploads/'; // Adjust the path to your upload directory
        $new_upload_dir_user = $upload_dir . $user_id;
        $new_upload_dir_item = $new_upload_dir_user . '/' . $item_id;

        // Create directories if they don't exist
        if (!is_dir($new_upload_dir_user)) {
            mkdir($new_upload_dir_user, 0777, true);
        }
        if (!is_dir($new_upload_dir_item)) {
            mkdir($new_upload_dir_item, 0777, true);
        }

        // Array to store new images with new names
        $uploaded_files = [];

        // Loop through each uploaded file
        foreach ($images['tmp_name'] as $index => $tmp_name) {
            // Check for valid uploaded file
            if ($images['error'][$index] !== 0 || !is_uploaded_file($tmp_name)) {
                echo "Error: Invalid file upload for index $index.<br>";
                continue; // Skip this file and move to the next
            }

            // Get the original name and extension
            $original_name = $images['name'][$index];
            $img_extension = pathinfo($original_name, PATHINFO_EXTENSION);

            // Create a new file name with a counter from 0 to length
            $new_img_name = $item_id . '_' . $user_id . '_' . $index . '.' . $img_extension;

            // Destination path
            $destination = $new_upload_dir_item . '/' . $new_img_name;

            // Move the file
            if (!move_uploaded_file($tmp_name, $destination)) {
                echo "Error: Failed to upload file: $original_name<br>";
            } else {
                echo "File uploaded successfully: $new_img_name<br>";

                // Add the new file path to the array
                $uploaded_files[] = $destination;
            }
        }

        // Print or log the array of new file paths
        echo "<pre>";
        print_r($uploaded_files);
        echo "</pre>";

        // Optionally return or log a success message
        echo "All valid files processed successfully!";
    }




}