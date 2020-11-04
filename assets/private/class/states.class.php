<?php
class States {
	private $database;
	public $id, $statename, $capital, $statecode;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}

	// Create record in database table
	public function create() {
		$statement = $this->database->prepare("INSERT INTO states (statename, capital, statecode) VALUES (?, ?, ?)");
		// Bind all values to the placeholders
		$statement->bindParam(1, $this->statename);
		$statement->bindParam(2, $this->capital);
		$statement->bindParam(3, $this->statecode);

		// Execute the query
		$result = $statement->execute();

		return $result ? true : false;
	}

	// Read row(s) from the database table
	public function getStates() {
		$statement = $this->database->prepare("SELECT * FROM states");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function countAll() {
		$statement = $this->database->prepare("SELECT COUNT(*) AS count FROM states");
		$statement->execute();
		$result = $statement->fetch();

		return $result ? $result['count'] : false;
	}

	// Update row in table

	// Delete record from table
}
