<?php

include('../Donnees/Manager.php');
class process
{
	public static function compute()
	{

		if(isset($_POST))
		{
			$key_tab = array_keys($_POST);
			$nombre = count($key_tab);
			$file = $key_tab[$nombre - 1];
			array_pop($_POST);
			Manager::writeXml($_POST, $file);
			header("location: ../Presentation/Structure.php");		
		}
	}

	//Je pense que ça marche
	public static function lister($file)
	{
		$obj = Manager::ObjL($file);
		$nom = count($obj);
		if(!file_exists("../BDXML/".$file.".xml") || $nom==0 ) 
	 	{
	 		return 'empty' ;	
	 	}
		
		else
		{
			$i=0;
			$j=0;
			$tab_key_att = [];
			$tab_val_att = [];

			$tab_key = [];
			$tab_val = [];

			foreach ($obj->children() as $key => $value) 
			{

				foreach ($value->attributes() as $key => $val) 
				{
					if ($i==0) 
					{
						$tab_key_att[]=$key;
					}

					$tab_val_att[$j][]=$val;
					
				}

				foreach ($value->children() as $key => $val) 
				{
				
					if ($i==0) 
					{
						$tab_key[] = $key;
					}

					$tab_val[$j][] = $val;

				}

				$j++;
				$i++;
			}

			$num = count($tab_val);

			echo "<table>";
			echo "<h2 id='titleList'>Liste des ".$file."s</h2>";
			foreach($tab_key_att as $data)
			{
				echo "<th>".$data."</th>";
			}

			foreach($tab_key as $data1)
			{
				echo "<th>".$data1."</th>";
			}

			$num = count($tab_val);

			for ($i=0; $i <$num ; $i++) 
			{ 
				echo "<tr>";
				foreach($tab_val_att[$i] as $val)
				{
					echo "<td>".$val."</td>";
				}

				foreach($tab_val[$i] as $val1)
				{
					echo "<td>".$val1."</td>";
				}

				echo "<td> <a href='../Presentation/$file.php?$file=$val' id='modify' > modifier  </a> </td>";

				if ($file=='contrat') 
					echo "<td> <a href='../Traitement/printer.php?$file=$val' id='imprimer' > imprimer </a> </td>";
				else
					echo "<td> <a href='../Traitement/suppr.php?$file=$val' id='delete' > supprimer </a> </td>";
				echo "</tr>";
			}
			

			echo "<button onclick='close_$file()' class='closeList' style='text-align: center'>fermer<button>";
			echo "</table>";	
	 	}
	}


	public static function delete()
	{
		if (isset($_GET)) 
		{
			foreach($_GET as $key => $value)
			{
				$id = $value;
				$file = $key;
			}

			echo $id."<br>";
			echo $file."<br>";
			
			Manager::remove($id, $file);
		}
	}

	public static function getValue()
	{
		foreach($_GET as $key => $value)
		{
			$file=$key;
			$id = $value;
		}

		$test = Manager::getUnique($id, $file);
	}
}


?>