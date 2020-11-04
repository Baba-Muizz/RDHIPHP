<?php
// Define class
class Contact {
  // Properties
  private $database;
  public $id, $name, $email, $subject, $comment, $is_read, $created;

  // Method
  public function __construct() {
    $this->database = new Connection();
    $this->database = $this->database->connect();
  }

  // CREATE
  public function create() {
    // Prepare query to database table
    $statement = $this->database->prepare("INSERT INTO contact (name, email, subject, comment) VALUES (?, ?, ?, ?)");
    // Bind parameter to placeholder
    $statement->bindParam(1, $this->name);
    $statement->bindParam(2, $this->email);
    $statement->bindParam(3, $this->subject);
    $statement->bindParam(4, $this->comment);

    // Execute the query
    $result = $statement->execute();

    return $result ? true : false; 
  }
}

// READ
