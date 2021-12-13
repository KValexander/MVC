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
		array = ["This text", "consists of", "three blocks"];
		app.template.get_template("content", array.length);
		for(let i = 0; i < array.length; i++) {
			app.template.set_value("CONTENT", `<h2>${array[i]}</h2><br>`);
			app.template.get_content();
		}
		html = app.template.get_content();

		app.html.content.innerHTML = `
			<h1 class="head">Side page (${app.route.var.page})</h1>
			${html}
		`;
	},
}