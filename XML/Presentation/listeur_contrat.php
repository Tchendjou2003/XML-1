<?php  

echo "<div id='cont-cont'>";
$test = process::lister("contrat");

if ($test=='empty') 
{
	echo "<h2 id='titleList1'>Liste des Contrats vide</h2>";
}

echo "</div>";

?>