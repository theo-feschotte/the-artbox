<?php

// Site url
$site_URL = sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI'],
);

// Site name
$site_NAME = "The Artbox";

// Site logo
$site_LOGO = [
    "src" => "img/logo.png",
    "alt" => "Logo Artbox",
];

// Header menu
$menu = [
    [
        "name" => "Accueil",
        "url" => $site_URL,
        "target" => "_self",
    ],
];

function logo() {
    global $site_LOGO;
    global $site_URL;
    $mounted_logo = '<a href="'.$site_URL.'" target="_self">';
    $mounted_logo .= '<img id="logo" src="'.$site_LOGO["src"].'" alt="'.$site_LOGO["alt"].'">';
    $mounted_logo .= '</a>';
    echo($mounted_logo);
};
function menu() {
    global $menu;
    $mounted_menu = "<ul>";
    foreach ($menu as $link) {
        $mounted_menu .= ('<li><a href="'.$link['url'].'" target="'.$link['target'].'">'.$link['name'].'</a></li>');
    };
    $mounted_menu .= "</ul>";
    echo($mounted_menu);
};
function footer() {
    $mounted_footer = "<p><strong>© THE ARTBOX</strong> - <em>Tous droits réservés</em></p>";
    echo($mounted_footer);
};

?>