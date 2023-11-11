<?php

function logo() {
    global $site;
    $logo = '<a href="'.$site['url'].'" target="_self">';
    $logo .= '<img id="logo" src="'.$site['logo']["src"].'" alt="'.$site['logo']["alt"].'">';
    $logo .= '</a>';
    echo($logo);
};

?>