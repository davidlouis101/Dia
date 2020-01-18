<?php

namespace Crow\Dia;

use pocketmine\event\listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Server;

class Main extends PluginBase implements listener{
	public function onLoad() {
		 $this->getServer()->getLogger()->info("Wird geladen...");
	}
	public function onEnable() {
		 $this->getServer()->GetLogger()->info("Plugin On.");
	}
	public function onDisable() {
		 $this->GetServer()->getLogger()->info("Plugin Off");
	}
	
	
} 