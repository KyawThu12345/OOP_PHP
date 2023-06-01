<?php
error_reporting(0);
try{
    if(fopen('text.txt','r')){
echo "Success";
    }else{
        throw new Exception("File can't be read");
    }
}catch(Exception $e){
echo $e->getMessage();
}finally{
    echo "<br>";
    echo "Program Finished.";
}