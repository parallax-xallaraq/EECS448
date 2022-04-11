function Validate()
{
	var pass_1 = document.getElementById("pass1").value;
	var pass_2 = document.getElementById("pass2").value;

	var pass_1_len = pass_1.length;
	var pass_2_len = pass_2.length;

	if(pass_1_len < 8)
	{
		alert("First password is less than 8 characters long.");
	}
	else if(pass_2_len < 8)
	{
		alert("Second password is less than 8 characters long.");
	}
	else if(pass_1 != pass_2)
	{
		alert("Passwords do not match.");
	}
	else
	{
		alert("Valid password.");
	}
}
