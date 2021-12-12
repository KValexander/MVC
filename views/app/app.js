// Root directory
const root = "views/app/";
window.onload = () => {
	app.html = document.getElementById("app");
	app.route.current_url();
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

