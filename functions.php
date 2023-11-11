<?php

include ('site-infos.php');
include ('logo.php');
include ('menu.php');
include ('oeuvres.php');

// function oeuvres() {
//     global $oeuvres;
//     foreach ($oeuvres as $oeuvre) {
//         $mounted_oeuvre = '<article class="oeuvre">';
//         $mounted_oeuvre .= '<a href="oeuvre.php/?oeuvre-id='.$oeuvre['id'].'" target="_self">';
//         $mounted_oeuvre .= '<img src="/img/oeuvres/'.$oeuvre['image']['src'].'" alt="'.$oeuvre['image']['alt'].'">';
//         $mounted_oeuvre .= '<h2>'.$oeuvre['name'].'</h2>';
//         $mounted_oeuvre .= '<p class="description">'.$oeuvre['description']['short'].'</p>';
//         $mounted_oeuvre .= '</a>';
//         $mounted_oeuvre .= '</article>';
//         echo($mounted_oeuvre);
//     };
// };

// function oeuvre($oeuvre_ID) {
//     global $oeuvres;
//     foreach ($oeuvres as $oeuvre) {
//         if ($oeuvre_ID == $oeuvre["id"]) {
//             $mounted_oeuvre = '<article id="detail-oeuvre">';
//             $mounted_oeuvre .= '<div id="img-oeuvre"><img src="/img/oeuvres/'.$oeuvre['image']['src'].'" alt="'.$oeuvre['image']['alt'].'"></div>';
//             $mounted_oeuvre .= '<div id="contenu-oeuvre">';
//             $mounted_oeuvre .= '<h1>'.$oeuvre['name'].'</h1>';
//             $mounted_oeuvre .= '<p class="description">'.$oeuvre['description']['short'].'</p>';
//             $mounted_oeuvre .= '<p class="description-complete">'.$oeuvre['description']['full'].'</p>';
//             $mounted_oeuvre .= '</div>';
//             $mounted_oeuvre .= '</article>';
//             echo($mounted_oeuvre);
//         };
//     };
// };

function oeuvres() {
    global $oeuvres;
    if (isset($_GET["oeuvre-id"])) {
        foreach ($oeuvres as $oeuvre) {
            if ($_GET["oeuvre-id"] == $oeuvre["id"]) {
                $mounted_oeuvre = '<article id="detail-oeuvre">';
                $mounted_oeuvre .= '<div id="img-oeuvre"><img src="/img/oeuvres/'.$oeuvre['image']['src'].'" alt="'.$oeuvre['image']['alt'].'"></div>';
                $mounted_oeuvre .= '<div id="contenu-oeuvre">';
                $mounted_oeuvre .= '<h1>'.$oeuvre['name'].'</h1>';
                $mounted_oeuvre .= '<p class="description">'.$oeuvre['description']['short'].'</p>';
                $mounted_oeuvre .= '<p class="description-complete">'.$oeuvre['description']['full'].'</p>';
                $mounted_oeuvre .= '</div>';
                $mounted_oeuvre .= '</article>';
                echo($mounted_oeuvre);
            };
        };
    } else {
        foreach ($oeuvres as $oeuvre) {
            $mounted_oeuvre = '<article class="oeuvre">';
            $mounted_oeuvre .= '<a href="oeuvre.php/?oeuvre-id='.$oeuvre['id'].'" target="_self">';
            $mounted_oeuvre .= '<img src="/img/oeuvres/'.$oeuvre['image']['src'].'" alt="'.$oeuvre['image']['alt'].'">';
            $mounted_oeuvre .= '<h2>'.$oeuvre['name'].'</h2>';
            $mounted_oeuvre .= '<p class="description">'.$oeuvre['description']['short'].'</p>';
            $mounted_oeuvre .= '</a>';
            $mounted_oeuvre .= '</article>';
            echo($mounted_oeuvre);
        };
    };
};

?>