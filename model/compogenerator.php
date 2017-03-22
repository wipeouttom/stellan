<?php
class compogenerator{
  function __construct($clan_ar, $game){
    //I'll leave the technical stuff for later
    $bot_ar = array(BOT, BOT, BOT, BOT, BOT, BOT, BOT, BOT, BOT, BOT, BOT, BOT, BOT, BOT, BOT, BOT);
    $poolable_ar = array_replace($bot_ar, $clan_ar);
    shuffle($poolable_ar);
    $pool1_ar = array_slice($poolable_ar, 0, 8);
    $pool2_ar = array_slice($poolable_ar, 8, 8);
    
  }
}
