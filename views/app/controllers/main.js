// Main controller
app.controllers.main = {
	// Main page
	main_page: function() {
		let content = "";
		// Get request
		app.request.get(data => {
			data = JSON.parse(data);
			content = `<h1>${data.data}</h1>`;

			// Get request
			app.request.get(data => {
				data = JSON.parse(data);
				content += `<h1>${data.data}</h1>`

				// Get template
				app.template.get_template("content");
				app.template.set_value("CONTENT", content);

				// Out data
				app.html.innerHTML = app.template.get_content();
			}, "/api/main/1");
		}, "/api/main");
	}
}