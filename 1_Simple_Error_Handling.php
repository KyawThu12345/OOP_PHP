<?php
function myFileRead($file)
{
    if (file_exists($file)) {
        $handler = fopen($file, 'r');
        $size = filesize($file);
        $data = fread($handler, $size);
        echo $data;
    } else {
        throw new Exception("No File");
    }
}
try{
    myFileRead("Hello.php");
}catch(Exception $e){
    echo $e->getMessage();
    echo "<br>";
    echo $e->getFile();
    echo "<br>";
    echo $e->getTraceAsString();
    echo "<br>";
    echo $e->getLine();
}
