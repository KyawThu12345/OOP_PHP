<?php
require_once "Player.php";
class Index
{
    public function __construct(){
        $player = new Player("C:/Users/waifer/documents/music/","Apyanlan.mp3");
        $player->playNow();
    }
}
new Index();
