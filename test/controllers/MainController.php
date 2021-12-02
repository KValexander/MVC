<?php
class MainController {

	// Main page
	public function main_page() {
		$team = new TeamModel();
		$id = 1;

		// Set id
		$team->set_id($id);

		// Get one table value
		$tt = $team->find();
		// $tt = $team->find($id);

		// Deleting data
		$delete = $team->delete();
		// $delete = $team->delete($id);
 		if(!$delete) echo DB::$connect->error;

		// Adding data
		$insert = $team->add([
			"team_id" => $id,
			"name" => "Name",
			"genre" => "Genre",
			"years" => 1999,
			"country" => "Contry",
			"type" => "team"
		]); if(!$insert) echo DB::$connect->error;

		// Updating data
		$update = $team->update([
			"name" => "Updating Name",
			"genre" => "Updating Genre",
			"years" => 2020,
			"country" => "Updating Contry",
			"type" => "Updating team"
		// ], $id); if(!$update) echo DB::$connect->error;
		]); if(!$update) echo DB::$connect->error;

		// Calling the view and passing all the table data to it
		return view("index", ["data" => $team->all()]);
	}

}
?>