<?php

//require_once("Connection.php");

abstract class Model {	
	public $data=null;
	private $id=null,$new;

	function __construct($row = null) {
		if($row){
			$this->data = $row;
			$this->setId($row["id"]);
		}
		else {
			$this->new = true;
		}
   }
    //return "tablename";
    public static abstract function tableName(); 

	private function setId($id) {
		$this->id = $id;
		$this->new = false;	
    }

    public function getId() {
        return $this->id;
    }

   	//get all by limit 
	public static function getAll($limit=-1){

		$tn = static::tableName();
		if($limit == -1){
			$sql = "SELECT * FROM {$tn}";			
		}
		else {
			$sql = "SELECT * FROM {$tn} LIMIT {$limit}";	
		}

		return static::getCollection($sql);
	}

	//find and return a single object by id 
	public static function find($id,$column="id"){

		$tn = static::tableName();
		
		$sql = "SELECT * FROM {$tn} where {$column} = '{$id}'";

		$result = static::getSingle($sql);
		if($result){
		    return $result;
        }
        else return false;
	}

	public static function getSingle($sql){
		$conn = new Connection();

        $result = $conn->getConnection()->query($sql);

        if ($result->num_rows == 1) {
		    $row = $result->fetch_assoc();
		    return new static($row);
		} else {
//			$emptyArr["error"] = "0 or invalid number of results";
		    return null;
		}
	}

	public static function getCollection($sql){
		$conn = new Connection();
		$results = $conn->getConnection()->query($sql);
		
		if ($results->num_rows > 0) {
		    
		    $gotArr = [];
		    // output data of each row
		    while($row = $results->fetch_assoc()) {
		    	$obj = new static($row); 
		        array_push($gotArr, $obj);
		    }

		    return $gotArr;

		} else {
			$emptyArr["error"] = "0 or invalid number of results";
			return $emptyArr;
		}
	}

	public function save(){

		$C = new Connection();
		$conn = $C->getConnection();

		$tn = static::tableName();

		
		if($this->new == true){
			$colNames = implode(",",array_keys($this->data));
			$vals = null;
			foreach($this->data as $val){
				$vals = $vals . "'{$val}',";
			}
			$vals = rtrim($vals,',');

			$sql = "INSERT into {$tn} ($colNames) values ($vals)";

			if ($conn->query($sql) === TRUE) {
			    $this->setId($conn->insert_id);
			    return true;
			} else {
			    $this->error = $conn->error;
			    return false;
			}

		}
		else {

			$str = "";
			foreach($this->data as $col => $val){
				$str = $str . "$col = '$val',";
			}
			$str = rtrim($str,',');

			$sql = "UPDATE {$tn} set {$str} where id='{$this->id}'";
			return $conn->query($sql);
		}
	}



	public function delete(){
		$C = new Connection();
		$conn = $C->getConnection();
		
		$tn = static::tableName();

		if($this->new != true){
			$sql = "DELETE FROM {$tn} WHERE id = '{$this->id}'";

			return $conn->query($sql);
		}

	}
}

?> 
