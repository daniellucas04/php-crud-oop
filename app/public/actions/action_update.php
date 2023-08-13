<?php

include_once '../../classes/Statements.php';

$database = new Statements();

$id = $_GET['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$status = $_POST['status'];
$method = $_SERVER['REQUEST_METHOD'];

if(isset($method)){
  $database->update($id, $name, $email, $status);
  echo $status;
}

header("Location: ../index.php");