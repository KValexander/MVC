// Request object
app.request = {
	xhr: new XMLHttpRequest(),
	// Method of getting the desired page
	get_page: function(path) {
		app.request.xhr.open("GET", path, false);
		app.request.xhr.send();
		if(!app.request.xhr.responseText.includes("<!DOCTYPE html>"))
			return app.request.xhr.responseText;
		else return false;
	}
}