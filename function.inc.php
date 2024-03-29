<?php

function createCard($argv) {
    $tmp = '<div class="card""';
    // [optionnel]Size
    if(isset($argv['bg']) === true)
        $tmp .= 'style="background-color:'.$argv['bg'].'">';
    else
        $tmp .= '>';
    // [optionnel]Size
    if(isset($argv['src']) === true)
        $tmp .= '<img src="'.$argv['src'].'"';
    // [optionnel]MaxChar
    if(isset($argv['alt']) === true)
        $tmp .= ' alt="'.$argv['alt'].'">';
    // [optionnel]Value
    if(isset($argv['name']) === true)
        $tmp .= '<div class="info"> <p>'.$argv['name'].'</p>';
    else
        $tmp .= ' name=""';
    // [optionnel]Readonly
    if(isset($argv['href']) === true)
        $tmp .= ' <a href="'.$argv['href'].'"target=_blank>See More ›</a></div></div>';
    // Affichage            
    echo $tmp;
}

?>