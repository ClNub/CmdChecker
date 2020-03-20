<?php
namespace yotuba\CmdChecker;

use pocketmine\event\server\CommandEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;

class Main extends PluginBase implements Listener{
    public function onEnable(){
		$this->getServer()->getPluginmanager()->registerEvents($this, $this);
    }

    public function onCommandSend(CommandEvent $event): bool{
        $sender = $event->getSender();
        $name = $sender->getName();
        $command = $event->getCommand();
        $this->getLogger()->info(">> ".$name.": /".$command);
        return true;
    }
}
