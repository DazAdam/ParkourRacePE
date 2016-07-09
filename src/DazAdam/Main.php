<?php
namespace DazAdam;
use pocketmine\command\Command;
use pocketmine\event\PlayerDeathEvent;
use pocketmine\plugin\PluginBase;
class Main implements PluginBase{

public function onEnable(){
        $this->getLogger()->info("Meh has been called!");
    }
    
    public function SignJoinMethodOne(PlayerInteractionEvent $event){
         $player = $event->getPlayer();
        $sign = $event->getPlayer()->getLevel()->getTile($event->getBlock());
        $arena = $event->getServer()->getLevelByName("ParkourRacePELobbyOne");
        if($event->getBlock()->getId() == 63 or $event->getBlock()->getId() == 68) {
            if($sign instanceof Sign) {
                $signtext = $sign->getText();
                if(TextFormat::clean($signtext[0]) === "[ParkourRace]")) {
                     if(TextFormat::clean($signtext[1] === "Join!")
    $player->teleport(126.3,5,128.3,$arena);
    
     $player->sendMessage(TextFormat::RED."Blocks and their functions: \nGreen: Speed x 3 \nRed: Removes Speed Boost \nBlue: Gives you a jump boost for a second ");               
                }
            }
        }
    }  
    
    public function LobbyOne(PlayerInteractionEvent){
    $lobby = getServer()->getLevelbyName("ParkourRacePELobbyOne");
    $arena = getServer()->getLevelbyName("ParkourRaceArenaOne");
    $players-> $lobby->getPlayers();
    if($players > 4){
    $players->sendMessage(TextFormat::BLUE."One more player required to start!");
     $player = $event->getPlayer();
        $sign = $event->getPlayer()->getLevel()->getTile($event->getBlock());
        if($event->getBlock()->getId() == 63 or $event->getBlock()->getId() == 68) {
            if($sign instanceof Sign) {
                $signtext = $sign->getText();
                if(TextFormat::clean($signtext[0]) === "[ParkourRace]")) {
                     if(TextFormat::clean($signtext[1] === "Join!"){
                     $sign->setline(3,"4/5 Players in game waiting.");
                     }
                     }
                }
              }
          }
          
   
    
    if($players > 5){
    $players->sendMessage(TextFormat::GOLD."The Race has started!"); 
    $players->teleport($Arena);
     $player = $event->getPlayer();
        $sign = $event->getPlayer()->getLevel()->getTile($event->getBlock());
        if($event->getBlock()->getId() == 63 or $event->getBlock()->getId() == 68) {
            if($sign instanceof Sign) {
                $signtext = $sign->getText();
                if(TextFormat::clean($signtext[0]) === "[ParkourRace]"){
                     $sign->setline(3,"IN-GAME.");
                     $sign->setline(2,"IN-GAME");
                     }
                }
              }
          }
          }
          
          public function Death(PlayerDeathEvent $event){
          $player = $event->getPlayer();
          $fail = getServer->getLevelByName("ParkourRaceDeath");
          $player->teleport($fail);
          $player->sendMessage(TextFormat::RED."You lost! Do /hub to return to hub.");
          }
          }
          
          
          
