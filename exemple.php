<?php
require_once __DIR__.'/vendor/autoload.php';

use Paint\Image;
use Paint\ImageFactory;
use Paint\Filter\Grayscale;
use Paint\Format\JPEG;
use Paint\Transformation\Resize;
use Paint\Transformation\Crop;

echo "original";
echo "<img src='tests/carlos.jpeg' alt='origin' />";

$image = new Image('tests/carlos.jpeg');
$image->setOutputSize(110, 121.6, 2);
// $image->addTransformation(new Resize(300, 200));
$image->generate(new JPEG(60), 'tests/destination.jpeg');
echo "Crop";
echo "<img src='tests/destination.jpeg' alt='result' />";

$image2 = new Image("tests/carlos.jpeg");
$image2->setOutputSize(138, 152, 2);
$image2->generate(new JPEG(60), "tests/destination2.jpeg");
echo "Crop2";
echo "<img src='tests/destination2.jpeg' alt='crop2' />";

// $factory = ImageFactory::create('tests/carlos.jpeg');
// $factory->addTransformation(new Crop(300, 200));
// $factory->addFilter(new Grayscale());
// $factory->generate('jpeg', 'tests/destination.jpg');
// $img = "tests/destination.jpg";
// echo "<img src='{$img}' alt='result' />";
