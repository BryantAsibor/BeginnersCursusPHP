<?php
$array = [
    0 => 1,
    1 => 2,
    2 => [4, 5]
];
//LOOP DOOR De array heen
for ($i = 0 ; $i < count($array); $i++){
    print_r($array[$i]);
    echo "<br>";
}
//KIJK OF DE VALUE EEN ARRAY IS OF NIET
//ALS HET ARRAY IS => LOOP DIE ARRAY
//ALS NIET tel de waarde op bij de som

$sum = 0;
for($i = 0; $i < count($array); $i++){
    if (is_array($array[$i])){
        for ($j = 0; $j < count($array[$i]); $j++){
            $sum += $array[$i][$j];
        }
    } else {
        $sum += $array[$i];
    }
}
//print_r($sum);
//function recursionArray($array)
//{
 //   foreach ($array as $key => $value) {
  //      if (is_array($value)) {
    //        recursionArray($value);
    //    } else {
   //         echo $key . "< >" . $value . "<br>"; //voor die laatste
  //      }
 //   }
//}

//foreach ($array as $value){
//    echo $value . "<br>";
//}



?>