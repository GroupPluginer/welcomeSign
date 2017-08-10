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
   $sign = $event->setLine();
   $player = $event->getPlayer();
   $name = $player->getName();
      
   if(strtolower(trim($event->()getLine(0))) == "server" || strtolower(trim($event->getLine(0))) == "[Welcome]"){
      $sign(0, "[WELCOME]");
      $sign(1, "§l§7$name");
      $sign(2, "§l§3to");
      $sign(3, "§l§1Server");
    
     $player->sendMessage(TF::GREEN."done plugin by cvv_119");
      }
    }
 }
