<?php
require_once("../cotisations/models/User.php");
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql = "INSERT INTO User (passwords,prenom, nom, email, numTel ) VALUES ('$passswords','$prenomUser', '$nomUser', '$login', '$num')";
        mysqli_query($conn,$sql);
$request="SELECT * from User where password='".$motdepasse."' and numTel='".$num."'";
mysqli_query($conn,$request);
?>







class Database {
    private $_connection;
    private static $_instance; //The single instance
    private $_host = "localhost";
    private $_username = "root";
    private $_password = "";
    private $_database = "cotisation";
    /*
    Get an instance of the Database
    @return Instance
    */
    public static function getInstance() {
        if(!self::$_instance) { // If no instance then make one
            self::$_instance = new self();
        }
        return self::$_instance;
    }
    // Constructor
    public function __construct() {
        $this->_connection = new mysqli($this->_host, $this->_username,$this->_password, $this->_database);

        // Error handling
        if(mysqli_connect_error()) {
            trigger_error("Failed to connect to to MySQL: " . mysqli_connect_error(),E_USER_ERROR);
        }
    }
    // Magic method clone is empty to prevent duplication of connection
    private function __clone() {}
    // Get mysqli connection
    public function getConnection() {
        return $this->_connection;
    }
}