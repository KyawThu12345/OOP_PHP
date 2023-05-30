<?php 
class getter_And_Encapsulation{
    private $name = "Mg Mg";
    public function setter($data){
        $this->name = $data;
    }
    public function getter(){
      return $this->name;
    }
}
$obj = new getter_And_Encapsulation();
$obj->setter("Aung Aung");
echo $obj->getter();
?>