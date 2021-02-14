<?php
    Echo getcwd()."<br>";
    $dir = '/Applications/XAMPP/xamppfiles/htdocs/WebProPhp';
    $files = scandir($dir);
    foreach($files as $value){
        echo "$value<br>";
    }
    echo getcwd()."<br>";
    chdir("..\..");
    echo getcwd()."<br>";
?>