<head>
	<link rel="stylesheet" type="text/css" href="cssfiles/struct.css">
	<link rel="stylesheet" type="text/css" href="cssFiles/table.css">
	<link rel="stylesheet" type="text/css" href="cssFiles/styleForm.css">
	<!--
	<link rel="stylesheet" type="text/css" href="test.css">
	<script src="jquery.js"></script>
	<link rel="stylesheet" href="bootstrap\css\boostrap.min.css">
	<script href="bootstrap\js\bootstrap.min.js"></script>
	-->
	<title>Projet2</title>

<?php  
include("../Traitement/Process.php");
if (isset($_GET['alert'])) 
{
	$text = $_GET['alert'];
	echo "<script> alert('$text'); </script>";
	unset($_GET['alert']);
	$new_url='Traitement.php'.http_build_query($_GET);
	
}

?>
</head>
<body>
<header>
	<?php
		include('tete.php');
	?>
	<?php if (isset($alert)) :?>
		<script type="text/javascript">
			alert("<?php echo $alert ; ?>");
		</script>
	<?php endif; ?>
</header>
<section class="container">
	<div class="field">
		<div class="cont" id="appart">
			Ajouter un Contrat
		</div>
		<div >
			<button class="btn" onclick="openContrat()">
				ajouter
			</button>
		</div>
	</div>
	<div class="field">
		<div class="cont" id="proprio">
			Consulter les contrats
		</div>
		<div >
			<button class="btn" onclick="showManager()">
				consulter
			</button>
		</div>
	</div>
</section>
		<?php 

		include('formContrat.php');
		include('listeur_contrat.php');
		/*$man = new listeur();
		$man->fullLister('contrat');
		

		$ls = new listeur();
		$row1 = $ls->compte('appartement');
		$nb_appart = $row1['count(*)'];

		unset($row1);

		$row2 = $ls->compte('locataire');
		$nb_locataire = $row2['count(*)'];

		unset($row2);

		$row3 = $ls->compte('contrat');
		$nb_contrat = $row3['count(*)'];*/

		?>



<script type="text/javascript">

function openContrat()
{

	document.getElementById('contentContrat').style.display="block";
	
}


function closeContrat()
{
	document.getElementById('contentContrat').style.display="none";
}


function showManager()
{

	document.getElementById('cont-cont').style.display="block";

}

function close_contrat()
{
	document.getElementById('cont-cont').style.display="none";
}


function confirmAction()
{
	if (confirm("Vous confirmer la suppression ?")) 
	{
		return true;
	}
	else
	{
		event.preventDefault();
	}
}

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
</body>
</html>
