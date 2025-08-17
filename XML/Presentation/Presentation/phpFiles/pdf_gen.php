<head>
	<link rel="stylesheet" type="text/css" href="../cssfiles/struct.css">
	<link rel="stylesheet" type="text/css" href="../cssFiles/table.css">
	<!--
	<link rel="stylesheet" type="text/css" href="test.css">
	<script src="jquery.js"></script>
	<link rel="stylesheet" href="bootstrap\css\boostrap.min.css">
	<script href="bootstrap\js\bootstrap.min.js"></script>
	-->
	<title>Projet2</title>
</head>

<?php
include('listeur.php');

if (isset($_GET['table']) && $_GET['table'] == 'locataire')  
{
	echo "<div class='test2'><button class='bt' onclick='printLocat()'>Imprimer<button></div>";
	$l1 = new listeur();
	$l1->listLocat();
}

if (isset($_GET['table']) && $_GET['table'] == 'proprietaire')
{
	echo "<div class='test2'><button class='bt' onclick='printProprio()'>Imprimer<button></div>";
	$l1 = new listeur();
	$l1->listProprio();
}

if (isset($_GET['table']) && $_GET['table'] == 'appartement')
{
	echo "<div class='test2'><button class='bt' onclick='printAppart()'>Imprimer<button></div>";
	$l1 = new listeur();
	$l1->listAppart();
}

if (isset($_GET['table']) && $_GET['table'] == 'tarif')
{
	echo "<div class='test2'><button class='bt' onclick='printTarif()'>Imprimer<button></div>";
	$l1 = new listeur();
	$l1->listTarif();
}

?>
<script type="text/javascript">
	function printTarif()
	{
		window.print();
	}

	function printProprio()
	{
		window.print();
	}

	function printLocat()
	{
		window.print();
	}

	function printAppart()
	{
		window.print();
	}
</script>