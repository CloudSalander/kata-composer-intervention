<?php
//TODO: Enter image by input, check right input, then, grayscale image
require './vendor/autoload.php';

use Intervention\Image\ImageManager;

$input_path = readline("What Image you want to grayscale?");
define('IMAGE_MIME_TYPES',['image/jpeg','image/png','image/gif','image/bmp','image/webp','image/tiff','image/x-icon','image/svg+xml']);

if (file_exists($input_path) && isImage($input_path)) {
   grayscaleImage($input_path);
}
else {
    echo "The image doesn't exists";
}

function isImage(string $image_url): bool {
    $mime_type = mime_content_type($image_url);
    return in_array($mime_type,IMAGE_MIME_TYPES);
}

function grayscaleImage(string $image_url): void {
    $manager = ImageManager::imagick();
    $image = $manager->read($image_url);
    $image = $image->greyscale();
    $image->save('bw'.$image_url);
}
