<?php
namespace VMBanTransfer;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;

class Main extends PluginBase implements Listener {
    public function onLoad() {
            $this->getLogger()->info("Plugin is loading.. Please be patient.");
}

public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("Plugin has been enabled succesfully. looking for errors. If there's no errors, then you're all good.");
}
    
public function onLogin(PlayerJoinEvent $event) {
    $player = $event->getPlayer();
   if ($player->isBanned($player));
$event->getPlayer()->transfer("voidhackerpe.ml", "25640");
    }
}
