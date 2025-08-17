<head>
	<link rel="stylesheet" type="text/css" href="cssFiles/styleForm.css">
	<title></title>
</head>

<?php 
    $date_formated = date('Y-m-d');
?>
<div class="content" id="contentContrat">
	<form class="form" method="POST" action="../Traitement/insert.php">
		<div class="title1">Nouveau Contrat</div>
		<div class="field1">
			<div class="test">
				<label >Etat</label>
				<select name="categorie"  >
					<option disabled selected >Status</option>
					<option> Resilier </option>
					<option> actif </option>
				</select>
			</div>
			<div class="test">
				<label for="creation-date">Date Création</label>
				<input type="date" name="datecreation" id="creation-date" value="<?php echo $date_formated; ?>">
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label for="start-date">Date Début</label>
				<input type="date" name="datedebut" id="start-date" >
			</div>
			<div class="test">
				<label for="end-date">Date Fin</label>
				<input type="date" name="datefin" id="end-date"  >
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label> Locataire </label>
				<select name="locataire" >
					<option disabled selected >Choisir num Locataire</option>
					<?php
						$obj = Manager::ObjL('locataire');
						foreach ($obj->locataire as $key => $value) 
						{
							echo "<option>".$value['id_locataire']." (".$value->nom.")"."</option>";
						}

					?>
				</select>
			</div>
			<div class="test">
				<label> Appartement </label>
				<select name="appartement" >
					<option disabled selected >Choisir num Appartement</option>
					<?php
						$obj = Manager::ObjL('appartement');
						foreach ($obj->appartement as $key => $value) 
						{
							echo "<option>".$value['id_appartement']."</option>";
						}

					?>
				</select>
			</div>
		</div>  
		<div class="field1" id="un">
			<div class="test">
				<input type="reset" value="Effacer" class="in" >
			</div>
			<div class="test">
				<input type="reset" value="Fermer" class="in" onclick="closeContrat()">
			</div>
			<div class="test">
				<input type="submit" name="contrat" value="confimer" class="in">
			</div>
		</div>
	</form>
</div>

