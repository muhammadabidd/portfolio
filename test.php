<?php

$myfile1 = file_get_contents("json1.json");

$myfile1 = json_decode($myfile1);

$myfile2 = file_get_contents("json2.json");

$myfile2 = json_decode($myfile2);

// print_r($myfile);

foreach ($myfile1 as $item) {
    echo "<li> $item->name : $item->price </li>";
}

foreach ($myfile2 as $item) {
    echo "<li> $item->name </li>";

    echo "<ol>";
    foreach ($item->courses as $course) {
        
        echo "<li>$course</li>";
    }
    echo "</ol>";
}

echo '<pre>';
print_r($myfile2);
echo'</pre>';

echo "asdbaslkdalsdkjasd";

?>