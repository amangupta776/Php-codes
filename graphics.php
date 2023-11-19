<?php
// $im=imagecreate(500,500);
// $white=imagecolorallocate($im,255,255,255);
// $black=imagecolorallocate($im,0,0,0);
// imagerectangle($im,50,50,450,450,$black);
// imagefilledellipse($im,250,250,400,400,$black);
// $values = array(
//     150, 50, // Point 1 (x, y)
//     50, 250, // Point 2 (x, y)
//     250, 250 // Point 3 (x, y)
//     );
// imagefilledpolygon($im,$values,3,$black);
// imageline($im,20,480,450,480,$black);
// imagestring($im,5,200,470,"A box",$black);
// imagefilledellipse($im, 250, 250, 400, 400, $black);

$src = imagecreatefrompng('ab.png');
$wid = imagesx($src);
$hig = imagesy($src);
$x = $wid / 2;
$y = $hig / 2;
$dst = imagecreatetruecolor($x, $y);
imagecopyresampled($dst, $src, 0, 0, 0, 0, $x, $y, $wid, $hig);

header('Content-Type:image/png');
imagepng($dst);
?>