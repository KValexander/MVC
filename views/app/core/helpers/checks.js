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