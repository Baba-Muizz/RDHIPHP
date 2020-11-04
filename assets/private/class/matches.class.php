<?php
class Matches {
	private $database;
	public $id, $team1, $team2, $team1_score, $team2_score, $venue, $match_date;

	public function __construct() {
		$this->database = new Connection();
		$this->database = $this->database->connect();
	}

	// Create record in database table
	public function create() {
		$statement = $this->database->prepare("INSERT INTO matches (team1, team2, team1_score, team2_score, venue, match_date) VALUES (?, ?, ?, ?, ?, ?)");
		// Bind all values to the placeholders
		$statement->bindParam(1, $this->team1);
		$statement->bindParam(2, $this->team2);
		$statement->bindParam(3, $this->team1_score);
		$statement->bindParam(4, $this->team2_score);
		$statement->bindParam(5, $this->venue);
		$statement->bindParam(6, $this->match_date);

		// Execute the query
		$result = $statement->execute();

		return $result ? true : false;
	}

	// Read row(s) from the database table
	public function getMatches() {
		$statement = $this->database->prepare("SELECT mt.*, ct.name AS team1_name, ct.name AS team2_name, ct.flag AS team1_flag, ct.flag AS team2_flag FROM matches mt JOIN country ct ON(mt.team1 = ct.id AND mt.team2 != mt.team1)");
		$statement->execute();
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
