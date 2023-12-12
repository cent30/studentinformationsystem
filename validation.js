function validate() {
	var valid = true;
	$(".info").html('');

	if (!$("#firstname").val()) {
		$("#firstname-info").html("required.");
		valid = false;
	}
	if (!$("#middlename").val()) {
		$("#middlename-info").html("required.");
		valid = false;
	}
	if (!$("#lastname").val()) {
		$("#lastname-info").html("required.");
		valid = false;
	}
	if (!$("#extensionname").val()) {
		$("#extensionname-info").html("required.");
		valid = false;
	}
	if (!$("#birthday").val()) {
		$("#birthday-info").html("required.");
		valid = false;
	}
	return valid;
}