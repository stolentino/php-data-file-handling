<?php
function readFolderFiles($dir){
    $files = scandir($dir);
    //echo var_dump($files);
    //echo '<pre>';
    //print_r($files);
    //echo '</pre>';
    
    echo '<ul>';
    foreach ($files as $file){
        if (substr($file, 0, 1) != '.' || $file == 'index.php') {
            echo '<li>';
            if(is_dir($dir . '/' . $file)){
                echo $file;
                readFolderFiles($dir . '/' . $file);
            }else{
                echo '<a href="' . $dir . '/' . $file . '">' . $file . '</a>';
            }
            echo '</li>';
        }
    }
    echo '</ul>';
}

readFolderFiles('../data');