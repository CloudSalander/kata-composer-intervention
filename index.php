<?php
//TODO: Enter image by input, check right input, then, grayscale image
require './vendor/autoload.php';

use Intervention\Image\ImageManager;

$manager = ImageManager::imagick();

$input_path = readline("What Image you want to grayscale?");

if (file_exists($input_path)) {
    mkdir(dirname($outputPath), 0777, true);
}

function grayscaleImage($image) {
    $image = $manager->read($image);
    $image = $image->greyscale();
    var_dump($image);
    #$image->save('images/brotarbw.png');
}
