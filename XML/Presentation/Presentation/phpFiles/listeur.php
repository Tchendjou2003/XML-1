<?php
include '../../Donnees/Manager.php';
include '../../Donnees/Super.php';
class listeur
{

	public function UnivLister(string $table)
	{

		$man = new Manager();
		$res = $man->list($table);

		if ($res->rowCount() > 0 ) 
		{
			$option="";
			while ($row = $res->fetch(PDO::FETCH_ASSOC)) 
			{
				$i=0;
				foreach ($row as $data) 
				{
					if ($i < 1) 
					{
						$option.="<option>".$data."</option>";
					}
					$i+=1;
				}

			}

			echo $option;

		}

	}

	public function compte($table)
	{
		$man = new Manager();
		$res = $man->compteur($table);

		return $res;
	}

	public function fullLister($table)
	{
		$man = new Manager();
		$res = $man->list($table);

		if($res->rowCount() > 0)
		{	

			echo "<div id='contenTable'><div id='titleList'>Liste des Contrats</div><table> <tr id='alex'> <td class='first'> Num_contrat </td> <td class='first'> Etat </td> <td class='first'> Date_Creation </td> <td class='first'> Date Début </td> <td class='first'> Date Fin </td> <td class='first'> Num Locataire </td> <td class='first'> Num Location </td> </tr> ";		
			while($row = $res->fetch(PDO::FETCH_ASSOC))
			{
						//echo $row["Id_famille"];
				$i=$row["num_contrat"];
				$j=$row["etat"];
				$k=$row["date_creation"];
				$u=$row["date_debut"];
				$f=$row["date_fin"];
				$w=$row["num_locataire"];
				$z=$row["num_location"];


				echo " <tr> <td>".$i."</td> <td>".$j."</td> <td>".$k."</td> <td>".$u."</td> <td>".$f."</td> <td>".$w."</td> <td>".$z." <td><a id='modify' href='modifContrat.php?id=$i' onclick = 'openModifier()'>modifier</a></td> <td><a id='delete' href='../../Traitement/ProcessSuppr.php?num_contrat=$i' onclick='return confirmAction()'>supprimer</a></td><td><a id='print' href='../../Traitement/Printer.php?num_contrat=$i'>Imprimer</a><td></tr> ";

			}

			echo "</table></div>";
		}	
	}

	public function discSelect($val, $table)
	{

		$man = new Manager();
		$res = $man->list($table);

		if ($res->rowCount() > 0 ) 
		{
			$option="";
			while ($row = $res->fetch(PDO::FETCH_ASSOC)) 
			{
				$i=0;
				foreach ($row as $data) 
				{
					if ($i < 1) 
					{
						if ($data===$val) 
						{
							$option.="<option selected>".$data."</option>";
						}

						else  
						{
							$option.="<option>".$data."</option>";
						}
					}
					$i+=1;
				}

			}

			echo $option;

		}

	}

	public function listLocat()
	{
		$man = new Manager();
		$res = $man->list('locataire');


		if($res->rowCount() > 0)
		{	

			echo "<div id='contenTable'><div id='titleList'>Liste des Locataires </div><table> <tr id='alex'> <td class='first'>Num Locataire </td> <td class='first'> Nom </td> <td class='first'> Prenom </td> <td class='first'> Adresse1 </td> <td class='first'> Code Postal </td> <td class='first'> Ville </td> <td class='first'> Num Tel </td> <td class='first'> Emial </td> </tr>  ";		
			while($row = $res->fetch(PDO::FETCH_ASSOC))
			{
						//echo $row["Id_famille"];
				$i=$row["num_locataire"];
				$j=$row["nom_locataire"];
				$k=$row["prenom_locataire"];
				$u=$row["adresse1_locataire"];
				$f=$row["code_postal_locataire"];
				$w=$row["ville_locataire"];
				$z=$row["num_tel2_locataire"];
				$v=$row["email_locataire"];

				
				echo " <tr> <td>".$i."</td> <td>".$j."</td> <td>".$k."</td> <td>".$u."</td> <td>".$f."</td> <td>".$w."</td> <td>".$z."</td><td>".$v."</td></tr> ";
			}

			echo "</table></div>";
		}	
	}


	public function listProprio()
	{
		$man = new Manager();
		$res = $man->list('proprietaire');


		if($res->rowCount() > 0)
		{	

			echo "<div id='contenTable'><div id='titleList'>Liste des Proprietaires </div><table> <tr id='alex'> <td class='first'>Num  </td> <td class='first'> Nom </td> <td class='first'> Prenom </td> <td class='first'> Adresse1 </td> <td class='first'> Code Postal </td> <td class='first'> Ville </td> <td class='first'> Num Tel </td> <td class='first'> CAacumule </td> <td class='first'> Emial </td> </tr>  ";		
			while($row = $res->fetch(PDO::FETCH_ASSOC))
			{
						//echo $row["Id_famille"];
				$i=$row["num"];
				$j=$row["nom"];
				$k=$row["prenom"];
				$u=$row["adresse1"];
				$f=$row["code_postal"];
				$w=$row["ville"];
				$z=$row["num_tel1"];
				$x=$row["CAacumule"];
				$v=$row["email"];

				
				echo " <tr> <td>".$i."</td> <td>".$j."</td> <td>".$k."</td> <td>".$u."</td> <td>".$f."</td> <td>".$w."</td> <td>".$z."</td><td>".$x."</td><td>".$v."</td></tr> ";
			}

			echo "</table></div>";
		}

	}

	public function listAppart()
	{
		$man = new Manager();
		$res = $man->list('appartement');


		if($res->rowCount() > 0)
		{	

			echo "<div id='contenTable'><div id='titleList'>Liste des Appartements </div><table> <tr id='alex'> <td class='first'> Num_Location  </td> <td class='first'> Categorie </td> <td class='first'> Type </td> <td class='first'> Nb_personnes </td> <td class='first'> Adresse_location </td> <td class='first'> Photo </td> <td class='first'> Eqipement </td> <td class='first'> Code tarif </td> <td class='first'> Num Proprio </td> </tr>  ";		
			while($row = $res->fetch(PDO::FETCH_ASSOC))
			{
						//echo $row["Id_famille"];
				$i=$row["num_location"];
				$j=$row["categorie"];
				$k=$row["type"];
				$u=$row["nb_personnes"];
				$f=$row["adresse_location"]; 
				$z=$row["equipement"];
				$x=$row["code_tarif"];
				$v=$row["num"];

				/*echo " <tr> <td>".$i."</td> <td>".$j."</td> <td>".$k."</td> <td>".$u."</td> <td>".$f."</td> <img src=".$w." <td></td> <td>".$z."</td><td>".$x."</td><td>".$v."</td></tr> ";*/

				echo " <tr> <td>".$i."</td> <td>".$j."</td> <td>".$k."</td> <td>".$u."</td> <td>".$f."</td><td><img src='img.php?id=$i'></img></td><td>".$z."</td><td>".$x."</td><td>".$v."</td></tr> ";
			}

			echo "</table></div>";
		}

	}


	public function listTarif()
	{
		$man = new Manager();
		$res = $man->list('tarif');


		if($res->rowCount() > 0)
		{	

			echo "<div id='contenTable'><div id='titleList'>Liste des Tarifs </div><table> <tr id='alex'> <td class='first'> Code Traif </td> <td class='first'> Prix Maximun </td> <td class='first'>Prix Minimun </td> </tr>  ";		
			while($row = $res->fetch(PDO::FETCH_ASSOC))
			{
						//echo $row["Id_famille"];
				$i=$row["code_tarif"];
				$j=$row["prixsemHS"];
				$k=$row["prixSemBS"];

				/*echo " <tr> <td>".$i."</td> <td>".$j."</td> <td>".$k."</td> <td>".$u."</td> <td>".$f."</td> <img src=".$w." <td></td> <td>".$z."</td><td>".$x."</td><td>".$v."</td></tr> ";*/

				echo " <tr> <td>".$i."</td> <td>".$j."</td> <td>".$k."</td></tr>";
			}

			
		}
	}
	public function fullListerAppart($table)
	{
		$man = new Manager();
		$res = $man->list($table);

		if($res->rowCount() > 0)
		{	

			echo "<div id='contenTable'><div id='titleList'>Liste des Appartements</div><table> <tr id='alex'> <td class='first'> Num_Location </td> <td class='first'> Categorie </td> <td class='first'> type </td> <td class='first'> Nb_personnes </td> <td class='first'> Adresse_location </td> <td class='first'> Num Proprietaires </td> <td class='first'> code_tarif <td> </tr> ";		
			while($row = $res->fetch(PDO::FETCH_ASSOC))
			{
						//echo $row["Id_famille"];
				$i=$row["num_location"];
				$j=$row["categorie"];
				$k=$row["type"];
				$u=$row["nb_personnes"];
				$f=$row["adresse_location"];
				$w=$row["num"];
				$z=$row["code_tarif"];


				echo " <tr> <td>".$i."</td> <td>".$j."</td> <td>".$k."</td> <td>".$u."</td> <td>".$f."</td> <td>".$w."</td> <td>".$z." <td><a id='modify' href='modifAppart.php?id=$i' onclick = 'openModifier()'>modifier</a></td> <td><a id='delete' href='../../Traitement/AppartSuppr.php?num_contrat=$i' onclick='return confirmAction()'>supprimer</a></td></tr> ";

			}

			echo "</table></div>";
		}	
	}
	

}

?>