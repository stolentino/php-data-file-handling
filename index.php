<?php

$files = scandir('../data');

echo '<ul>';
foreach ($files as $file){
    echo '<li>';
    echo $file;
    echo '</li>';
}
echo '</ul>';