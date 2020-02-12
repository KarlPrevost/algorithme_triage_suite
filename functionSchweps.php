<?php

function sa(&$la){
//  sa échange les positions des deux premièrs élèments de la (rien ne se produit s’il n’y a pas assez
//  d’élèments)
//  fonctionnel
    if(isset($la[1])){
        $first = $la[0];
        $la[0] = $la[1];
        $la[1] = $first;
    }
    
}

function sb(&$lb){
//  sb échange les positions des deux premièrs élèments de lb (rien ne se produit s’il n’y a pas assez
//  d’élèments)
//  fonctionnel
    if(isset($lb[1])){
    $first = $lb[0];
    $lb[0] = $lb[1];
    $lb[1] = $first;
    }
}

function sc(&$la,&$lb){
    sa($la);
    sb($lb);
}

function pa(&$la,&$lb){
//  pa prend le premier élèment de lb et le place à la première position de la (rien ne se produit si lb
//  est vide)
// fonctionnel

    if(isset($lb[0])){
        array_unshift($la,$lb[0]);
        array_shift($lb);
    }
}

function pb(&$la,&$lb){
//  pb prend le premier élèment de la et le place à la première position de lb (rien ne se produit si la
//  est vide)
// fonctionnel

    if(isset($la[0])){
        array_unshift($lb,$la[0]);
        array_shift($la);
    }
}

function ra(&$la){
//  fait une rotation de la vers le début. (le premier élèment devient le dernier)
//  fonctionnel
    $first = array_shift($la);
    array_push($la, $first);
}

function rb(&$lb){
//  fait une rotation de lb vers le début. (le premier élèment devient le dernier)
//  fonctionnel
    $first = array_shift($lb);
    array_push($lb, $first);
}

function rr(&$la,&$lb){
    ra($la);
    rb($lb);
}

function rra(&$la){
//  fait une rotation de la vers la fin. (le dernier élèment devient le premier)
//  fonctionnel
    $last = $la[count($la)-1];
    array_unshift($la,$last);
    array_pop($la);
}

function rrb(&$lb){
//  rra fait une rotation de lb vers la fin. (le dernier élèment devient le premier)
    $last = $lb[count($lb)-1];
    array_unshift($lb,$last);
    array_pop($lb);
}

function rrr(&$la,&$lb) {
    rra($la);
    rrb($lb);
    
}