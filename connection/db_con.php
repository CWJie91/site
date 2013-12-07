<?php
class db_con{
	
	private $con;
	
	//constructor function
	public function __construct()
	{
		$this->con = new mysqli("127.0.0.1", "root", "", "hotelsys");
		if ($this->con->connect_errno)
			die("Unable to enstablish connection to database: " . $con->connect_error);
	}

	//close and free the connection
	public function disconnect()
	{
		if($this->con)
			$this->con->close();
	}
	
	//return an associate array of first row from the given query
	private function get_first_row($selectquery)
	{
		$row = array();
		if($result = $this->con->query($selectquery))
		{
			$row = $result->fetch_assoc();
			$result->free();
		}
		return $row;
	}
	
	
	
	//return an associate array of all rows from the given query
	private function get_all_rows($selectquery)
	{
		$rows = array();
		if($result = $this->con->query($selectquery))
		{
			while ($row = $result->fetch_assoc())
				$rows[] = $row;
			$result->free();
		}
		return $rows;
	}
	
	//insert a new row with provided values, into a given table
	private function insert_row($values, $table)
	{
		return $this->con->query("INSERT INTO `$table` VALUES($values)");
	}
	
	//select a value with provided values ,from a table
	public function select_row($values,$table){
	return $this->get_first_row("SELECT * FROM `$table` WHERE id= $values");
	}
	
	//count the number of rows of result of a given query
	private function row_count($selectquery)
	{
		return $this->con->query($selectquery)->num_rows;
	}
	
	public function addCustomer($FirstName, $LastName, $Gender, $DOB, $Nationality, $IC, $Address, $Email, $ContactNum, $PaymentMethod)
	{
		 $this->insert_row("NULL, '$FirstName', '$LastName', '$Gender', '$DOB', '$Nationality', '$IC', '$Address', '$Email ', '$ContactNum', '$PaymentMethod'", 'customer');
		 return $this->con->insert_id;
	}
	
	public function addReservation($room_num, $customer_id, $dateIn, $dateOut, $number_of_person, $room_service, $spc_request)
	{
		return $this->insert_row("NULL, '$room_num', $customer_id, '$dateIn', '$dateOut', '$number_of_person', '$room_service', '$spc_request'",'reservation');
	}
	
	public function getAllRoomTypes()
	{
		return $this->get_all_rows("SELECT * FROM roomtype");
	}
	
	public function updateAllRoomPrice($roomPrices)
	{	
		$i = 1;
		$success = true;
		foreach ($roomPrices as $roomPrice)
		{
			if(!$this->con->query("UPDATE roomtype SET price = $roomPrice WHERE id = $i"))
				$success = false;
			$i++;
		}
		return $success;
	}
	
	public function getPrice($roomType)
	{
		if($row = $this->get_first_row("SELECT price FROM roomtype WHERE type ='$roomType'"))
			return $row['price'];
		else
			return 0;
	}
}
?>