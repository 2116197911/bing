<?php 



$array = [2,4,3,6,3,2,5,5];
var_dump(FindNumsAppearOnce($array)); 

function FindNumsAppearOnce($array)
{
	$len = count($array);
	$value = array_count_values($array);
	 //var_dump($value);


	 foreach($value as $k=>$v)
	 {
	 	if($v<2)
	 	{
            $arr[]=$k;
	 	}
	 }
	 return $arr;
}



?>