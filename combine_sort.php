<?php

$states = array_merge(
    file('../data/html/states.html', FILE_IGNORE_NEW_LINES),
    file('../data/html/territories.html', FILE_IGNORE_NEW_LINES),
    file('../data/html/armed_forces.html', FILE_IGNORE_NEW_LINES)
);

function compareStrings($a, $b){
    return strcasecmp(strip_tags($a), Strip_tags($b));
}

usort($states, 'comapareStrings');
file_put_contents('../data/html/sorted.html', implode(PHP_EOL, $states));
echo '<select>';
include '../data/html/sorted.html';
echo '</select>';
