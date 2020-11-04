<?php
class Country {
	private $database;
	public $id, $name, $code, $flag, $created;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}

	// Create record in database table
	public function create() {
		$statement = $this->database->prepare("INSERT INTO country (name, code, flag) VALUES (?, ?, ?)");
		// Bind all values to the placeholders
		$statement->bindParam(1, $this->name);
		$statement->bindParam(2, $this->code);
		$statement->bindParam(3, $this->flag);

		// Execute the query
		$result = $statement->execute();

		return $result ? true : false;
	}

	// Read row(s) from the database table
	public function getCountries() {
		$statement = $this->database->prepare("SELECT * FROM country");
		$statement->execute();
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function getAllExcept($id) {
		$statement = $this->database->prepare("SELECT * FROM country WHERE id != :id");
		$statement->execute(array("id"=>$id));
		$results = $statement->fetchAll(PDO::FETCH_ASSOC);

		return $results ? $results : false;
	}

	public function getCountry($id) {
		$statement = $this->database->prepare("SELECT * FROM country WHERE id = :id");
		$statement->execute(array("id"=>$id));
		$result = $statement->fetch();

		return $result ? $result : false;
	}

	public function update($id) {
		$statement = $this->database->prepare("UPDATE country SET name = ?, code = ?, flag = ? WHERE id = ?");
		$statement->bindParam(1, $this->name);
		$statement->bindParam(2, $this->code);
		$statement->bindParam(3, $this->flag);
		$statement->bindParam(4, $id);

		$result = $statement->execute();

		return $result ? true : false;
	}

	public function countAll() {
		$statement = $this->database->prepare("SELECT COUNT(*) AS count FROM country");
		$statement->execute();
		$result = $statement->fetch();

		return $result ? $result['count'] : false;
	}

	public function delete($id) {
		$statement = $this->database->prepare("DELETE FROM country WHERE id = :id");
		$result = $statement->execute(array('id'=>$id));

		return $result ? true : false;
	}
}
