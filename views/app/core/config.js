// Configuration settings
app.config = {
	title: "Document", // Name of the site
	logo: "https://cdn.pixabay.com/photo/2018/03/27/15/05/logo-3266214_1280.png", // Path to the site logo
	// Site menu
	menu: {
		// List of menu items
		list: {
			"main": ["Home", "/"],
			"side": ["Side page", "/page"],
		},
		// Processing an item from a list into a link
		use: function(key, delimiter=null) {
			if(link = app.config.menu.list[key]) {
				link = `<a onclick="app.route.search('${link[1]}')">${link[0]}</a>`;
				if(delimiter != null) link += delimiter;
				return link;
			} return null;
		},
		// Issuing a menu
		get: function() {
			html = app.config.menu.use("main", "|");
			html += app.config.menu.use("side");
			return html;
		},
	},
	// Displaying the main site template
	layout: function() {
		// Assigning a title to the page
		document.title = app.config.title;

		// Getting a header
		app.template.get_template("layout/header");
		app.template.set_value("SRC", app.config.logo);
		app.template.set_value("TITLE", app.config.title);
		app.template.set_value("LINKS", app.config.menu.get());
		header = app.template.get_content();

		// Getting a layout
		app.template.get_template("layout/layout");
		app.template.set_value("HEADER", header);

		// Main template output
		app.html.app.innerHTML = app.template.get_content();

		// Element containing content
		app.html.content = document.getElementById("content");
	},
}