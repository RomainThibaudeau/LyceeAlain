<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css"> 
    <title> Ens. Scientifique 1ière </title>
    <link rel="icon" type="image/x-icon" href="Images/chimie.png">
    <link rel="stylesheet" href="styles.css">
    <script language="javascript" src="script.js"></script>     
<script async="true" src="https://cdn.jsdelivr.net/npm/mathjax@2/MathJax.js?config=AM_CHTML"> </script>
</head>
<body>
    <?php include 'header.php';?>
    <main>


<div class="product-grid">
             
            
              

<?php
// Déclaration d'une variable
$corpsnoir= true;

// On teste la valeur de la variable
if($corpsnoir== true)
{
    include 'corpsnoir.php';
 }
?>
        

            
    <div class="product">
                <h3 class="titrechapitre"> Chapitre 4 </h3>
                    <h3>Stellarium en ligne   </h3>
                    <img src="Images/stellarium.png" width="200px" height="180px">
                    <button id="bouton2" onclick ="window.location.href = 'https://stellarium-web.org/'    ;"  target="_blank" >Vers le site stellarium en ligne  </button>
           
    </div>
                        
            
    <div class="product">
                 <h3 class="titrechapitre"> Chapitre 4 </h3>
                    <h3>Géogebra en ligne activité exoplanètes    </h3>
                    <img src="https://upload.wikimedia.org/wikipedia/commons/3/38/TRAPPIST-1e_artist_impression_2018.png" width="200px" height="200px">
                    <button id="bouton2" onclick ="window.location.href = 'https://thibaudeau.alwaysdata.net/geogebra-export.html' ; " target="_blank"> Vers l'activité géogebra   </button>
                                              
    </div>

    </div>
    <div class="product-grid"> 
                
    <div class="product">
                    <h3 class="titrechapitre"> Chapitre 4 </h3>   
                        <h3> 2 types de sons   </h3>
                        <img src="Images/sound.jpg" width="300px" height="180px">
                        <button id="bouton2" onclick ="window.location.href = 'https://prowal.github.io/phy/audio.html ' ; "target="_blank"> lien vers l'analyseur de sons  </button>
                        <button id="bouton3" onclick="window.open('fichiers/la3_diapason.wav');" target="_blank">Fichier La 3 diapason  </button>
                        <button id="bouton3" onclick="window.open('fichiers/La3_piano.wav');" target="_blank" >Fichier La 3 piano </button>     
    </div>
                        


    <div class="product">
                    <h3 class="titrechapitre"> Chapitre 4 </h3>
                        
                            <h3> Son émis par une corde   </h3>
                            <img src="Images/guitare.png" width="180px" height="180px">
                            <button id="bouton2" onclick ="window.location.href = 'https://physique.ostralo.net/corde_guitare/ ' ; "target="_blank"> Lien simulation guitare   </button>
                            <button id="bouton3" onclick="window.open('fichiers/CordedeMelde.mp4');" target="_blank"> Vidéo corde de Melde   </button>
                            
    </div>



            
    <div class="product">
                <h3 class="titrechapitre"> Chapitre 4 </h3>
                    <h3>Convertisseur d'unité     </h3>
                    <h3>Niveau sonore L  ➔  intensité sonore  I    </h3>
                      <div class="cmath"> `I = I_0 \times 10^(L/10)`         </div>
                         <form name="inscription" action="inscription.php" method="post">	
                            <p> 
                            Valeur du niveau sonore L en dB : 
                            <input type="text" size="15" name="valeur"/> 
                            </p>
                            <p  > 
                            résultat en W/m²:   
                            </p>
                            <p id="affichage"> 
                             ... W/m²  
                                          
                            </p>
                                             
                            <p> 
                            Calculer ! : 
                            <input type="button" value="Calculer" onclick="calcul(valeur.value)"/> 
                            </p>
                            </form>
                                              
    </div>
                

                
    <div class="product">
                    <h3 class="titrechapitre"> Chapitre 4 </h3>
                        <h3> Compression des données numériques    </h3>
                        <img src="Images/numerique.jpg" width="100px" height="100px">
                        <button id="bouton2" onclick ="window.location.href = 'https://physique.ostralo.net/CAN/index_v2n.htm ' ; "target="_blank"> Animation fréquence d'échantillonnage    </button>
                        <button id="bouton3" onclick="window.open('fichiers/rock-echantillonage1.mp3');" target="_blank"> Fichier Rock échant. 1  </button>
                        <button id="bouton3" onclick="window.open('fichiers/rock-echantillonage2.mp3');" target="_blank"> Fichier Rock échant. 2  </button>
                        <button id="bouton3" onclick="window.open('fichiers/rock-echantillonage3.mp3');" target="_blank"> Fichier Rock échant. 3  </button>
                        
    </div>
                
    </div>
                     
    </main>
    
    <?php include 'footer.php';?>

    
</body>
</html>

