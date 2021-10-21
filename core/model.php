<?php
class Model {
	// Private variables
	public $table = "";
	public $primaryKey = "";

	// Get one table value
	public function find($id) {
		$sql = sprintf("SELECT * FROM `%s` WHERE `%s`='%s'", $this->table, $this->primaryKey, $id);
		$result = DB::query($sql);
		if(!$result) return [];
		else return $result->fetch_assoc();
	}

	// Get all table values
	public function all() {
		$sql = sprintf("SELECT * FROM `%s`", $this->table);
		$result = DB::query($sql);
		if(!$result) return [];
		$data = []; while($row = $result->fetch_assoc()) $data[] = $row;
		return $data;
	}

}
?>