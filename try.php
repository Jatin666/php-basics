<?php 
define("NAME",'Jatin');
//$name = "Jatin";
$age = 25; 

//echo $name; //printing the variable 
//using  name variable  in html file 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>using variable </title>
</head>
<body>
    <h1><?php echo NAME;?></h1> 
    <div><?php echo $age?></div>

</body>
</html>