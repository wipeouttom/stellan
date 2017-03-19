<?php
require_once('configuration.php');
/**
 * connect class.
 */
class connect {
  private $conn;
  private $connString;

  function __construct(){
    $conset = new config();
    $this->connString = 'mysql:host=' . $conset->host . ';dbname=' . $conset->db;
    
  }
}
