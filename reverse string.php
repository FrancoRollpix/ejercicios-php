<?php
/*
$text= "franco";

echo $text;
echo " palabra invertida: ";
echo strrev($text);
*/


$text="Franco";

function reverseString($text){

    for($i=strlen($text)-1, $j=0; $j<$i; $i--, $j++) 
    {
        $revstr = $text[$i];
        $text[$i] = $text[$j];
        $text[$j] = $revstr;
    }
    return $text;
}
  
echo "<h4>palabra: $text </h4> ";
echo "<h4>palabra inverida: <h4> ";
echo reverseString($text);


/////////////////////////////////////////////

/*

$text= "franco";


function reverseString(string $text): string
{
$revstr= "";

for($i=0; $i<=strlen($text); $i++){

	$revstr=$revstr+$i;

	return $revstr;

}

}

echo reverseString($text);
echo $text;
*/
?>