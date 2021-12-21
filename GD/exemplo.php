<?php

header("Content-Type: image/jpeg");
$image = imagecreate(256, 256);
$black = imagecolloralocate($image, 0, 0, 0);
$red = imagecolloralocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso de PHP7", $red);
imagejpeg($image);
imagedestroy($image);
var_dump($image);
?>