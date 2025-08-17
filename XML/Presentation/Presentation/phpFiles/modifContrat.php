<head>
	<link rel="stylesheet" type="text/css" href="../cssFiles/styleForm.css">
	<title></title>
</head>

<header>
<?php
	include 'listeur.php';
	include('debut.php');
?>
</header>
<?php



$title = 'Modifier Le Contrat';
$buto="modifier";

$categorie=null;
$datecreation=null;
$datedebut=null;
$datefin=null;
$numloc=null;
$numlocation=null;

if(isset($_GET['id']))
	{
		echo "<script> openContrat() </script>";
		$field = 'num_contrat';
		$value = $_GET['id'];

		$man = new Manager();
		$obj = $man->get_unique($field, $value, 'contrat');

		$etat = utf8_decode($obj['etat']);		
		$datecreation = date('Y-m-d', strtotime($obj['date_creation']));
		$datedebut = $obj['date_debut'];
		$datefin = $obj['date_fin'];
		$numloc = $obj['num_locataire'];
		$numlocation = $obj['num_location'];
		$buto = "Modifier";

	}


?>

<div class="content1" id="contentModif">
	<form class="form" method="POST" action="../../Traitement/ProcessModif.php" onsubmit="return confirmAction()">
		<div class="title1"><?php echo $title; ?></div>
		<div class="field1">
			<div class="test">
				<input type="hidden" name="num_contrat" value="<?php echo $value; ?>">
				<label >Etat</label>
				<select name="etat"  >
					<option disabled selected >Status</option>
					<option <?php  if($etat=='R&eacute;silier') echo 'selected'; ?>> Résilier </option>
					<option<?php if($etat=='actif') echo ' selected'; ?>> actif </option>
				</select>
			</div>
			<div class="test">
				<label for="creation-date">Date Création</label>
				<input type="date" name="date_creation" id="creation-date" value="<?php echo $datecreation ; ?>">
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label for="start-date">Date Début</label>
				<input type="date" name="date_debut" id="start-date" value="<?php echo $datedebut ; ?>">
			</div>
			<div class="test">
				<label for="end-date">Date Fin</label>
				<input type="date" name="date_fin" id="end-date" value="<?php echo $datefin ; ?>" >
			</div>
		</div>
		<div class="field1">
			<div class="test">
				<label> Locataire </label>
				<select name="num_locataire" >
					<option disabled selected >Choisir num Locataire</option>
					<?php
						$obj = new listeur();
						$obj->discSelect($numloc, 'locataire');
					?>
				</select>
			</div>
			<div class="test">
				<label> Appartement </label>
				<select name="num_location" >
					<option disabled selected >Choisir num Appartement</option>
					<?php
						$obj = new listeur();
						$obj->discSelect($numlocation, 'appartement');
					?>
				</select>
			</div>
		</div>  
		<div class="field1" id="un">
			<div class="test">
				<input type="reset" value="Effacer" class="in" >
			</div>
			<div class="test">
				<input type="reset" value="Annuller" class="in" onclick="quit()">
			</div>
			<div class="test">
				<input type="submit" name="contrat" value="<?php echo $buto; ?>" class="in">
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