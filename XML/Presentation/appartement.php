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

}



?>








<head>
	<link rel="stylesheet" type="text/css" href="cssFiles/styleForm.css">
	<title></title>
</head>
<div class="content1" >
	<form class="form" method="POST" action="../Traitement/modif.php" enctype="multipart/form-data">
		<div class="title1">Ajouter un Appartement</div>
		<div class="field1">
			<div class="test">
				<label for="categorie">Categorie</label>
				<input type="text" name="categorie" id="categorie" value="<?php echo $val1; ?>">
			</div>
			<div class="test">
				<label for="type">Type</label>
				<input type="text" name="type" id="type" value="<?php echo $val2; ?>">
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label for="nbr_personne">Nbre de Personnes</label>
				<input type="text" name="nbr_personne" id="nbr_personne" value="<?php echo $val3; ?>">
			</div>
			<div class="test">
				<label for="adresse">Adresse</label>
				<input type="text" name="adresse" id="adresse" value="<?php echo $val4; ?>">
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label for="photo"> Photo </label>
				<input type="file" name="photo" id="photo">
			</div>
			<div class="test">
				<label for="equipements"> Equipements </label>
				<input type="text" name="equipements" id="equipements" value="<?php echo $val5; ?>">
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label> Tarif </label>
				<select name="tarif">
					<option disabled selected >Choisir un Code Tarif</option>
					<?php
						$obj = Manager::ObjL('tarif');
						foreach ($obj->tarif as $key => $value) 
						{
							echo "<option>".$value['id_tarif']." (".$value->prixmax.")"."</option>";
						}

					?>
				</select>
			</div>
			<div class="test">
				<label> Num Propriétaire </label>
				<select name="proprietaire">
					<option disabled selected >Choisir Num Propriétaire</option>
					<?php
						$obj = Manager::ObjL('proprietaire');
						foreach ($obj->proprietaire as $key => $value) 
						{
							echo "<option>".$value['id_proprietaire']." (".$value->nom.")"."</option>";
						}

					?>
				</select>
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
				<input type="reset" value="Fermer" class="in" onclick="closeAppart()">
			</div>
			<div class="test">
				<input type="submit" name="appartement" value="Confirmer" class="in">
			</div>
		</div>
	</form>
</div>
