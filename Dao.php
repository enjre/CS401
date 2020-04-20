<?php
class Dao {

  private $host = 'us-cdbr-iron-east-01.cleardb.net';
  private $db = 'heroku_b42d25b6e0581b1';
  private $username = 'mb38372fd919298';
  private $password = '90733de7';

    
    public function getConnection() {
        return new PDO("mysql:host={{this->host};dbname={this->db}", $this->username,$this->password);
    }

    public function userLogin ($username) {
      $conn = $this->getConnection();
      $q = $conn->prepare("SELECT * from Users where name = :username");
      $q->bindParam(':email', $email);
      $q->setFetchMode(PDO::FETCH_ASSOC);
      $q->execute();
      $result = $q->fetchAll();
      return $result;
    }
      
    public function getUser($username) {
      $conn = $this->getConnection();
      $query= $conn->prepare("SELECT name FROM Users WHERE name = :username");
      $query->bindParam(':email', $email);
      $query->setFetchMode(PDO::FETCH_ASSOC);
      $query->execute();
      $results = $query->fetch();

      return $results['username'];
    }

    public function getPassword ($userName) {
      $conn = $this->getConnection();
      $query = $conn->prepare("SELECT password FROM Users WHERE name = :username");
      $query->bindParam(':email', $email);
      $query->setFetchMode(PDO::FETCH_ASSOC);
      $query->execute();
      $results = $query->fetch();
      return $results['password'];


    }

    public function createUser($username, $password) {
      $conn = $this->getConnection();
      $query = $conn->prepare("INSERT INTO Users ( name, password) values (:username, :password)");
      $query->bindParam(':username', $username);
      $query->bindParam(':password', $password);
      $query->setFetchMode(PDO::FETCH_ASSOC);
      $query->execute();
    }

    public function validateUser ( $username, $password){
      $conn = $this->getConnection();
      $check = $conn->query("SELECT name, password FROM Users WHERE name = :username AND password = :password");
      return $check;


    }

    


    
}