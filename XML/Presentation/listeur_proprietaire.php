<?php  

echo "<div id='list_proprio'>";

$test = process::lister("proprietaire");

if ($test=='empty') 
{
	echo "<h2 id='titleList1'>Liste des proprietaires vide</h2>";
}

echo "</div>";

?>