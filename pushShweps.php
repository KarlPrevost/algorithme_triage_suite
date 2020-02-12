<?php
include "functionSchweps.php";

// doit etre vide au début
$lb=[]; 
// on dégage le nom du fichier de l'array pour garder uniquement la suite
array_shift($argv);
// on stock la suite dans $la
$la = $argv; 


// =======================================================
// LOGIC 
// =======================================================

// On stock les instructions dans une string par simplicité. 
// On instancie une variable qui dira si la chaine a été modifiée
$modified = false;
$instructions = "";

// longeur de la suite a
$lengtha = count($la); 
 // plus petit nombre que l'on trouvera dans la boucle, instancié sur le 1er de la suite
$pptn = $la[0];       

// tant que la suite contient des nombres, on boucle
while(isset($la[0])){ 
    // cette partie sert à chercher quel est le plus petit nombre contenu dans $la, 
    // on récupère la clé de ce nombre
    $pptn = min($la);
    $keykey = array_keys($la, $pptn);
    $key = $keykey[0];
        

    // cette boucle sert a placer le plus petit nombre en position 0 dans la suite
    for($j = 0; $j < $key; $j++){
        ra($la);
        $instructions = $instructions."ra ";
        $modified = true;
    }
    // on place le 1er nombre de la suite la dans la suite lb
    pb($la,$lb);
    $instructions = $instructions."pb ";

    // on veille à informer notre prochaine boucle que la longueur a diminuée de 1
    $lengtha -= 1;
    // on veille a reset notre plus petit nombre trouvable et les clés pour eviter les doubles
    if(isset($la[0])){
        $pptn = $la[0];
        unset($key);
        unset($keykey);
    }
}

// cette boucle sert a remettre dans l'ordre lb en la mettant dans la, easy.
while(isset($lb[0])){
    pa($la,$lb);
    if(isset($lb[0])){
        $instructions = $instructions."pa ";
    }else {
        $instructions = $instructions."pa";
    }    
}

// =======================================================
// TEST CALLS
// =======================================================

$compteur = explode(' ',$instructions);
$compteur2 = count($compteur);
echo $compteur2;

print_r($la);
if($modified){
    echo $instructions.PHP_EOL;
}else {
    echo PHP_EOL;
}