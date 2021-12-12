// Template engine object
app.template = {
	values: {},
	html: "",
	// Getting a template
	get_template: function(template=null) {
		if(template == null || template == "")
			return app.template.html = "<h1>Template not set</h1>";

		if(response = app.request.get_page(`${root}templates/${template}.tpl`))
			app.template.html = response;
		else app.template.html = "<h1>Template not found</h1>";
	},
	// Retrieving values for a template
	set_value: function(key, val) {
		key = `{${key}}`;
		app.template.values[key] = val;
	},
	// Parsing a template
	parse_template: function() {
		for (let key in app.template.values)
			if (app.template.html.includes(key))
				app.template.html = app.template.html.replace(key, app.template.values[key]);
		app.template.html = app.template.html.replace(/\{.*?\}/g, '');
	},
	// Retrieving processed template data
	get_content: function() {
		app.template.parse_template();
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