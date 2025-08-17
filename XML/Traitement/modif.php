<?php

include('../Donnees/Manager.php');

if (isset($_POST)) 
{
	$key_tab = array_keys($_POST);
	$nombre = count($key_tab);
	$file = $key_tab[$nombre - 1];
	array_pop($_POST);

	$key_val = array_values($_POST);
	$nombre1 = count($key_val);
	$id = $key_val[$nombre1 - 1];

	array_pop($key_val);

	Manager::modifier($id, $key_val, $file);
	if ($file=='contrat') 
	{
		header("location: ../Presentation/Traitement.php");
	}
	else
	{
		header("location: ../Presentation/Structure.php");
	}
}

?>