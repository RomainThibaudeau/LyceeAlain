function calcul(L)
{var calcul=(Math.pow(10, -12)*Math.pow(10, L/10)).toExponential(2);
document.getElementById("affichage").innerHTML = calcul + " W/m²";
}   


function affiche_slider(valeur)
    {
    
    	document.getElementById("affichage").innerHTML = valeur;
    	
    }
