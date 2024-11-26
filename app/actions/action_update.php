<?php
include_once '../classes/Statements.php';

$database = new Statements();

$id = $_GET['id'] ?? null;
$name = $_POST['name'] ?? null;
$email = $_POST['email'] ?? null;
$status = $_POST['status'] ?? null;
$method = $_SERVER['REQUEST_METHOD'] ?? null;

if(isset($method)){
  $database->update($id, $name, $email, $status);
}

header("Location: /");