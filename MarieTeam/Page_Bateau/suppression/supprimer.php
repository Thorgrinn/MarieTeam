<?php


$ID=$_POST['T1'];

$maconnection=mysqli_connect('localhost','root','');
$base=mysqli_select_db($maconnection,'marieteam');

if ($ID == TRUE)

{$delete=mysqli_query($maconnection,"DELETE FROM bateau WHERE idBateau = $ID");}

else

echo ("Cet ID n'existe pas ou a déjà été supprimée ");

header('Location: http://127.0.0.1/MarieTeam/Page_Bateau/');














?>