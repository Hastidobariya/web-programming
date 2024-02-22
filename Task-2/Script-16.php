<html>
<form>
input sentence:<input type="text" name="sec"/>
<input type="submit" name="enter"/>
</form>
</html>



<?php
$str=$_REQUEST['sec'];
$str=strtolower($str);
$count=0;
$len=strlen($str);
for($i=0;$i<$len;$i++)
{
	if($str[$i]=='a'||$str[$i]=='e'||$str[$i]=='i'||$str[$i]=='o'||$str[$i]=='u')
    {
	 $count=$count+1;
    }  
}
echo "total vowels are ".$count;
?>