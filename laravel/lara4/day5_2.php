<?php

$result=1;
$num=7;
for($index=$num;$index>0;$index--)
{
    $result*=$index;
}
echo $result;

$result=1;
function factorial($n)
{
 if($n==1)
 {
    return $n;
 }
 else
 {
    return $n*factorial($n-1);
 }
}
$result=factorial($num);
echo "<br> Result from recursive : $result";

?>