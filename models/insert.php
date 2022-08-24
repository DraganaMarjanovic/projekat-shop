 <?php






class DB {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "projekat";

    public function connect() {
        $dsn = "mysql:host=" . $this->host ."; dbname=" . $this->dbName;
        $pdo = new PDO ($dsn, $this->username, $this->password);
       
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
        return $pdo;
    }



}

class Contacts extends DB {
    public function insert($name, $email, $message) {
        $sql = "INSERT INTO contacts (name, email, message) VALUES (?, ?, ?);";
        $stmt = $this->connect()->prepare($sql); 
        $stmt->execute([$name, $email, $message]);
    
    }

}





class Users extends DB {
    public function insert($name, $last_name, $email,$password,$age,$gender) {
        $sql = "INSERT INTO users (name,last_name, email, password,age,gender) VALUES (?, ?, ?,?,?,?);";
        $stmt = $this->connect()->prepare($sql); 
        $stmt->execute([$name, $last_name, $email,$password,$age,$gender]);
    
    }



  public function login($email)
    {
        $sql = "SELECT email, password from users WHERE email=?;";
        $stmt = $this->connect()->prepare($sql); 
        $stmt->execute([ $email,]);
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    
    }

}


?> 