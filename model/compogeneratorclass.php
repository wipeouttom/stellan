<?php
class compogenerator{
  private $pool1_ar;
  private $pool2_ar;
  public $roundNum;

  function poolGenerator($clan_ar){
    $bot_ar = array("BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT");
    $poolable_ar = array_replace($bot_ar, $clan_ar);
    shuffle($poolable_ar);
    $this->pool1_ar = array_slice($poolable_ar, 0, 8);
    $this->pool2_ar = array_slice($poolable_ar, 8, 8);
  }

  function roundGenerator($roundNum){

  }
}
