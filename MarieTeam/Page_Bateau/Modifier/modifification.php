<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>modifier bateau</title>
        

        <link rel="stylesheet" type="text/css" href="StyleSheet1.css" />
      </head>
    
    <body>
        
        <form action="modifier.php" method="POST">

            

            <label>ID</label>
            <p><input type="text" name="T1" size="20"/></p>

            <label>Nom du bateau</label>
            <p><input type="text" name="T2" size="20"/></p>

            <label>Longueur du bateau</label>
            <p><input type="text" name="T3" size="20"/></p>

            <label>Largeur du bateau</label>
            <p><input type="text" name="T4" size="20"/></p>


           <p> <a href = " http://127.0.0.1/MarieTeam/Page_Bateau/" >Retour page acceuil </a href></p>



            <p><input type="submit" value="ENVOYER" name="B3" onclick="return confirm('Êtes-vous sûr de vouloir modifier ? ');"></p>
        </form>

    </body>

</html>

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
