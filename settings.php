<?php

// Site name - Tab name
$site_NAME = "The Artbox";

// Site logo
$site_LOGO = [
    "src" => "img/logo.png",
    "alt" => "Logo Artbox",
];

// Site URL - index.php
$site_URL = sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI'],
);

// $menu = [
//     "Google" => [
//         "Lien" => "https://google.com",
//         "Target" => "_blank",
//     ],
//     "Facebook" => [
//         "Lien" => "https://facebook.com",
//         "Target" => "_blank",
//     ],
//     "Instagram" => [
//         "Lien" => "https://instagram.com",
//         "Target" => "_blank",
//     ],
// ];

// $oeuvres = [
//     "foo" => "bar",
//     "multi" => [
//         "dimensional" => [
//             "array" => "foo",
//         ],
//     ],
// ];

?>