// Main controller
app.controllers.main = {
	// Main page
	main_page: function() {
		let content = "";
		// Get request
		app.request.get(data => {
			data = JSON.parse(data);

			// Get template
			app.template.get_template("page");
			app.template.set_value("TEXT", data.data);
			content = app.template.get_content();

			// Out data
			app.html.innerHTML = content;
		}, "/api/main");
	}
}