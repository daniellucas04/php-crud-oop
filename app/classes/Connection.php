<?php

class Connection{

  // alterar informações de conexão com o banco de dados
  private $_host = "localhost";
  private $_username = "root";
  private $_password = "";
  private $_database = "DBUser";

  protected function connect(){
    $this->connection = new PDO("mysql:host=$this->_host;dbname=$this->_database", $this->_username, $this->_password);
    $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if(!$this->connection){
      echo "Connection failed. Try again";
      exit;
    }
    return $this->connection;
  }
}
?>