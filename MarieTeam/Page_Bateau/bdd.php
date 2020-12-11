<?php
extract($_POST,EXTR_OVERWRITE); 






 //mysqli_connect('serveur','utilisateur','mot_de_passe');

$maconnection=mysqli_connect('localhost','root','');



 
$base=mysqli_select_db($maconnection,'marieteam');


$sql = mysqli_query($maconnection,"INSERT INTO bateau (idBateau,nomBateau,largeurBateau,longueurBateau) VALUES ($T1,'$T2',$T3,$T4) ");

header('Location: http://127.0.0.1/MarieTeam/Page_Bateau/');




?>