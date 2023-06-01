<?php
class Index
{
    public function doIt($var)
    {
        $this->finish("400");
    }
    public function finish($total)
    {
        echo "All total is {$total}";
    }
}
$ind = new Index();
$ind->doIt("finish");
