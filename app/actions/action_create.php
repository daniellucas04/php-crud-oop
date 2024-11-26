<?php
include_once '../classes/Statements.php';

$database = new Statements();
$created_at = date("Y-m-d H:i:s");
$updated_at = date("Y-m-d H:i:s");

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$status = "Ativo";

$method = $_SERVER['REQUEST_METHOD'];

if(isset($method)){
  $database->insert($name, $email, $password, $status, $created_at, $updated_at);
}

header("Location: ../index.php");