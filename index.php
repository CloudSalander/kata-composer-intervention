<?php
//TODO: Enter image by input, check right input, then, grayscale image
require './vendor/autoload.php';

use Intervention\Image\ImageManager;

$input_path = readline("What Image you want to grayscale?");

if (file_exists($input_path)) {
   grayscaleImage($input_path);
}
else {
    echo "The image doesn't exists";
}

function grayscaleImage(string $image_url): void {
    $manager = ImageManager::imagick();
    $image = $manager->read($image_url);
    $image = $image->greyscale();
    $image->save('bw'.$image_url);
}
