<?php

$menu = [
    [
        "name" => "Accueil",
        "url" => $site['url'],
        "target" => "_self",
    ],
];

function menu() {
    global $menu;
    $mounted_menu = "<nav><ul>";
    foreach ($menu as $link) {
        $mounted_menu .= ('<li><a href="'.$link['url'].'" target="'.$link['target'].'">'.$link['name'].'</a></li>');
    };
    $mounted_menu .= "</ul></nav>";
    echo($mounted_menu);
};

?>