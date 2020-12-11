<?php
//extract($_POST,EXTR_OVERWRITE); 
$ID=$_POST['T1'];
$nom=$_POST['T2'];
$longueur=$_POST['T3'];
$largeur=$_POST['T4'];
/*echo $ID;
echo $nom;
echo $longueur;
echo $largeur;*/


$maconnection=mysqli_connect('localhost','root','');
/*if($maconnection)
echo"connection réussie";
else
echo"pas de connection";*/
$base=mysqli_select_db($maconnection,'marieteam');
$modifier=mysqli_query($maconnection,"UPDATE bateau SET nomBateau = '$nom',largeurBateau='$largeur',longueurBateau='$longueur' WHERE idBateau = '$ID'");
if ($modifier)
echo '<script>alert("Modif réussie")</script>'; 
else
echo '<script>alert("Erreur requête")</script>';


//header('Location : http://127.0.0.1/MarieTeam/Page_Bateau/');

//echo $modifier ; 
//$modifier = mysqli_query($maconnection,"UPDATE bateau SET (nomBateau = '$T2',largeurBateau=$T3,longueurBateau=$T4) WHERE idBateau = $T1 ");



?>