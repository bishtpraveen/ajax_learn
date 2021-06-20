<?php
$a=array(2,3,24,3,2,3,4,5,6,6,7,8,6,5,4,3,2,2,2,4,5,6,7,8,8,9,7,5);



$two=2;
$count=0;
foreach($a as $d){
if($two==$d){
    $count=$count+1;
}

}
echo $count;




?>