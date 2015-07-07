<?php

namespace MCPEGamerJP

use PocketMine\player\playerkickevent;
use PocketMine\player;

class PlayerQuit extends PluginBase{
public function onEnable(){
     $this->getLogger()->info(TextFormat::BLUE . "[PlayerQuit]Plugin PlayerQuit has been enabled on this server.");
   }
public function onDisable(){
      $this->getLogger()->info(TextFormat::RED . "[PlayerQuit]Plugin PlayerQuit has been disabled on this server.");
   }

public function onCommand(CommandSender $sender
