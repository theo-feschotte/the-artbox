<?php

// Site name - Tab name
$siteNAME = "The Artbox";

// Site logo
$siteLOGO_src = "img/logo.png";
$siteLOGO_alt = "Logo Artbox";

// Site URL - index.php
$siteURL = sprintf(
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