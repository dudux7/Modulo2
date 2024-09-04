<?php 
    $arr = [];

    for ($i=1; count($arr) < 10; $i++) { 

        if ($i % 5 == 0) {

            $arr[] = $i;
            }
    }
    foreach ($arr as $value) {
        echo "$value \n";
    }
    