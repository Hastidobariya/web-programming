<?php
$num1=11;
$num2=21;
$num3=31;

if($num1>$num2 && $num1>$num3)
{
	
	echo $num1;
}
else
{
	if($num2>$num1 && $num2>$num3)
	{
	echo $num2;
    }
else
    {
	echo $num3;
    }
}

?>