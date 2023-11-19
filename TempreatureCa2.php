
<?php

$temp_data = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63);

$total_temp = 0;
$lowest_temp = array();
$highest_temp = array();

foreach ($temp_data as $temp) {
    $total_temp += $temp;
}

$average_temp = $total_temp / count($temp_data);

sort($temp_data);

for ($i = 0; $i < 5; $i++) {
    $lowest_temp[] = $temp_data[$i];
}

rsort($temp_data);

for ($i = 0; $i < 5; $i++) {
    $highest_temp[] = $temp_data[$i];
}

echo "Average Temperature: " . $average_temp ;
echo "<br>";

echo "Five Lowest Temperatures: ";
foreach ($lowest_temp as $temp) {
    echo $temp . " ";
}
echo "<br>";
echo "Five Highest Temperatures: ";
foreach ($highest_temp as $temp) {
    echo $temp . " ";
}

?>