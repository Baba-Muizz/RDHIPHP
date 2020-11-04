<?php
// Database connection CLASS
class Connection {
  // Properties
  private $host = 'localhost';
  private $dbname = 'royal diamond investment';
  private $username = 'root';
  private $password = '';

  // Methods
  public function connect() {
    try {
      $database = new PDO("mysql:host=$this->host;dbname=$this->dbname", $this->username, $this->password);
      $database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $database;
    } catch (PDOException $e) {
      return false;
    }
  }
}
