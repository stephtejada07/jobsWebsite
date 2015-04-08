$.validator.addMethod("alphanumeric", function(value, element) {
	return this.optional(element) || /^\w+$/i.test(value);
}, "Letters, numbers, and underscores only please");


$.validator.addMethod("letterswithpunc", function(value, element) {
	return this.optional(element) || /^[a-z\-.,()'"\/\s]+$/i.test(value);
}, "Letters or punctuation only please");


$.validator.addMethod("username", function(value, element) {
	return this.optional(element) || /^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/.test(value);
}, "Letters, numbers, and underscores only please");

^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$