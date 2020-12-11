<?php


$maconnection=mysqli_connect('localhost','root','');
$base=mysqli_select_db($maconnection,'marieteam');
$mon_recordset = mysqli_query($maconnection,"select * from bateau") ; 

while ($tableau=mysqli_fetch_row($mon_recordset))

{   $j=count($tableau);
    for ($i=0; $i<$j; $i++)
        echo $tableau[$i]."   ";
        //echo $tableau[1]."   ";
        //echo $tableau[2]."   ";
        //echo $tableau[3]."   ";
        echo "<hr><font color='blue';font-weight: 'bold'>";
}

//header('Location: http://127.0.0.1/MarieTeam/Page_Bateau/');

?>


<body>
<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="StyleSheet1.css" />
<a href = " http://127.0.0.1/MarieTeam/Page_Bateau/" >Retour page acceuil </a href>
</body>
//faire une div avec attribut (ex : ID) 
