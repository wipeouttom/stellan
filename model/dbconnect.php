<?php
require_once('config.php');
/**
 * connect class.
 */
class connect {
  private $conn;
  private $connString;
  private $dbuser;
  private $dbpassword;

  function __construct(){
    $conset = new config();
    $this->connString = 'mysql:host=' . $conset->host . ';dbname=' . $conset->db;
    $this->dbuser = $conset->user;
    $this->dbpassword = $conset->password;
  }
  try {
			$this->conn = new PDO($this->connString, $this->dbuser, $this->dbpassword, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch(PDOException $e) {
			echo 'ERROR: ' . $e->getMessage();
		}

  // function query
  // queries db with sql statement
  //
  // ex:
  // $this->conn->query("INSERT INTO customer_log (action, portal_id,) VALUES (:action, :portal_id)", array(':action' => 2, ':portal_id' => 4));
  function query($executeString, $fieldArray){
    try {
        $data = $this->conn->prepare($executeString);
			  $data->execute($fieldArray);
  			return true;
  		} catch(PDOException $e) {
  			echo 'Error: ' . $e->getMessage();
  			return false;
  		}
  }
}
