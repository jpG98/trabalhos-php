<?php

$universo = $_POST["universo"];
$heroi = $_POST["heroi"];    
$qtd_heroi = 5 ;

if($universo == "DC"){
    for($qtd_heroi = 1; $qtd_heroi <= 5; $qtd_heroi++){ 
        if($heroi == "Ravena"){
            echo "<img src= 'img/ravena.jpg'>";
        }
        
        else if($heroi == "Shazam"){
            echo "<img src= 'img/shazam.webp'>";
        }
    
        else if($heroi == "Batgirl"){
            echo "<img src= 'img/batgirl.webp'>";
        }
    
        else if($heroi == "Super-Choque"){
            echo "<img src= 'img/super.jpg'>";
        }
    
        else if($heroi == "Superman"){
            echo "<img src= 'img/supermam.jpg'>";
        }

        else{
            echo "<img src= 'img/bloqueado.jpg'>";
        }
    }
}

else if($universo == "Marvel"){
    for($qtd_heroi = 1; $qtd_heroi <= 5; $qtd_heroi++){
        if($heroi == "Homem-Aranha"){
            echo "<img src= 'img/miranha.jpg'>";
        }
        
        else if($heroi == "Pantera Negra"){
            echo "<img src= 'img/pantera negra.jpg'>";
        }
    
        else if($heroi == "Homem de Ferro"){
            echo "<img src= 'img/homem de ferro.jpg'>";
        }
    
        else if($heroi == "Doutor Estranho"){
            echo "<img src= 'img/doutor estranho.jpg'>";
        }
    
        else if($heroi == "Hulk"){
            echo "<img src= 'img/hulk.jpeg'>";
        }
    
        else{
            echo "<img src= 'img/bloqueado.jpg'>";
        }
    }
}

else{

}


?>