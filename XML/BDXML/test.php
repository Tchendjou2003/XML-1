<?php  

$obj = simplexml_load_file('tarif.xml');
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

$nom = count($tab_val);

$dom = dom_import_simplexml($obj)->ownerDocument;

$elements = $dom->getElementsByTagName('locataires');

//print_r($dom);

$nom = count($obj);


foreach ($obj->tarif as $key => $value) 
{
	echo $value['id_tarif']."(".$value->prixmax.")";
}


?>