// Main controller
app.controllers.main = {
	// Main page
	main_page: function() {

		// Get request
		app.request.get(data => {
			data = JSON.parse(data);
			content = `<h1 class="head">${data.data}</h1>`;

			// Get request
			app.request.get(data => {
				data = JSON.parse(data);
				content += `<h2>${data.data}</h2>`;

				// Get template
				app.template.get_template("content");
				app.template.set_value("CONTENT", content);

				// Out data
				app.html.content.innerHTML = app.template.get_content();
		
			}, "/api/main/1");
		
		}, "/api/main");

	},

	// Side page
	side_page: function() {
		app.html.content.innerHTML = `
			<h1 class="head">Side page</h1>
			<h2>No content</h2>
		`;
	}
}