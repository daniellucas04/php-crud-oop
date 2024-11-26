<?php
include_once '../classes/Statements.php';

$database = new Statements();
$stauts = $_POST['status'];

$method = $_SERVER['REQUEST_METHOD'];

if(isset($method)){
  $database->getData($status);
}

header("Location: ../index.php");
