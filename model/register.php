<?php
require_once 'user.php';

try {
  if (isset($_POST['userName'])&&isset($_POST['pwd'])&&isset($_POST['email'])&&isset($_POST['gender'])&&isset($_POST['dateofbrith'])) {
    $name = $_POST['userName'];
    $pwd  = $_POST['pwd'];
    $mail = $_POST['email'];
    $gender = $_POST['gender'];
    $dateOfBirth = $_POST['dateofbrith'];
    $user = new user($mail, $name, $pwd, $gender, $dateOfBirth);
    $user->createUserInDatabase();
  }
} catch (Exception $e) {
  echo "Error: ".$e->getMessage();
}
