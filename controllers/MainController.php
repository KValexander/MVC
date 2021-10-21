<?php
class MainController {

	// Main page
	public function main_page() {
		$team = new TeamModel();

		// Get one table value
		// $tt = $team->find(3);

		// Deleting data
		// $delete = $team->delete();
		$delete = $team->delete(3);
 		if(!$delete) echo DB::$connect->error;

		// Adding data
		$insert = $team->add([
			"team_id" => 3,
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
		], 3); if(!$update) echo DB::$connect->error;
		// ]);

		// Calling the view and passing all the table data to it
		return view("index", ["data" => $team->all()]);
	}

}
	
?>