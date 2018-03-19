<?php

/*
 * Debug
 */
function d($data) {
    echo "<pre style='background-color: #fff;'>";
    print_r($data);
    echo "</pre>";
}


function convertDateToSqlFormat ($date) {
    $pattern = '/(\d+)\.(\d+)\.(\d+)/i';
    $replacement = '$3-$2-$1';
    
    return preg_replace($pattern, $replacement, $date);
}

