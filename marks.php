<?php
// $marks=array(
// "Aman"=>array("PHP"=>99,"Python"=>85,"WebDev"=>89),
// "Pandey"=>array("PHP"=>80,"Python"=>75,"WebDev"=>96),
// "Gourav"=>array("PHP"=>60,"Python"=>85,"WebDev"=>99)
// );

// foreach($marks as $key=>$value) 
// {
//  echo $key=>$value;
//  echo "<br>";
// }
// print_r($marks)
// echo "<br>";
$car=array(
    array(55,22,33),
    array(55,22,33),
    array(55,22,33)
);
for($row=0;$row<3;$row++){
    for($col=0;$col<3;$col++){
        echo "Value at index ".$row.$col." is ".$car[$row][$col];
    }
    echo "<br>";
}
?>