<?php

namespace Narrow;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\player\Player;
use pocketmine\plugin\PluginBase;

class Discord extends PluginBase{

    public function onEnable(): void
    {
        $this->getLogger()->notice("Le plugin discord sais bien allumé");
    }
    public function onDisable(): void
    {
        $this->getLogger()->notice("Le plugin discord sais bien étaint");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        $commandname = $command->getName();
        if ($commandname == "discord"){
            if ($sender instanceof Player){
                $sender->sendMessage("Le discord est discord.gg/exemple");
            }
        } return true;
    }

}