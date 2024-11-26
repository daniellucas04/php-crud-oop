<?php
include_once "Connection.php";

class Statements extends Connection{
  
  public function getData($status = ""){
    if($status == ""){
      $query = "SELECT * FROM User";
      $stmt = $this->connect()->prepare($query);
      $stmt->execute();
    }else{
      $query = "SELECT * FROM User WHERE status=:status";
      $stmt = $this->connect()->prepare($query);  
      $stmt->bindParam(":status", $status);
      $stmt->execute();
    }
    return $stmt;
  }

  public function getUser($id){
    $query = "SELECT * FROM User WHERE id=$id";
    $stmt = $this->connect()->query($query);

    return $stmt;
  }

  public function getRowsNumber(){
    $query = "SELECT COUNT(*) FROM User";
    $stmt = $this->connect()->query($query);
    $count = $stmt->fetchColumn();
    return $count;
  }

  public function insert($name, $email, $password, $status, $created_at, $updated_at){
    $query = "INSERT INTO User (id, name, email, password, status, created_at, updated_at) VALUES (null, :name, :email, :password, :status, :created_at, :updated_at)";
    try{
      $stmt = $this->connect()->prepare($query);
      $stmt->bindParam(':name', $name);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':password', $password);
      $stmt->bindParam(':status', $status);
      $stmt->bindParam(':created_at', $created_at);
      $stmt->bindParam(':updated_at', $updated_at);

      $stmt->execute();
    }catch(PDOException $e){}
  }

  public function update($id, $name, $email, $status){    
	  try{
		$statusField = (!empty($status)) ? ', status=:status' : null;
		$status = (!empty($status) AND $status === 'Ativo') ? 'Ativo' : 'Inativo';

		$query = "UPDATE User SET name=:name, email=:email $statusField WHERE id=:id";
        $stmt = $this->connect()->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
		if ( !empty($statusField) ) {
			$stmt->bindParam(':status', $status);
		}
        $stmt->bindParam(':id', $id);

        $stmt->execute();
    }catch(PDOException $e){
		echo $e->getMessage();
	}
  }

  public function delete($id){
    $query = "UPDATE User SET status='Inativo' WHERE id=:id ORDER BY updated_at DESC";

    try{
      $stmt = $this->connect()->prepare($query);
      $stmt->bindParam(':id', $id);

      $stmt->execute();
    }catch(PDOException $e){}
  }
}