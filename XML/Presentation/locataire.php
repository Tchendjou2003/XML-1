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
	$val3 = $tab[2];
	$val4 = $tab[3];
	$val5 = $tab[4];
	$val6 = $tab[5];
	$val7 = $tab[6];
	$val8 = $tab[7];
	$val9 = $tab[8];
}



?>








<head>
	<link rel="stylesheet" type="text/css" href="cssFiles/styleForm.css">
	<title></title>
</head>
<div class="content1">
	<form class="form" method="POST" action="../Traitement/modif.php">
		<div class="title1">Modifier Locataire</div>
		<div class="field1">
			<div class="test">
				<label for="nom">Nom </label>
				<input type="text" name="nom" id="nom" value="<?php echo $val1; ?>">
			</div>
			<div class="test">
				<label for="prenom">Prenom </label>
				<input type="text" name="prenom" id="prenom" value="<?php echo $val2; ?>">
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label for="adresse1"> Adresse 1</label>
				<input type="text" name="adresse1" id="adresse1" value="<?php echo $val3; ?>" >
			</div>
			<div class="test">
				<label for="adresse2"> Adresse 2</label>
				<input type="text" name="adresse2" id="adresse2" value="<?php echo $val4; ?>">
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label for="code">Code Postal</label>
				<input type="text" name="code" id="code" value="<?php echo $val5; ?>">
			</div>
			<div class="test">
				<label for="ville">Ville</label>
				<input type="text" name="ville" id="ville"value="<?php echo $val6; ?>">
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label for="num1">Num telephone 1 </label>
				<input type="text" name="num1" id="num1" value="<?php echo $val7; ?>">
			</div>
			<div class="test">
				<label for="num2">Num telephone 2 </label>
				<input type="text" name="num2" id="num2" value="<?php echo $val8; ?>">
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label for="mail">E-mail</label>
				<input type="email" name="mail" id="mail" value="<?php echo $val9; ?>">
			</div>
		</div>
		<div>
			<input type="hidden" name="blind" value="<?php echo $id; ?>">
		</div>
		<div class="last" id="un">
			<div class="test">
				<input type="reset" value="Effacer" class="in" >
			</div>
			<div class="test">
				<input type="reset" value="Fermer" class="in" onclick="closeLocat()">
			</div>
			<div class="test">
				<input type="submit" name="locataire" value="modifier" class="in">
			</div>
		</div>
	</form>
</div>
