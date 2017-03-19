<?php
require_once('configuration.php');
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

  function create(){

  }

  function read(){

  }

  function update(){

  }

  function delete(){
    
  }

}
