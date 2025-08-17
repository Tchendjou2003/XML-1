<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../cssFiles/styleForm.css">
	<title></title>
</head>
<div class="content" >

<?php	
include '../../Donnees/Manager.php';
function lister()
{
	$mn1=new Manager();
	$result = $mn1->list("contrat");

	if($result->rowCount() > 0)
	{	
		echo "<table> <tr > <td class='first'> Num_contrat </td> <td class='first'> Etat </td> <td class='first'> Date_Creation </td> <td class='first'> Date Début </td> <td class='first'> Date Fin </td> <td class='first'> Num Locataire </td> <td class='first'> Num Location </td> </tr> ";		
		while($row = $result->fetch(PDO::FETCH_ASSOC))
		{
					//echo $row["Id_famille"];
			$i=$row["num_contrat"];
			$j=$row["etat"];
			$k=$row["date_creation"];
			$u=$row["date_debut"];
			$f=$row["date_fin"];
			$w=$row["num_locataire"];
			$z=$row["num_location"];


			echo " <tr> <td>".$i."</td> <td>".$j."</td> <td>".$k."</td> <td>".$u."</td> <td>".$f."</td> <td>".$w."</td> <td>".$z." <td><a id='modify' href='#'>modifier</a></td> <td><a id='delete' href='#'>supprimer</a></td></tr> ";
		}

		echo "</table>";
	}
}

lister();
?>

</div>