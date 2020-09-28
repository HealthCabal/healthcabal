<?php
class Crud
{
	public $query;
	public $userData;



	function storeData($conn, $tableName, $data, $columns)
	{
		/***
		 * @param mixed $conn - mysqli object

		 * @param mixed $tableName - name of database table to be queried

		 * @param mixed $data - an array containing what is to be stored

		 * @param mixed $values - a set of parameter markers passed to $conn->prepare() separated by commas that correspond to the number of items in the $data array

		 * @param mixed $columns

		 * @return string|on success - "success"; on failure - failure
		 ***/
		$data = implode('","', $data);
		$data = '"' . $data . '"';
		//var_dump($data); 
		$query = "INSERT INTO $tableName ($columns) VALUES ($data)";
		//die($query);
		if ($conn->query($query) == TRUE) {
			return "success";
		} else {
			echo $conn->error;
			die();
			echo "failed";
		}
	}




	function fetchDataWhere($conn, $value, $columnName, $tablename)
	{
		$query = "SELECT * FROM $tablename WHERE $columnName = '$value'";
		$result = $conn->query($query);
		if ($conn->affected_rows > 0) {
			$payLoad = $result->fetch_assoc();
			return $payLoad;
		} else {
			return "nodatafound";
		}
	}


	function checkIfExists($conn, $tableName, $columnName, $value)
	{
		$ifExists = $conn->query("SELECT * FROM $tableName WHERE $columnName = '$value'");
		if ($conn->affected_rows > 0) {
			return "dataexists";
		} else {
			return "youcanproceed";
		}
	}


	function fetchDataWithLimit($conn, $tableName, $columnName, $value, $start, $end)
	{
		$query = "SELECT * FROM $tableName WHERE $columnName = $value LIMIT $start, $end";
		//die($query);
		$result = $conn->query($query);
		if ($conn->affected_rows > 0) {
			$dataDump = array();

			while ($dataset = $result->fetch_assoc()) {
				$dataDump[] = $dataset;
			}

			return $dataDump;
		} else {
			$query = "SELECT * FROM $tableName ORDER BY ID DESC LIMIT $start, $end";
			$result = $conn->query($query);
			$dataDump = array();

			while ($dataset = $result->fetch_assoc()) {
				$dataDump[] = $dataset;
			}
			return $dataDump;
		}
	}
}
