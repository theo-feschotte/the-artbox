<?php

// Site name - Tab name
$site_NAME = "The Artbox";

// Site logo
$site_LOGO_src = "img/logo.png";
$site_LOGO_alt = "Logo Artbox";

// Site URL - index.php
$site_URL = sprintf(
    "%s://%s%s",
    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
    $_SERVER['SERVER_NAME'],
    $_SERVER['REQUEST_URI'],
);

// $oeuvres = [
//     "foo" => "bar",
//     "multi" => [
//         "dimensional" => [
//             "array" => "foo",
//         ],
//     ],
// ];

?>