// Root directory
const root = "views/app/";
window.onload = () => {
	app.html = document.getElementById("app");
	app.route.current_url();
}
// Checking received pages
function xhr_check(html) {
	if(html.includes("<!DOCTYPE html>")) return false;
	else return true;
}
// Checking for trailing slash
function slash_check(str) {
	let length = str.length, last;
	if(length <= 1) return str;
	last = str.substring(length - 1);
	if(last == "/")
		return str.substring(0, length - 1)
	else return str;
}

// Including core scripts
connect.script([
	`${root}routes.js`,
	`${root}core/template.js`,
	`${root}core/request.js`,
	`${root}core/route.js`,
]);

// Application object
let app = {
	// Controller scripts
	controllers: {},
	// Route object
	route: {
		// Routes object
		routes: {},
		// Method for adding routes
		add_route: (route, controller) => {
			route = slash_check(route);
			app.route.routes[route] = controller;
			connect.script(`${root}controllers/${controller.split("@")[0]}.js`);
		},
	}
};

