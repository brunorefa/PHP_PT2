<?php

$font1 = realpath("./fonts/Bevan/BevanRegular.ttf");
$font2 = realpath("./fonts/Bevan/Playball.ttf");

$image = imagecreatefromjpeg("certificado.jpg");
$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);
imagettftext($image, 32, 0, 450, 150, $titleColor, $font1, "CERTIFICADO",);
imagettftext($image, 32, 0,  440, 350, $titleColor, $font2 ,"CERTIFICADO",);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em: ").date("d/m/Y"), $titleColor);
header("Content-Type: image/jpeg");
imagejpeg($image);
imagedestroy($image);
?>