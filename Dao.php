<?php
class Dao {

  private $host = 'us-cdbr-iron-east-01.cleardb.net';
  private $db = 'heroku_b42d25b6e0581b1';
  private $username = 'mb38372fd919298';
  private $password = '90733de7';

    
    public function getConnection() {
        return new PDO("mysql:host={{this->host};dbname={this->db}", $this->username,$this->password);
    }

    public function userLogin ( $username, $password) {
      $conn = $this->getConnection();
      $grab = $conn->prepare("SELECT * from Users where name = '$username' and Password = '$password'");
      $grab->execute();
      $result = $grab->fetch(PdO::FETCH_ASSOC);
      return $result;
    }
      
    public function getUsername($userName) {
      $conn = $this->getConnection();
      return $conn->query("SELECT * FROM Users WHERE name = '$userName'", PDO::FETCH_ASSOC);
    }

    public function getPassword ($userName) {
      $conn = $this->getConnection();
      return $conn->query("SELECT password FROM Users WHERE name = {$userName}", PDO::FETCH_ASSOC);
    }

    public function createLogin($username, $password) {
      $conn = $this->getConnection();
      $saveQuery = "INSERT INTO Users (name,password) values (:Username, :Password);";
      $q = $conn->prepare($saveQuery);
      $q->bindParam(":Username", $username);
      $q->bindParam(":Password", $password);
      $q->execute();
    }

    


    
}