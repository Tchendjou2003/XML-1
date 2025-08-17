<head>
	<link rel="stylesheet" type="text/css" href="../cssFiles/styleForm.css">
	<title></title>
</head>
<div
 class="content" id="content">
	<form class="form" method="POST" action="../../Traitement/Process.php">
		<div class="title1">Ajouter un proprietaire</div>
		<div class="field1">
			<div class="test">
				<label for="nom">Nom</label>
				<input type="text" name="nom" id="nom">
			</div>
			<div class="test">
				<label for="prenom">Prenom</label>
				<input type="text" name="prenom" id="prenom">
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label for="adresse1"> Adresse 1</label>
				<input type="text" name="adresse1" id="adresse1" >
			</div>
			<div class="test">
				<label for="adresse2"> Adresse 2</label>
				<input type="text" name="adresse2" id="adresse2">
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label for="code">Code Postal</label>
				<input type="text" name="code" id="code">
			</div>
			<div class="test">
				<label for="ville">Ville</label>
				<input type="text" name="ville" id="ville">
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label for="num1">Num telephone 1 </label>
				<input type="text" name="num1" id="num1">
			</div>
			<div class="test">
				<label for="num2">Num telephone 2 </label>
				<input type="text" name="num2" id="num2">
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label for="CA">CA Cumulé </label>
				<input type="text" name="CA" id="CA">
			</div>
			<div class="test">
				<label for="mail">E-mail</label>
				<input type="email" name="mail" id="mail">
			</div>
		</div>
		<div class="field1" id="un">
			<div class="test">
				<input type="reset" value="Effacer" class="in" >
			</div>
			<div class="test">
				<input type="reset" value="Fermer" class="in" onclick="closepopup()">
			</div>
			<div class="test">
				<input type="submit" name="proprietaire" value="Confirmer" class="in">
			</div>
		</div>
	</form>
</div>
