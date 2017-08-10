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
   if($event->getLine(0) === "server"){
   $e->setLine(0, "§l§4Welcome");
   $e->setLine(1, "§l§2$name");
   $e->setLine(2, "§l§8to Server");
   $e->setLine(3. "§l§0hack=ban-ip enjoy -=> plugin by @cvv.119");
    }
   }
 }
   
