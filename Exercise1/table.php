<?php

ini_set("display_errors", 1);

function multiply($x, $y) 
{
	$z = $x * $y;
    	return $z;
}
function multTable($x)
{
	echo "<tr>";
	for($i = 1; $i<=100; $i++)
	{
		echo "<td>" . multiply($x, $i) . "</td>";
	}
	echo "</tr";
	echo "<br>";
	if($x < 100)
	{
		multTable($x+1);
	}
}
echo "<table style='width:23%'>";
multTable(1);
echo "</table>";
?>
