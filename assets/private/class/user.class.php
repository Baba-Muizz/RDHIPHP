<?php
class User {
  // Properties
  private $database;
  public $id,$email, $username, $password, $usergroup, $active, $created, $profileid;

  // Methods
  public function __construct() {
    $this->database = new Connection();
    $this->database = $this->database->connect();
  }

  public function create() {
    $statement = $this->database->prepare("INSERT INTO user (email,username, password, usergroup, profileid) VALUES (?, ?, ?, ?, ?)");
    // Bind parameters to the query
    $statement->bindParam(1, $this->email);
    $statement->bindParam(2, $this->username);
    $statement->bindParam(3, $this->password);
    $statement->bindParam(4, $this->usergroup);
    $statement->bindParam(5, $this->profileid);

    $result = $statement->execute();

    return $result ? true : false;
  }

  public function getUsers() {
    $statement = $this->database->prepare('SELECT us.*, pr.*, st.statename, lg.name FROM user us JOIN (profile pr, states st, lgas lg) ON(us.profileid = pr.id AND pr.stateid = st.id AND pr.lgaid = lg.id) ORDER BY us.created DESC');
    $statement->execute();

    $results = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $results ? $results : false;
  }

  public function getUser($id) {
    $statement = $this->database->prepare('SELECT * FROM user WHERE id = :id');
    $statement->execute(array('id'=>$id));

    $result = $statement->fetch();

    return $result ? $result : false;
  }

  public function getProfile($id) {
    $statement = $this->database->prepare('SELECT us.*, pr.* FROM user us JOIN profile pr ON(us.profileid = pr.id) WHERE us.id = :id');
    $statement->execute(array('id'=>$id));

    $result = $statement->fetch();

    return $result ? $result : false;
  }

  public function count() {
    $statement = $this->database->prepare('SELECT COUNT(*) AS count FROM user');
    $statement->execute();

    $result = $statement->fetch();

    return $result ? $result['count'] : false;
  }

  public function login() {
    $statement = $this->database->prepare("SELECT * FROM user WHERE username = :username AND password = :password AND active = 1");

    $statement->execute(array("username"=>$this->username, "password"=>$this->password));

    $result = $statement->fetch();

    // If row found, assign values to SESSION
    if ($result) {
      $_SESSION['us3rid'] = $result['id'];
      $_SESSION['us3rgr0up'] = $result['usergroup'];
      $_SESSION['profile'] = $result['profileid'];
      $_SESSION['userName'] = $result['username'];
      $_SESSION['1s@dmin'] = ($result['usergroup'] == 2305) ? true : false;
    }

    return $result ? true : false;
  }

  public function logout() {
    if (isset($_SESSION['us3rid'])) {
      unset($_SESSION['us3rid']);
      session_destroy();
      return true;
    }
    return false;
  }
}
