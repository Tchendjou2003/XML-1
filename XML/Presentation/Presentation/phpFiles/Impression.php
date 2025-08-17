<head>
	<link rel="stylesheet" type="text/css" href="../cssfiles/struct.css">
	<link rel="stylesheet" type="text/css" href="../cssFiles/table.css">
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
		include('debut.php');
	?>
</header>
<section class="container">
	<div class="field">
		<div class="cont" id="appart">
			Imprimer Appartements
		</div>
		<div >
			<button class="btn" onclick="pdfAppart()">
				Imprimer
			</button>
		</div>
	</div>
	<div class="field">
		<div class="cont" id="proprio">
			Imprimer Propriétaires
		</div>
		<div >
			<button class="btn" onclick="pdfProprio()">
				Imprimer
			</button>
		</div>
	</div>
	<div class="field">
		<div class="cont" id="tarif">
			Imprimer Tarifs
		</div>
		<div class="test">
			<button class="btn" onclick="pdfTarif()">
				Imprimer
			</button>
		</div>
	</div>
	<div class="field">
		<div class="cont" id="locat">
			Imprimer Locataires
		</div>
		<div >
			<button class="btn" onclick="pdfLocataire()">
				Imprimer
			</button>
		</div>
	</div>
</section>


<script type="text/javascript">
	function pdfLocataire()
	{
		var maVariable = encodeURIComponent('locataire');
		window.location.href="pdf_gen.php?table="+maVariable;

		window.onload = function() {
  		window.print();
		}
	}

	function pdfProprio()
	{
		var maVariable = encodeURIComponent('proprietaire');
		window.location.href="pdf_gen.php?table="+maVariable;

		window.onload = function() {
  		window.print();
		}
	}

	function pdfAppart()
	{
		var maVariable = encodeURIComponent('appartement');
		window.location.href="pdf_gen.php?table="+maVariable;

		window.onload = function() {
  		window.print();
		}
	}  


	function pdfTarif()
	{
		var maVariable = encodeURIComponent('tarif');
		window.location.href="pdf_gen.php?table="+maVariable;

		window.onload = function() {
  		window.print();
		}
	}
</script>