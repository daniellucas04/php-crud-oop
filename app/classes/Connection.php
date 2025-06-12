<?php
class Connection{
  // alterar informações de conexão com o banco de dados
  private $host;
  private $username;
  private $password;
  private $database;
  protected $connection;

  public function __construct() {
    $this->host = $_ENV['MARIADB_HOST'];
    $this->username = $_ENV['MARIADB_USER'];
    $this->password = $_ENV['MARIADB_PASS'];
    $this->database = $_ENV['MARIADB_DATABASE'];
  }

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