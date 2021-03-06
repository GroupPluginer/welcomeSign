<?php

namespace wlc;

use pocketmine\plugin\PluginBase;
use pocketmine\event\block\SignChangeEvent;
use pocketmine\utils\TextFormat as TF;
use pocketmine\event\Listener;
use pocketmine\block\Block;

 class Main extends PluginBase implements Listener{
 
  public function onEnable(){
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
  $this->getLogger()->info(TF::GREEN."wlcSign has been enabled");
   }
   
   public function onChange(SignChangeEvent $event){
    $player = $event->getPlayer();
    $name = $player->getName();
    
   if($event->getLine(0) === "s"){
    $event->setLine(0, "§l§7Welcome");
    $event->setLine(1, $name);
    $event->setLine(2, "§l§1to");
    $event->setLine(3, "§l§2server");   
    }
  }
}
