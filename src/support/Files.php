<?php

namespace PROJECT\support;

class Files
{
    private $images;
    private $user_id;
    private $item_id;
    private $upload_dir;
    private $uploaded_files = [];
    private $errorsBag = [];
    private $arr_images = [];

    public function __construct(array $images, $user_id, string $upload_dir = 'assets/uploads/')
    {
        $this->images = $images;
        $this->user_id = $user_id;
        $this->item_id = uniqid(); // Unique identifier for the item
        $this->upload_dir = rtrim($upload_dir, '/'); // Ensure no trailing slash
    }

    /**
     * Adds an error to the error bag.
     *
     * @param string $key The key or category of the error.
     * @param string $message The error message.
     * @param string $severity The severity level (e.g., 'info', 'warning', 'critical').
     * @param int|null $code An optional error code.
     */
    public function addError(string $key, string $message, string $severity = 'critical', int $code = null): void
    {
        $timestamp = date('Y-m-d H:i:s');
        $this->errorsBag[] = [
            'key' => $key,
            'message' => $message,
            'severity' => $severity,
            'code' => $code,
            'timestamp' => $timestamp
        ];
    }

    /**
     * Checks if there are any errors in the error bag.
     *
     * @return bool True if there are errors, false otherwise.
     */
    public function hasError(): bool
    {
        return !empty($this->errorsBag);
    }

    /**
     * Retrieves all errors from the error bag.
     *
     * @return array The array of errors.
     */
    public function getErrors(): array
    {
        return $this->errorsBag;
    }

    /**
     * Retrieves errors by their severity level.
     *
     * @param string $severity The severity level to filter by (e.g., 'warning').
     * @return array The filtered array of errors.
     */
    public function getErrorsBySeverity(string $severity): array
    {
        return array_filter($this->errorsBag, function ($error) use ($severity) {
            return $error['severity'] === $severity;
        });
    }

    /**
     * Clears all errors from the error bag.
     */
    public function clearErrors(): void
    {
        $this->errorsBag = [];
    }

    /**
     * Uploads the files and moves them to the target directory.
     *
     * @return array The paths of successfully uploaded files.
     */
    public function upload(): array
    {
        $new_upload_dir_user = $this->upload_dir . '/' . $this->user_id;
        $new_upload_dir_item = $new_upload_dir_user . '/' . $this->item_id;

        // Create directories if they don't exist
        if (!is_dir($new_upload_dir_user)) {
            mkdir($new_upload_dir_user, 0777, true);
        }
        if (!is_dir($new_upload_dir_item)) {
            mkdir($new_upload_dir_item, 0777, true);
        }

        // Loop through each uploaded file and move it to the target directory
        foreach ($this->images['tmp_name'] as $index => $tmp_name) {
            // Validate the uploaded file
            if ($this->images['error'][$index] !== 0 || !is_uploaded_file($tmp_name)) {
                $this->addError("upload_error_$index", "Invalid file upload for index $index.", 'critical');
                continue; // Skip invalid file
            }

            // Get the original name and extension
            $original_name = $this->images['name'][$index];
            $img_extension = pathinfo($original_name, PATHINFO_EXTENSION);
            $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

            if (!in_array(strtolower($img_extension), $allowedExtensions)) {
                $this->addError("invalid_file_type_$index", "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.", 'warning');
                continue;
            }

            // Create a new file name with a counter from 0 to length
            $new_img_name = $this->item_id . '_' . $this->user_id . '_' . $index . '.' . $img_extension;
            $this->arr_images[] = $new_img_name;
            // Destination path
            $destination = $new_upload_dir_item . '/' . $new_img_name;

            // Move the file and store the path in the array
            if (move_uploaded_file($tmp_name, $destination)) {
                $this->uploaded_files[] = $destination;
            } else {
                $this->addError("upload_failed_$index", "Failed to upload file: $original_name.", 'critical');
            }
        }
        return $this->uploaded_files;
    }

    public function getImagesArr(): string
    {
        return implode("|", $this->uploaded_files);
    }

    public function getProductId()
    {
        return $this->item_id;
    }
}
