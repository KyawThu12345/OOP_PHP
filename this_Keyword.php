<?php
class this_Keyword
{
    public $name = "Mg Mg";
    public function changeName()
    {
        $this->name = "Aung Aung";
    }
}
$obj = new this_Keyword();
$obj->changeName();
echo $obj->name;
