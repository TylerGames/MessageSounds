<?php
/*
 _              _  _____                    
| |    ___  ___| ||_   _|__  __ _ _ __ ___  
| |   / _ \/ __| __|| |/ _ \/ _` | '_ ` _ \ 
| |__| (_) \__ \ |_ | |  __/ (_| | | | | | |
|_____\___/|___/\__||_|\___|\__,_|_| |_| |_|
 */ 
namespace lostteam\ms;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\Player;
use pocketmine\level\sound\PopSound;
class Main extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->getLogger()->info("[MessageSounds] Enabled!");
}
public function onChat(PlayerChatEvent $event){
             $player = $event->getPlayer();
             $player->getLevel()->addSound(new PopSound($player));
    }
}
