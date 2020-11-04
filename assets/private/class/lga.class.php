<?php
class Lga {
	private $database;
	public $id, $stateid, $localgovt, $lgacode;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}

	// Create record in database table
	public function createLga() {
		$statement = $this->database->prepare("INSERT INTO lgas (stateid, localgovt, localcode) VALUES (?, ?, ?)");
		// Bind all values to the placeholders
		$statement->bindParam(1, $this->stateid);
		$statement->bindParam(2, $this->localgovt);
		$statement->bindParam(3, $this->localcode);

		// Execute the query
		$result = $statement->execute();

		return $result ? true : false;
	}

	// Read row(s) from the database table
	public function getLgas() {
		$statement = $this->database->prepare("SELECT * FROM lgas");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function getLga($stateid) {
		$statement = $this->database->prepare("SELECT * FROM lgas WHERE state_id = :stateid");
		$statement->execute(array("stateid"=>$stateid));
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function getLgaById($id) {
		$statement = $this->database->prepare("SELECT * FROM lgas WHERE id = :id");
		$statement->execute(array("id"=>$id));
		$result = $statement->fetch();

		$this->id = $result['id'];
		$this->localgovt = $result['localgovt'];
	}

	public function countAll() {
		$statement = $this->database->prepare("SELECT COUNT(*) AS count FROM lgas");
		$statement->execute();
		$result = $statement->fetch();

		return $result ? $result['count'] : false;
	}

	// Update row in table

	// Delete record from table
}
