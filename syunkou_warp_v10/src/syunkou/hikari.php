<?php

namespace syunkou;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\utils\Config;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\command\CommandExecutor;
use pocketmine\level\Position;


class hikari extends PluginBase implements Listener
{
	/** @var hikari */
	private static $instance

	/** @var Config */
	private $config 


 public function onEnable()
 {
   self::$instance = $this;
   $this->getLogger()->info("§esyunkou warpを構築・読み込みました。");
   $this->getLogger()->info("§a実行test　PocketMine-MP v3.14.0");
   $this->config = new Config($this->getDataFolder() . "warppoint.yml", Config::YAML, array(
  ));

 }
 public static function getInstance(): hikari
  {
    return self::$instance;
  }
 public function onCommand(CommandSender $sender, Command $command, string $label, array $args):bool
  {
      switch (strtolower($command->getName())) {
      	case "sewp":

      	if (!($sender instanceof Player)) {
           $sender->sendMessage("§c入力エラー:§eこのコマンドはゲーム内でしか実行できません");
           return true;
           }
        if(count($args) < 1){
           $sender->sendMessage("§c入力エラー:地点名が書かれていません。\n§e使い方:/sewp [地点名]");
           return true;
           }
        if (!$this->config->exists($args[0])) {
           //レベルとプレイヤーposを取得
           $level=$sender->getLevel();
           $wpname=$level->getName();
           $x=$sender->x;
           $y=$sender->y;
           $z=$sender->z;

           $this->config->set($args[0],array("Xp"=>$x,"Yp"=>$y,"Zp"=>$z,"levelp"=>$wpname));
           $this->config->save();
        　 $sender->sendMessage("§a".$args[0]."という地点を新規作成![§c".$x."§f,§b".$y."§f,§a".$z."level:§d".$wpname."§f]");
           return true;
          }else{
          	$sender->sendMessage("§d".$args[0]."という地点はもうあります。");
           return true;
         }
        

        case "dewp":
        if(!($sender instanceof Player)){
           $sender->sendMessage("§c入力エラー:§eこのコマンドはゲーム内でしか実行できません");
           return true;
           }	
        }
        if(!$this->config->exists($args[0])) {
           $sender->sendMessage("§c入力エラー:".$args[0]."という地点は存在しません。");	
           return ture;
        }else{
          $sender->sendMessage("§d".$args[0]."という地点を削除しました。");
          $this->config->remove($args[0])
          $this->config->save();
        }
        case "sw":
        if(!($sender instanceof Player)){
        	$sender->sendMessage("§c入力エラー:§eこのコマンドはゲーム内でしか実行できません");
           return true;
          }else{

          }

        









} 