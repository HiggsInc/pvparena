<?php

namespace HiggsInc\onevsone\model;

use pocketmine\scheduler\PluginTask;
use pocketmine\utils\TextFormat;


class SignRefreshTask extends PluginTask{
	
	/** var ArenaManager **/
	public $arenaManager;
	
	public function onRun(int $currentTick){
		$this->arenaManager->refreshSigns();
	}
	
}