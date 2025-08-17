<?php  

echo "<div id='list_tarif'>";


$test = process::lister("tarif");

if ($test=='empty') 
{
	echo "<h2 id='titleList1'>Liste des tarifs vide </h2>";
}

echo "</div>";

?>