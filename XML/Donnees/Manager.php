<?php

class Manager
{

	public static function writeXml($tab, $file)
	{	
		if(!file_exists("../BDXML/$file.xml"))
		{
			$ch="\n\t<$file id_$file='1'>";
			foreach ($tab as $key => $value) 
			{
				$ch.="\n\t\t<$key>$value</$key>";
			}

			$chxml = "<?xml version='1.0' encoding='iso-8859-1'?>\n<".$file."s>$ch\n\t</$file>\n</".$file."s>";

			$verif=file_put_contents("../BDXML/$file.xml", $chxml);

		}

		else
		{
			$test = simplexml_load_file("../BDXML/$file.xml");
			$id = count($test) + 1;

			$chxml = file_get_contents("../BDXML/$file.xml");
			$chxml=str_replace("</".$file."s>", '', $chxml);

			$ch="\n\t<$file id_$file='$id'>";

			foreach ($tab as $key => $value) 
			{
				$ch.="\n\t\t<$key>$value</$key>";
			}

			$chxml.= "$ch\n\t</$file>\n</".$file."s>";
			file_put_contents("../BDXML/$file.xml", $chxml);
		}

	}

	public static function ObjL($file) //retourne l'objet à lister 
	{
		if (file_exists("../BDXML/$file.xml")) 
		{
			$obj = simplexml_load_file("../BDXML/$file.xml");
			return $obj;
		}

	}


	public static function remove($id, $file)
	{
		$obj = simplexml_load_file("../BDXML/$file.xml");
		
		$chain = "id_".$file;
		$nom = count($obj);
		for ($i=0; $i <$nom ; $i++) 
		{ 
			if ($obj->$file[$i][$chain] == $id) 
			{
				unset($obj->$file[$i]);
				break;
			}
		}
		file_put_contents("../BDXML/$file.xml", $obj->asXML());
	}


	public static function getUnique($id, $file)
	{
		$obj = simplexml_load_file("../BDXML/$file.xml");
		$chain = "id_".$file;
		$nom = count($obj);

		$tab = [];
		for ($i=0; $i <$nom ; $i++) 
		{ 
			if ($obj->$file[$i][$chain] == $id) 
			{
				foreach($obj->$file[$i] as $value)
				{
					$tab[] = $value;
				}
			}
		}

		return $tab;
	}


	public static function modifier($id, $tab, $file)
	{
		$obj = simplexml_load_file("../BDXML/$file.xml");
		$chain = "id_".$file;
		$nom = count($obj);

		$index=0;
		for ($i=0; $i <$nom ; $i++) 
		{ 
			if ($obj->$file[$i][$chain] == $id) 
			{
				$index = $i;
				break;
			}
		}

		echo "<br><br>";
		$attri = get_object_vars($obj->$file[$index]);

		$attri = array_keys($attri);

		unset($attri[0]);

		$obj2 =  $obj->$file[$index];

		$i = 0;
		foreach($attri as $attribute) 
		{
			$obj2->$attribute= $tab[$i];
			$i++;
		}

		file_put_contents("../BDXML/$file.xml", $obj->asXML());
	}


	public static function init_session() :bool
	{
		if(!session_id())
		{
			session_start();
			session_regenerate_id();
			return true;
		}

		return false;
	}

	public static function is_logged() : bool
	{
		if(isset($_SESSION['username']))
			return true;
		return false;
		
	}

	public static function end_session() :void
	{
		session_unset();
		session_destroy();
	}

	public static function id_admin()
	{
		if(is_logged() && $_SESSION['idAdmin']==1)
			return true;
		return false;
	}



}




?>