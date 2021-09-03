<?php

$array = [];
for($i = 1; $i <= 100; $i++) {
    $array[] = $i * $i;
}
JSC($array);

function JSC($input){
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}
