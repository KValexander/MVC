<?php
class Model {
	// Private variables
	public $table = "";
	public $primaryKey = "";
	private $find_id = "";

	// Get one table value
	public function find($id) {
		$sql = sprintf("SELECT * FROM `%s` WHERE `%s`='%s'", $this->table, $this->primaryKey, $id);
		$result = DB::query($sql);
		if(!$result) return [];
		$assoc = $result->fetch_assoc();
		$this->find_id = $assoc[$this->primaryKey];
		return $assoc;
	}

	// Get all table values
	public function all() {
		$sql = sprintf("SELECT * FROM `%s`", $this->table);
		$result = DB::query($sql);
		if(!$result) return [];
		$data = []; while($row = $result->fetch_assoc()) $data[] = $row;
		return $data;
	}

	// Adding data
	public function add($array) {
		// Configuration
		$keys = "";
		$values = "";
		$count = 0;
		// Concatenation
		foreach($array as $key => $val) {
			if($count != count($array) - 1) {
				$keys .= sprintf("`%s`, ", $key);
				$values .= sprintf("'%s', ", $val);
			} else {
				$keys .= sprintf("`%s`", $key);
				$values .= sprintf("'%s'", $val);
			}
			$count++;
		}

		// Adding data to the database
		$sql = sprintf("INSERT INTO `%s`(%s) VALUES(%s)", $this->table, $keys, $values);
		if(DB::query($sql)) return true;
		else return false;
	}

	// Deleting data
	public function delete($id="") {
		// ID definition
		if(!$id && !$this->$find_id) $value = $this->find_id;
		else $value = $id;

		// Removing data from the database
		$sql = sprintf("DELETE FROM `%s` WHERE `%s`='%s'", $this->table, $this->primaryKey, $value);
		if(DB::query($sql)) return true;
		else return false;
	}

	// Updating data
	public function update($array, $id="") {
		// ID definition
		if(!$id && !$this->$find_id) $value = $this->find_id;
		else $value = $id;

		// Configuration
		$values = "";
		$count = 0;
		
		// Concatenation
		foreach($array as $key => $val) {
			if($count != count($array) - 1) $values .= sprintf("`%s`='%s', ", $key, $val);
			else $values .= sprintf("`%s`='%s'", $key, $val);
			$count++;
		}

		// Updating data in the database
		$sql = sprintf("UPDATE `%s` SET %s WHERE `%s`='%s'", $this->table, $values, $this->primaryKey, $value);
		if(DB::query($sql)) return true;
		else return false;
	}

}
?>