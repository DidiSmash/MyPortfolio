<?php

function createCard($argv) {
    $tmp = '<div class="card swiper-slide"><div class="image-content">';
    // [optionnel]Size
    if(isset($argv['bg']) === true)
        $tmp .= '<span class="overlay" style="background-color:'.$argv['bg'].'"></span>';
    // [optionnel]Size
    if(isset($argv['src']) === true)
        $tmp .= '<div class="card-image"><img src="'.$argv['src'].'"';
    // [optionnel]MaxChar
    if(isset($argv['alt']) === true)
        $tmp .= ' alt="'.$argv['alt'].'" class="card-img"></div></div>';
    // [optionnel]Value
    if(isset($argv['name']) === true)
        $tmp .= '<div class="card-content"><h2 class="name">'.$argv['name'].'</h2>';
    // [optionnel]Readonly
    if(isset($argv['desc']) === true)
        $tmp .= '<p class="description">'.$argv['desc'].'</p>';
    // [optionnel]Readonly
    if(isset($argv['href']) === true)
        $tmp .= ' <a href="'.$argv['href'].'" class="link" target=_blank>See More ›</a></div></div>';
    // Affichage            
    echo $tmp;
}

?>