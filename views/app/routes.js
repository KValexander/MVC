// Routes
app.route.add_route("/", "main@main_page");
app.route.add_route("/{page}", "main@side_page");