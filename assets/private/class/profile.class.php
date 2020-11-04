<?php
// Define class
class Profile {
  // Properties
  private $database;
  public $id, $fullname, $username;

  // Method
  public function __construct() {
    $this->database = new Connection();
    $this->database = $this->database->connect();
  }

  // CREATE
  public function create() {
    // Prepare query to database table
    $statement = $this->database->prepare("INSERT INTO profile (fullname, username) VALUES (?, ?)");
    // Bind parameter to placeholder
    $statement->bindParam(1, $this->fullname);
    $statement->bindParam(2, $this->username);
    // Execute the query
    $result = $statement->execute();

    // Retrieve profileid from create record
    $this->id = $this->database->lastInsertId();

    return $result ? true : false;
  }

  // READ
  public function getName($profileid) {
    $statement = $this->database->prepare("SELECT username FROM profile WHERE id = :profileid");

    $statement->execute(array("profileid"=>$profileid));

    $result = $statement->fetch();

    return $result ? $result['username'] : false;
  }
}
