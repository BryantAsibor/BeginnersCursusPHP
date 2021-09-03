<?php
$personOne = "Bryant";
$persons = [
    0 => "Bryant",
    1 => "Guillaume",
    "Oosterink" => "Jorn",
    2 => ["Asibor", "Orsel"]
]; //key => value pair
JSC($persons);
print_r($persons);
function JSC($input){
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}
echo $persons[2][0];