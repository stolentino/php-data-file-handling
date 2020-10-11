<?php

if ($fh = fopen('../data/html/combined.html', 'w')){
    fwrite($fh, file_get_contents('../data/html/states.html'));

    fwrite($fh, '<optgroup label="US Outlying Territories">');
    fwrite($fh, file_get_contents('../data/html/territories.html'));
    fwrite($fh, '</optgroup>');

    fwrite($fh, '<optgroup label="Armed Forces">');
    fwrite($fh, file_get_contents('../data/html/armed_forces.html'));
    fwrite($fh, '</optgroup>');

    fclose($fh);
}

echo '<select>';
include '../data/html/combined.html';
echo '</select>';
