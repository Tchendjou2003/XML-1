<?php  
	
	echo "<div id='list_appartement'>";
	$test = process::lister("appartement");

	if ($test=='empty') 
	{
		echo "<h2 id='titleList1'>Liste des appartements vide</h2>";
	}
	echo "</div>";

?>