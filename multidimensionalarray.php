<?php  
// multi-dimensional arrays

$blogs = [

['title' => 'mario party', 'author' =>'mario', 'content'=>'lorem', 'likes' => 30],
['mario kart cheats', 'toad', 'lorem', 25],
['zelda hidden chests', 'link', 'lorem', 50]
];

print_r($blogs[1][2]); //it will print the second row with second element

//print_r($blogs[1][1]);

//echo $blogs[2][‘author'];

//echo count($blogs) ;

$blogs[] = ['title'=> 'castle party', 'author'=>'peach', 'content'=>'lorem', 'likes'=>100];

print_r($blogs) ;

$popped =  array_pop($blogs);
print_r($popped) ;


?>