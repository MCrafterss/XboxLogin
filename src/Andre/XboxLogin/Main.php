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
	protected $clientID = null;
	private $xboxString = [];
	private $tokens = [];
	
     public function onEnable(){
            $this->getServer()->getPluginManager()->registerEvents($this,$this);
		        	@mkdir($this->getDataFolder());
			       $this->config = new Config($this->getDataFolder() . "config.yml");
                    $this->reloadConfig();
				   $dater = $this->config->get("AutoUpdater");
				   if($dater == true){
					   
					    $this->getLogger()->info("MCrafters+ connection established!");
				   }
	  elseif($dater == false){
		      $this->getLogger()->info("It looks like you aren't using MCrafters+, an auto updater for our plugins. We recommend that you do so your plugins won't become incompatible.");
	  }
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
	    API Part for checking if the player is logged in into xbox live ect, still alot to do ^_^
	 */
          public function checkStatus($player, $name){
		   // todo! 
		   
	   }
	   
	   
	      public function isXboxUser(){
	   
	      return $this->checkStatus;
	   }
}
