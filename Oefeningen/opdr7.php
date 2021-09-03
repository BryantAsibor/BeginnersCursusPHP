<?php
$array1 = [1,2,3]; //3
$array2 = [4, 5]; //2
$array3 = [];

//1 * 4
//1 * 5
//2 * 4
//2 * 5
//3 * 4
//3 * 5

for($i = 0; $i < count($array1); $i++) {
        for ($j = 0; $j < count($array2); $j++){
            $array3[] = $array1[$i] * $array2[$j];

    }
}
print_r($array3);