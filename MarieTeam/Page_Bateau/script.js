var saisie = prompt("Veuillez saisir un entier ");
var saisie2 = prompt ("Veuillez saisir un nombre entier "); 
var operation = prompt("Veuillez saisir une opération + - * / "); 
var resultat; 
saisie = parseInt(saisie);
saisie2 = parseInt(saisie2);
resultat = parseInt(resultat);


if (isNaN(saisie) || (isNaN(saisie2)) ) // Non fonctionnel 

{
    alert("ERREUR DE SAISIE ") ; 
}

else {


switch(operation)

{
    case "+" : (operation == "+")
    resultat = saisie+saisie2; 
    alert(resultat)
    break

    case "-" : (operation == "-")
    resultat = saisie - saisie2;
    alert(resultat)
    break

    case "*" : (operation == "*")
    resultat = saisie*saisie2; 
    alert (resultat)
    break

    case "/" : (operation == "/")
    resultat = saisie/saisie2; 
    alert (resultat)
    break

    default : alert ( "Vous n'avez pas fait votre saisie ") // Car IsNan ne fonctionne pas 
}

}








