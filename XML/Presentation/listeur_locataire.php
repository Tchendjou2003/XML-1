<?php  

echo "<div id='list_locat'>";
$test = process::lister("locataire");

if ($test=='empty') 
{
	echo "<h2 id='titleList1'>Liste des locataires vide</h2>";
}

echo "</div>";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

</body>
</html>