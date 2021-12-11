// Displaying the current page if the page is loaded
app.route.current_url = function() {
	app.route.search(location.pathname);
}
// Method for changing page url
app.route.change_url = function(url) {
	window.history.pushState(null, null, url);
}
// Route controller call method
app.route.call = (params) => {
	eval(`app.controllers.${params[0]}.${params[1]}()`);
}
// Search method for the desired route
app.route.search = (route) => {
	console.log(route);
	if(result = app.route.routes[route]) {
		app.route.change_url(route);
		app.route.call(result.split("@"));
	}
}

window.addEventListener("popstate", e => app.route.current_url());