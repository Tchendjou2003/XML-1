<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="cssFiles/styleForm.css">
	<title></title>
</head>
<div class="content" id="contentTarif">
	<form class="form" method="POST" action="../Traitement/insert.php">
		<div class="title1">Ajouter un Tarif</div>
		<div class="field1">
			<div class="test">
				<label for="prixmax">Prix Maximum</label>
				<input type="text" name="prixmax" id="prixmax">
			</div>
			<div class="test">
				<label for="prixmin">Prix Minimum</label>
				<input type="text" name="prixmin" id="prixmin">
			</div>
		</div>
		<div class="field1" id="un">
			<div class="test">
				<input type="reset" value="Effacer" class="in" >
			</div>
			<div class="test">
				<input type="reset" value="Fermer" class="in" onclick="closeTarif()">
			</div>
			<div class="test">
				<input type="submit" name="tarif" value="Confirmer" class="in">
			</div>
		</div>
	</form>					
</div>