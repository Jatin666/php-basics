<?php

//indexed arrays
$peopleone = ['jatin','john','abc'];
//echo $peopleone[1];

$peopletwo = array('ken', 'chunli'); //another way to create an array using function
// echo $peopletwo[1];

$ages =[20,30,40,50];
//to print the list or array you need to print_r($ages) to make it readable
// print_r($ages);
// $ages[1] = 22; //to replace an element
$ages[] = 60;//this will add an element into list at the end
array_push($ages , 70); //another method to add the element into the list
// print_r($ages);

echo count($ages); //count the length of an list or array

$peoplethree = array_merge($peopleone, $peopletwo);
print_r( $peoplethree);


//associative arrays (key and value pairs)

$ninjasOne = ['shaun'=>'black', 'mario' => 'orange', 'luigi'=> 'brown'];
 echo $ninjasOne['mario']; //this will print the value of an key

 $ninjasTwo = array('bowser'=>'green', 'peach'=>'yellow');
 print_r($ninjasTwo) ; //another way of using the array using function


 $ninjasTwo['peach'] = 'pink';
print_r($ninjasTwo) ; //it will change the value of peach to pink 
//its the same method to add an element into the list


?>