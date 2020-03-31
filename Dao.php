<?php
class Dao {

    private $host = 'localhost';
    private $dbname = 'amald';
    private $username = 'andremaldonado';
    private $password = 'Boise123!';
    private $logger;

    
    public function getConnection() {
        try {
           $connection = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->username, $this->password);
        } catch (Exception $e) {
          $this->logger->LogError("Couldn't connect to the database: " . $e->getMessage());
          return null;
        }
        return $connection;
      }

      

    public function getMessages(){
        $conn = $this->getConnection();
        if(is_null($conn)) {
          return;
        }
        try {
          return $conn->query("SELECT ID, name, email, message FROM Users", PDO::FETCH_ASSOC);
        } catch(Exception $e) {
          echo print_r($e,1);
          exit;
        }
    }

    public function getUsers(){
        $conn = $this->getConnection();
        if(is_null($conn)) {
          return;
        }
        try {
          return $conn->query("SELECT ID, name, email, FROM Users", PDO::FETCH_ASSOC);
        } catch(Exception $e) {
          echo print_r($e,1);
          exit;
        }
    }

    public function deleteMessage ($name) {
        $conn = $this->getConnection();
        $deleteQuery = "delete from Users where name = $name";
        $q = $conn->prepare($deleteQuery);
        $q->bindParam(":id", $id);
        $q->execute();
      }




    
}