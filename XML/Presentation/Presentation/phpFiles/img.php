<?php
include '../../Donnees/Manager.php';
include '../../Donnees/Super.php';

$id = '3';
$man = new Manager();

$row = $man->get_unique('num_location', $id, 'appartement');

$photo = $row['photo'];

/*echo $photo;*/

$photo = "../../Traitement/".$photo;
echo $photo;
$img = file_get_contents($photo);
header('Content-type: image/jpeg');
readfile($img);

//echo "<img src ='$photo'></img>";


?>