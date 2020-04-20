<?php
class Dao {

  private $host = 'us-cdbr-iron-east-01.cleardb.net';
  private $db = 'heroku_b42d25b6e0581b1';
  private $username = 'mb38372fd919298';
  private $password = '90733de7';

    
    public function getConnection() {
      try{
        $conn= new PDO("mysql:host={{this->host};dbname={this->dbname}", $this->username,$this->password);
      } catch (Exception $e) {
          return null;
      }
      return $conn;

    }

    public function checkLogin($user, $pass) {
      $conn = $this->getConnection();
      $saveQ = "SELECT * FROM Users WHERE name = :user and password = :pass";
      $q = $conn->prepare($saveQ);
      $q->bindParam(":user", $user);
      $q->bindParam(":pass", $pass);
      try {
        $q->execute();
          $count = $q->rowCount();
          if($count == 1) {
            return 1;
          } else {
            return 0;
          }
      } catch (Exception $e) {
        echo print_r($e,1);
        exit;
      }
    }

    public function checkAdm($user) {
      $conn = $this->getConnection();
      $saveQ = "SELECT access from Users WHERE name = :user and access = 1";
      $q = $conn->prepare($saveQ);
      $q->bindParam(":user", $user);
      try {
        $q->execute();
        $count = $q->rowCount();
        if($count ==1) {
          return 1;
        } else {
          return 0;
        }
      }
      catch (Exception $e) {
        echo print_r($e,1);
        exit;
      }
    }



    public function newUser($user, $pass) {
      $conn = $this->getConnection();
      $saveQ = "INSERT INTO Users (name, password, access) values (:name, :pass, 0)";
      $q = $conn->prepare($saveQ);
        $q->bindParam(":name", $user);
        $q->bindParam(":pass", $pass);
        if($q->execute()){
          return 1;
        }
         else {
           return 0;
         }
    }




    // public function userLogin ($username) {
    //   $conn = $this->getConnection();
    //   $q = $conn->prepare("SELECT * from Users where name = :username");
    //   $q->bindParam(':email', $email);
    //   $q->setFetchMode(PDO::FETCH_ASSOC);
    //   $q->execute();
    //   $result = $q->fetchAll();
    //   return $result;
    // }
      
    // public function getUser($username) {
    //   $conn = $this->getConnection();
    //   $query= $conn->prepare("SELECT name FROM Users WHERE name = :username");
    //   $query->bindParam(':email', $email);
    //   $query->setFetchMode(PDO::FETCH_ASSOC);
    //   $query->execute();
    //   $results = $query->fetch();

    //   return $results['username'];
    // }

    // public function getPassword ($userName) {
    //   $conn = $this->getConnection();
    //   $query = $conn->prepare("SELECT password FROM Users WHERE name = :username");
    //   $query->bindParam(':email', $email);
    //   $query->setFetchMode(PDO::FETCH_ASSOC);
    //   $query->execute();
    //   $results = $query->fetch();
    //   return $results['password'];


    // }

    // public function createUser($username, $password) {
    //   $conn = $this->getConnection();
    //   $query = $conn->prepare("INSERT INTO Users ( name, password) values (:username, :password)");
    //   $query->bindParam(':username', $username);
    //   $query->bindParam(':password', $password);
    //   $query->setFetchMode(PDO::FETCH_ASSOC);
    //   $query->execute();
    // }


    


    
}