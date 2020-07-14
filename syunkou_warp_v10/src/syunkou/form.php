<?php

namespace syunkou;

use pocketmine\form\Form;
use pocketmine\Player;


class form implements Form {
	public function handleResponse(Player $player, $data): void {
	if (is_null($data)) {
				//close
				return;
			}
			switch ($data) {
				case 0;
					$player->sendForm(new EditPrefixForm());
					break;
				case 1:
					$player->sendForm(new AddMessageForm());
					break;
				case 2:
					$player->sendForm(new EditMessagesForm());
					break;
				case 3:
					$player->sendForm(new EditRepeatTimeForm());
					break;
				default:

 public function Serialize(): array 
 {
 	$config=hikari::getInstance()->config
 	$warps = $config->getAll(true);
    $buttons = [];
    $func = function($warp) {
    $buttons[] = ["text" => $warp ];
    };
array_map($func,$warps);
array_push(["text" => "キャンセル"],$buttons);
 return [
 	 "type" => "form",
 	 "title" => "§e§l瞬光ワープシステム",
 	 "content" => "§aワープしたい地点を選択してください",
 	 "buttons" => [

 	              


 	              ]


}