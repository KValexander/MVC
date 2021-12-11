// Object with file connection methods
let connect = {
	xhr: new XMLHttpRequest(),
	// Connecting scripts
	script: function(array) {
		if(Array.isArray(array))
			array.forEach(path => connect.create(path, "script"))
		else connect.create(array, "script")
	},
	// Generating the connection code
	create: function(path, type) {
		if(!connect.check(path)) return;
		// Checking if a script exists
		if(document.getElementById(path)) return;
		element = document.createElement(type);
		element.type = (type == "script") ? "text/javascript" : "";
		element.id = path;
		element.src = path;
		document.querySelector("head").appendChild(element);
	},
	// Checking for file existence
	check: function(path) {
		connect.xhr.open("GET", path, false);
		connect.xhr.send();
		return connect.xhr.status == 200;
		// return !connect.xhr.responseText.includes("<!DOCTYPE html>");
	}
}