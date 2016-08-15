<?php

namespace Andre\XboxLogin;

use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\event\player\PlayerKickEvent;
use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\utils\Config;

class Main extends PluginBase implements Listener {
	
	public $string = [];
	
     public function onEnable(){
            $this->getServer()->getPluginManager()->registerEvents($this,$this);
            $this->getLogger()->info("§b
* __   ___               _                 _       
* \ \ / / |             | |               (_)      
*  \ V /| |__   _____  _| |     ___   __ _ _ _ __  
*   > < | '_ \ / _ \ \/ / |    / _ \ / _` | | '_ \ 
*  / . \| |_) | (_) >  <| |___| (_) | (_| | | | | |
* /_/ \_\_.__/ \___/_/\_\______\___/ \__, |_|_| |_|
*                                     __/ |        
*                                    |___/         
*  §dPlugin has been enabled!§b
*
* ");
     }
	 
	 public function onPreLogin(PlayerLoginEvent $event){
		 $player = $event->getPlayer();
		 $name = $player->getName();
		 $this->checkStatus($player, $name);
	 }
	 
	 /*
	    Allows, players with invalid name to join. Or with spaces (ect)
	 */
	      public function onKick(PlayerKickEvent $event){
             if($event->getReason() === "disconnectionScreen.invalidName"){
				 $event->setCancelled(true);
			 }
		  }
	 /*
	    API Part for checking if the player is logged in into xbox live ect, still alot to do ^_^
	 */
       public function checkStatus($player, $name){
		   // todo! 
		   
	   }
}