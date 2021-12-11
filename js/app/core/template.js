// Template engine object
app.template = {
	values: {},
	html: "",
	// Getting a template
	get_template: function(template=null) {
		if(template == null || template == "")
			return app.template.html = "Template not set";

		if(response = app.request.get_page(`${root}templates/${template}.tpl`))
			app.template.html = response;
		else app.template.html = "Template not found";
	},
	// Retrieving values for a template
	set_value: function(key, val) {
		key = `{${key}}`;
		app.template.values[key] = val;
	},
	// Parsing a template
	parse: function() {
		for (let key in app.template.values)
			app.template.html = app.template.html.replace(key, app.template.values[key])
	},
	// Retrieving processed template data
	receive: function() {
		app.template.parse();
		html = app.template.html;
		app.template.clear();
		return html;
	},
	//Clearing template data
	clear: function() {
		app.template.html = "";
		app.template.values = {};
	} 
}