<?php

require './vendor/autoload.php';

use Intervention\Image\ImageManager;

$manager = ImageManager::imagick();

$image = $manager->read('images/brotar.jpg');
$image = $image->greyscale();
$image->save('images/brotarbw.png');