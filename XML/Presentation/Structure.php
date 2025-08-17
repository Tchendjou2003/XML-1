<head>
	<link rel="stylesheet" type="text/css" href="cssfiles/struct.css">
	<link rel="stylesheet" type="text/css" href="cssFiles/table.css">
	<!--
	<link rel="stylesheet" type="text/css" href="test.css">
	<script src="jquery.js"></script>
	<link rel="stylesheet" href="bootstrap\css\boostrap.min.css">
	<script href="bootstrap\js\bootstrap.min.js"></script>
	-->
	<title>Projet2</title>
</head>
<body>
<header>
	<?php

		include('tete.php');
		include("../Traitement/Process.php");

	?>
	<?php if (isset($_GET['alert'])) :?>
		<script type="text/javascript">
			alert("<?php echo $alert ; ?>");
		</script>
	<?php endif; ?>
</header>
<section class="container">
	<div class="field">
		<div class="cont" id="appart">
			Ajouter un Appartement
		</div>
		<div class="middle">
			<button class="btn" onclick="openAppart()">
				ajouter
			</button>
			<button class="btn" onclick="openListAppart()">
				consulter
			</button>
		</div>
	</div>
	<div class="field">
		<div class="cont" id="proprio">
			Ajouter un Propriétaire
		</div>
		<div class="middle">
			<button class="btn" onclick="openpopup()">
				ajouter
			</button>
			<button class="btn" onclick="openListProprio()">
				consulter
			</button>
		</div>
	</div>
	<div class="field">
		<div class="cont" id="tarif">
			Ajouter un Tarif
		</div>
		<div class="middle">
			<button class="btn" onclick="openTarif()">
				ajouter
			</button>
			<button class="btn" onclick="openListTarif()">
				consulter
			</button>
		</div>
	</div>
	<div class="field">
		<div class="cont" id="locat">
			Ajouter un Locataire
		</div>
		<div class="middle">
			<button class="btn" onclick="openLocat()">
				ajouter
			</button>
			<button class="btn" onclick="openListLocat()">
				consulter
			</button>
		</div>
	</div>
	<?php  
		include('formProprio.php');
		include('formTarif.php');
		include('formLocat.php');
		include('formAppart.php');
		// $man = new listeur();
		// $man->fullListerAppart('appartement');

		// $ls = new listeur();
		// $row1 = $ls->compte('proprietaire');
		// $nb_proprio = $row1['count(*)'];

		// unset($row1);

		// $row2 = $ls->compte('tarif');
		// $nb_tarif = $row2['count(*)'];

		// unset($row2);
	?>
</section>

<section>
	<?php
		include('listeur_locataire.php');
		include('listeur_tarif.php');
		include('listeur_appartement.php');
		include('listeur_proprietaire.php');
	?>
</section>
</body>
</html>

<script type="text/javascript">

function openpopup()
{
	document.getElementById('content').style.display="block";
	document.getElementById('contentTarif').style.display="none";
	document.getElementById('contentLocat').style.display="none";
	document.getElementById('contentAppart').style.display="none";
	document.getElementById('list_tarif').style.display="none";	
	document.getElementById('list_locat').style.display="none";
	document.getElementById('list_appartement').style.display="none";
}

function closepopup()
{
	document.getElementById('content').style.display="none";
}


function openTarif()
{
	document.getElementById('contentTarif').style.display="block";
	document.getElementById('content').style.display="none";
	document.getElementById('contentLocat').style.display="none";
	document.getElementById('contentAppart').style.display="none";	
	document.getElementById('list_locat').style.display="none";
	document.getElementById('list_proprio').style.display="none";
	document.getElementById('list_appartement').style.display="none";
}

function closeTarif()
{
	document.getElementById('contentTarif').style.display="none";
}

function openLocat()
{
	document.getElementById('contentLocat').style.display="block";
	document.getElementById('content').style.display="none";
	document.getElementById('contentTarif').style.display="none";
	document.getElementById('contentAppart').style.display="none";
	document.getElementById('list_tarif').style.display="none";
	document.getElementById('list_proprio').style.display="none";
	document.getElementById('list_appartement').style.display="none";
}

function closeLocat()
{
	document.getElementById('contentLocat').style.display="none";
}


function openAppart()
{
	var proprio = null; 
	var tarif = null; 
	if (tarif==0 || proprio==0) 
	{
		alert("Aucun Tarif ou propriétaire n'a été enregistrer dans la base de données ! ");
	}


	else
	{
		document.getElementById('contentAppart').style.display="block";
		document.getElementById('contentLocat').style.display="none";
		document.getElementById('content').style.display="none";
		document.getElementById('contentTarif').style.display="none";
		document.getElementById('list_tarif').style.display="none";
		document.getElementById('list_locat').style.display="none";
		document.getElementById('list_proprio').style.display="none";
	}

}


function closeAppart()
{
	document.getElementById('contentAppart').style.display="none";
}
</script>

<script type="text/javascript">
	
	function openListTarif()
	{
		document.getElementById('list_tarif').style.display="block";
		document.getElementById('content').style.display="none";
		document.getElementById('contentLocat').style.display="none";
		document.getElementById('contentAppart').style.display="none";
		document.getElementById('list_locat').style.display="none";
		document.getElementById('list_proprio').style.display="none";
		document.getElementById('list_appartement').style.display="none";
	}	


	function close_tarif()
	{
		document.getElementById('list_tarif').style.display="none";
	}



	function openListLocat()
	{
		document.getElementById('list_locat').style.display="block";
		document.getElementById('content').style.display="none";
		document.getElementById('contentTarif').style.display="none";
		document.getElementById('contentAppart').style.display="none";
		document.getElementById('list_proprio').style.display="none";
		document.getElementById('list_tarif').style.display="none";
		document.getElementById('list_appartement').style.display="none";

	}	


	function close_locataire()
	{
		document.getElementById('list_locat').style.display="none";
	}




	function openListProprio()
	{
		document.getElementById('list_proprio').style.display="block";
		document.getElementById('contentTarif').style.display="none";
		document.getElementById('contentLocat').style.display="none";
		document.getElementById('contentAppart').style.display="none";
		document.getElementById('list_tarif').style.display="none";	
		document.getElementById('list_locat').style.display="none";
		document.getElementById('list_appartement').style.display="none";
	}	


	function close_proprietaire()
	{
		document.getElementById('list_proprio').style.display="none";
	}


	function openListAppart()
	{
		document.getElementById('list_appartement').style.display="block";
		document.getElementById('contentLocat').style.display="none";
		document.getElementById('content').style.display="none";
		document.getElementById('contentTarif').style.display="none";
		document.getElementById('list_tarif').style.display="none";
		document.getElementById('list_locat').style.display="none";
		document.getElementById('list_proprio').style.display="none";
	}	


	function close_appartement()
	{
		document.getElementById('list_appartement').style.display="none";
	}

</script>


