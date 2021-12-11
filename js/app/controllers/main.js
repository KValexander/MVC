// Main controller
app.controllers.main = {
	// Main page
	main_page: function() {
		let content = "";

		app.template.get_template("page");
		app.template.set_value("TEXT", "It's work! (Main)");
		content = app.template.receive();

		app.html.innerHTML = content;
		app.html.innerHTML += "<a onclick='app.route.search(\"/main/\")'>Link</a>";
	},
	// Side page
	side_page: function() {
		let content = "";

		app.template.get_template("page");
		app.template.set_value("TEXT", "It's work! (Side)");
		content = app.template.receive();

		app.html.innerHTML = content;
	}
}