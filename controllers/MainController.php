<?php
class MainController {

	// Main page
	public function main_page() {
		$team = new TeamModel();

		return view("index", ["data" => $team->all()]);
	}

}
	
?>