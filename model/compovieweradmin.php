<!--this file can later on be used to create the page on which the compos can be made by admins
html to be added later should this file become a page
this file now only exists to configure compogenerator->round and beamer.php-->
<?php
session_id('2');
session_start();

$game = $_GET['game'];
if(isset($game)){
  $clan_ar = $_SESSION['clan_ar'];
  if(!(isset($clan_ar))){
    $clan_ar = new clan_ar;
  }
  $pool1_ar = $_SESSION['pool1_ar'];
  $pool2_ar = $_SESSION['pool2_ar'];
  $round = $_SESSION['round'];
  if(!(isset($round))){
    $round = 1;
  }
  $rounds_ar = $_SESSION['rounds_ar'];
  if(!(isset($rounds_ar))){
    $rounds_ar = array();
  }

  $creationType = $_POST['creationType'];
  if($creationType=="createnewpools"){
    unset($pool1_ar);
    unset($pool2_ar);
    $compogenerator = new compogenerator($clan_ar, $game, $pool1_ar, $pool2_ar, $round);
    $pools = $compogenerator->poolGen;
    $pool1_ar = $pools[0];
    $pool2_ar = $pools[1];
  }
  elseif($creationType=="deleteround"){
    unset(end($rounds_ar));
    $round--;
  }
  elseif($creationType=="reset"){
    unset($pool1_ar);
    unset($pool2_ar);
    unset($rounds_ar);
    unset($round);
    $createRoundButton = "disabled";
    $deleteRound = "disabled";
  }
  elseif($creationType=="createround"){
    $compogenerator = new compogenerator($clan_ar, $game, $pool1_ar, $pool2_ar, $round);
    $rounds_ar[] = $compogenerator->roundGen;
    $round++,
  }
  if($round>=1){
    $createNewPools = "disabled";
  }
  if($round<1){
    $deleteRound = "disabled";
  }
  echo "
    <form method='post' action='/compovieweradmin.php'>
      <input type='hidden' value='". $game ."'>
      <button name='creationType' value='createnewpools' type='submit'". $createNewPools .">Create new pools</button>
      <button name='creationType' value='createround' type='submit'". $createRound .">Create a new round</button>
      <button name='creationType' value='deleteround' type='submit'". $deleteRound .">Delete a round</button>
      <button name='creationType' value='reset' type='submit'>Reset</button>
    </form>
  ";
  foreach($rounds_ar as $curRoundNum=>$curRound){
    echo "
      <table>
        <tr>
          <th rowspan='6'>ROUND " . ($curRoundNum + 1) . "</th>
          ". $curRound ."
    ";
  }
  $_SESSION['clan_ar'] = $clan_ar;
  $_SESSION['pool1_ar'] = $pool1_ar;
  $_SESSION['pool2_ar'] = $pool2_ar;
  $_SESSION['round'] = $round;
  $_SESSION['rounds_ar'] = $rounds_ar;
}
else{
  echo "
    <form method='get' action='/compovieweradmin.php'>
      <button name='game' value='". $game1 ."' type='submit'>". $game1 ."</button>
      <button name='game' value='". $game2 ."' type='submit'>". $game2 ."</button>
      <button name='game' value='". $game3 ."' type='submit'>". $game3 ."</button>
    </form>
  ";
}
