var tableau = new Array(); 

var i ; 
i = parseInt(i);
 


for ( i = 0 ; i<20; i++  ) 

{
    tableau[i] = Math.floor(Math.random()*100) ;

}


alert (tableau )
tableau[20] = 0 ;  

for ( i = 0 ; i<20; i++  ) 

{

tableau[20] = tableau[20] + tableau[i] ;

}





alert (tableau [20])  


