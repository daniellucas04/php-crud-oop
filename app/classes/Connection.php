<?php
class Connection{
  // alterar informações de conexão com o banco de dados
  private $host = "localhost";
  private $username = "root";
  private $password = "";
  private $database = "dbuser";
  protected $connection;

  protected function connect(){
    try {
      $this->connection = new PDO("mysql:host=$this->host;dbname=$this->database", $this->username, $this->password);
      $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $exception) {
		echo "<pre>{$exception->getMessage()}</pre>";
		die();
	}
    return $this->connection;
  }
}
?>