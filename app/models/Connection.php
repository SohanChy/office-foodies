<?php

class Connection{

	private $servername = "localhost";
	private $dbname = "officefoodies";
	private $username = "lara";
	private $password = "cosmos";

	private $conn;

	public function __construct(){
		// Create connection
		$this->conn = new mysqli($this->servername, $this->username, 
			$this->password, $this->dbname);

		// Check connection
		if ($this->conn->connect_error) {
			die("Connection failed: " . $this->conn->connect_error);
		} 	
	}

	public function getConnection(){
		return $this->conn;
	}

    public static function getQuery($sql){
        $conn = new Connection();
        $results = $conn->getConnection()->query($sql);

        if ($results->num_rows > 0) {
            return $results->fetch_all(MYSQLI_ASSOC);
        } else {
            return null;
        }
    }

	public function close(){
		$this->conn->close();
	}

}

?> 
