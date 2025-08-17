<?php  


include('../Donnees/Manager.php');

if (isset($_GET)) 
{
	foreach($_GET as $key => $value)
	{
		$file = $key;
		$id = $value;
	}

	$tab = Manager::getUnique($id, $file);

	$val1 = $tab[0];
	$val2 = $tab[1];
}



?>




<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="cssFiles/styleForm.css">
	<title></title>
</head>
<div class="content1" id="contentTarif">
	<form class="form" method="POST" action="../Traitement/modif.php">
		<div class="title1">Modifier Tarif</div>
		<div class="field1">
			<div class="test">
				<label for="prixmax">Prix Maximum</label>
				<input type="text" name="prixmax" id="prixmax" value="<?php echo $val1; ?>">
			</div>
			<div class="test">
				<label for="prixmin">Prix Minimum</label>
				<input type="text" name="prixmin" id="prixmin" value="<?php echo $val2; ?>">
			</div>
		</div>
		<div>
			<input type="hidden" name="blind" value="<?php echo $id; ?>">
		</div> 
		<div class="field1" id="un">
			<div class="test">
				<input type="reset" value="Effacer" class="in" >
			</div>
			<div class="test">
				<input type="reset" value="Fermer" class="in" onclick="closeTarif()">
			</div>
			<div class="test">
				<input type="submit" name="tarif" value="modifier" class="in">
			</div>
		</div>
	</form>					
</div>