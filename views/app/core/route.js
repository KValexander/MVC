// Displaying the current page if the page is loaded
app.route.current_url = () => {
	app.config.layout();
	app.route.search(location.pathname)
};

// Method for changing page url
app.route.change_url = (url) => window.history.pushState(null, null, url);

// Route controller call method
app.route.call = (params) => eval(`app.controllers.${params[0]}.${params[1]}()`);

// Search method for the desired route
app.route.search = (route) => {
	route = slash_check(route);
	app.route.change_url(route);
	if(result = app.route.routes[route]) {
		app.route.call(result.split("@"));
	} else app.route.not_found();
}

// Displaying a message if there is no route
app.route.not_found = () => {
	app.template.get_template("error");
	app.template.set_value({
		"ERROR": "Error 404",
		"MESSAGE": "Page not found"
	});
	app.html.content.innerHTML = app.template.get_content();
}

window.addEventListener("popstate", e => app.route.current_url());