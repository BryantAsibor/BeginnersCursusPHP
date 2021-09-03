<?php
$personOne = 'Bryant';
$persons = ['Bryant', 'Jorn'];
echo $persons[0]; //Bryant
echo $persons[1]; //Jorn
$persons[] = 'Joey'; //array bestaat nu uit 0 => 'Bryant', 1 => 'Jorn', 2 => 'Joey', 'Vries' => 'Piet'
$persons['Vries'] = 'Piet';
echo $persons[2]; //Joey
echo $persons['Vries']; //Piet
echo "Hallo"." "."ik ben bryce";