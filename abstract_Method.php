<?php
abstract class arent
{
    const DB_HOST = "localhost";
    public $name = "Mg Mg";
    public abstract function doIt();
}
class Index extends arent
{
    public function doIt()
    {
        echo "Hello";
    }
}
$ind = new Index();
echo $ind->name;
