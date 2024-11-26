<?php
include_once '../classes/Statements.php';

$database = new Statements();
$id = $_GET['id'];

$method = $_SERVER['REQUEST_METHOD'];

if(isset($method)){
  $database->delete($id);
}

header("Location: ../index.php");
