<?php
class compogenerator{
  public $clan_ar;
  public $pool1_ar;
  public $pool2_ar;
  public $round;
  private $game;

  function __construct($clan_ar, $game, $pool1_ar, $pool2_ar, $round){
    $this->clan_ar = $clan_ar;
    $this->game = $game;
    if(isset($pool1_ar)){
      $this->pool1_ar = $pool1_ar;
      $this->pool2_ar = $pool2_ar;
    }
    if(isset($round)){
      $this->round = $round++;
    }
    else{
      $this->round = 1;
    }
  }

  function pool(){
    $bot_ar = array("BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT", "BOT");
    $poolable_ar = array_replace($bot_ar, $this->clan_ar);
    shuffle($poolable_ar);
    $this->pool1_ar = array_slice($poolable_ar, 0, 8);
    $this->pool2_ar = array_slice($poolable_ar, 8, 8);
  }

  function round(){
    shuffle($this->pool1_ar);
    shuffle($this->pool2_ar);
    return "
      <table>
        <tr>
          <th rowspan='6'>ROUND " . $this->round . "</th>
          <th colspan='6'>Pool 1</th>
          <th colspan='6'>Pool 2</th>
        </tr>
        <tr>
          <th>Server</th>
          <th>Clan</th>
          <th>Pt</th>
          <th>Clan</th>
          <th>Pt</th>
          <th>Status</th>
          <th>Server</th>
          <th>Clan</th>
          <th>Pt</th>
          <th>Clan</th>
          <th>Pt</th>
          <th>Status</th>
        </tr>
        <tr>
          <td>1</td>
          <td>" . $this->$pool1_ar[0] . "</td>
          <td></td>
          <td>" . $this->$pool1_ar[1] . "</td>
          <td></td>
          <td></td>
          <td>5</td>
          <td>" . $this->$pool2_ar[0] . "</td>
          <td></td>
          <td>" . $this->$pool2_ar[1] . "</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>2</td>
          <td>" . $this->$pool1_ar[2] . "</td>
          <td></td>
          <td>" . $this->$pool1_ar[3] . "</td>
          <td></td>
          <td></td>
          <td>6</td>
          <td>" . $this->$pool2_ar[2] . "</td>
          <td></td>
          <td>" . $this->$pool2_ar[3] . "</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>3</td>
          <td>" . $this->$pool1_ar[4] . "</td>
          <td></td>
          <td>" . $this->$pool1_ar[5] . "</td>
          <td></td>
          <td></td>
          <td>7</td>
          <td>" . $this->$pool2_ar[4] . "</td>
          <td></td>
          <td>" . $this->$pool2_ar[5] . "</td>
          <td></td>
          <td></td>
        </tr>
        <tr>
          <td>4</td>
          <td>" . $this->$pool1_ar[6] . "</td>
          <td></td>
          <td>" . $this->$pool1_ar[7] . "</td>
          <td></td>
          <td></td>
          <td>8</td>
          <td>" . $this->$pool2_ar[6] . "</td>
          <td></td>
          <td>" . $this->$pool2_ar[7] . "</td>
          <td></td>
          <td></td>
        </tr>
      </table>
    ";
    $this->round++;
  }
}
