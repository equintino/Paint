<?php
require_once __DIR__.'/vendor/autoload.php';

use Paint\Image;
use Paint\ImageFactory;
use Paint\Filter\Grayscale;
use Paint\Format\JPEG;
use Paint\Transformation\Crop;

$image = new Image('tests/carlos.jpeg');
$image->addTransformation(new Crop(300, 200));
$image->addFilter(new Grayscale());
$image->generate(new JPEG(60), 'tests/destination.jpeg');
$img = "tests/destination.jpeg";
echo "<img src='{$img}' alt='result' />";

$factory = ImageFactory::create('tests/carlos.jpeg');
$factory->addTransformation(new Crop(300, 200));
$factory->addFilter(new Grayscale());
$factory->generate('jpeg', 'tests/destination.jpg');
$img = "tests/destination.jpg";
echo "<img src='{$img}' alt='result' />";
