<?php
class Test
{
}
class Index
{
    public function show(Test $num)
    {
        var_dump($num);
    }
}
$ind = new Index();
$t = new Test();
$ind->show($t);