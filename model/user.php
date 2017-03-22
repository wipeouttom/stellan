<?php
  require_once 'dbconnect.php';

  class user {
  private $conn;
  private $userMail;
  private $userName;
  private $userPwd;
  private $userGender;
  private $userDateOfBirth;

  function __construct($mail,$userName,$pwd,$gender,$dateOfBirth) {
    $this->conn = new connect();
    $this->userMail = $mail;
    $this->userName = $userName;
    $this->userPwd = $pwd;
    $this->userGender = $gender;
    $this->userDateOfBirth = $dateOfBirth;
  }

  function createUserInDatabase(){
    $this->conn->query("INSERT INTO users (name, pwd, mail, gender, dateofbirth) VALUES (:name, :pwd, :mail, :gender, :dateofbirth)",array(':name'=>$this->userName, ':pwd'=>$this->userPwd, ':mail'=>$this->userMail, ':gender'=>$this->userGender, ':dateofbrith'=>$this->userDateOfBirth));
  }
}
