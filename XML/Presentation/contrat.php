<head>
	<link rel="stylesheet" type="text/css" href="cssFiles/styleForm.css">
	<title></title>
</head>

<header>
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

}



?>


<div class="content1" >
	<form class="form" method="POST" action="../Traitement/modif.php" onsubmit="return confirmAction()">
		<div class="title1">Modifier contrat </div>
		<div class="field1">
			<div class="test">
				<label >Etat</label>
				<select name="etat"  >
					<option disabled selected >Status</option>
					<option <?php  if($val1=='Resilier') echo 'selected'; ?>> Résilier </option>
					<option<?php if($val1=='actif') echo ' selected'; ?>> actif </option>
				</select>
			</div>
			<div class="test">
				<label for="creation-date">Date Création</label>
				<input type="date" name="date_creation" id="creation-date" value="<?php echo $val2 ; ?>">
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label for="start-date">Date Début</label>
				<input type="date" name="date_debut" id="start-date" value="<?php echo $val3 ; ?>">
			</div>
			<div class="test">
				<label for="end-date">Date Fin</label>
				<input type="date" name="date_fin" id="end-date" value="<?php echo $val4 ; ?>" >
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label> Locataire </label>
				<select name="num_locataire" >
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
				<select name="num_location" >
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
		<div>
			<input type="hidden" name="num_contrat" value="<?php echo $id; ?>">
		</div>  
		<div class="field1" id="un">
			<div class="test">
				<input type="reset" value="Effacer" class="in" >
			</div>
			<div class="test">
				<input type="reset" value="Annuller" class="in" onclick="quit()">
			</div>
			<div class="test">
				<input type="submit" name="contrat" value="Modifier" class="in">
			</div>
		</div>

		<script type="text/javascript">
			function confirmAction()
			{
				if (confirm("Voulez vous vraiment effectuer la modification ? ")) {
					return true;
				}
				else
				{
					event.preventDefault();
				}
			}

			function quit()
			{
				window.location.href = "Traitement.php";
			}

		</script>
	</form>
</div>

<script type="text/javascript">
	var startDate = document.getElementById("start-date");
	var endDate = document.getElementById("end-date");
	var creationDate = document.getElementById("creation-date");


	startDate.setAttribute("min", creationDate.value);

	startDate.addEventListener("change", function() {
	  endDate.setAttribute("min", startDate.value);
	});

	endDate.addEventListener("change", function() {
	  startDate.setAttribute("max", endDate.value);
	  creationDate.setAttribute("max", endDate.value);
	});

	creationDate.addEventListener("change", function() {
	  startDate.setAttribute("min", creationDate.value);
	  endDate.setAttribute("min", creationDate.value);
	});
</script>