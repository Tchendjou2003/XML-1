<head>
	<link rel="stylesheet" type="text/css" href="../cssFiles/styleForm.css">
	<title></title>
</head>
<div class="content" id="contentAppart">
	<form class="form" method="POST" action="../../Traitement/Process.php" enctype="multipart/form-data">
		<div class="title1">Ajouter un Appartement</div>
		<div class="field1">
			<div class="test">
				<label for="categorie">Categorie</label>
				<input type="text" name="categorie" id="categorie">
			</div>
			<div class="test">
				<label for="type">Type</label>
				<input type="text" name="type" id="type">
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label for="nbr_personne">Nbre de Personnes</label>
				<input type="text" name="nbr_personne" id="nbr_personne" >
			</div>
			<div class="test">
				<label for="adresse">Adresse</label>
				<input type="text" name="adresse" id="adresse">
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label for="photo"> Photo </label>
				<input type="file" name="photo" id="photo">
			</div>
			<div class="test">
				<label for="equipements"> Equipements </label>
				<input type="text" name="equipements" id="equipements">
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label> Tarif </label>
				<select name="tarif">
					<option disabled selected >Choisir un Code Tarif</option>
					<?php
						include('listeur.php');
						$obj = new listeur();
						$obj->UnivLister('tarif');
					?>
				</select>
			</div>
			<div class="test">
				<label> Num Propriétaire </label>
				<select name="proprietaire">
					<option disabled selected >Choisir Num Propriétaire</option>
					<?php
						$obj = new listeur();
						$obj->UnivLister('proprietaire');
					?>
				</select>
			</div>
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
