<?php
$data=[30,50,70,90];
$maxValue=max($data);
$width=400;
$height=200;
$barWidth=$width/count($data);
$image=imagecreatetruecolor($width,$height);
$bgcolor=imagecolorallocate($image,255,255,255);
$barColor=imagecolorallocate($image,0,0,255);
imagefill($image,0,0,$bgcolor);
foreach ($data as $key => $value) {
  $x1=$key*$barWidth;
  $x2=($key+1) * $barWidth-1;
  $y1=$height-($value/$maxValue*$height);
  $y2=$height-1;
  imagefilledrectangle($image,$x1,$x2,$y1,$y2,$barColor);
}
header("content-type:image/png");
imagepng($image);
imagedestroy($image);
?>