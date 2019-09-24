<?php



for($i=5;$i>=1;$i--)
{
	for($k=5;$k>$i;$k--)
	{
		echo "&nbsp&nbsp";
	}
	for($j=1;$j<=$i;$j++)
	{
	echo $j;
	}
	echo "<br>";
}


?>