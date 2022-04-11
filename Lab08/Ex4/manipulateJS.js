function Update()
{
	var border_red = document.getElementById("borderRed").value;
	var border_green = document.getElementById("borderGreen").value;
	var border_blue = document.getElementById("borderBlue").value;

	var border_width = document.getElementById("borderWidth").value;

	var back_red = document.getElementById("backRed").value;
	var back_green = document.getElementById("backGreen").value;
	var back_blue = document.getElementById("backBlue").value;

	var test = document.getElementById("ex");

	test.style.borderStyle = "solid";

	test.style.borderColor = rgb(border_red, border_green, border_blue);
	test.style.borderWidth = borderWidth(border_width);

	test.style.backgroundColor = rgb(back_red, back_green, back_blue);
}

function rgb(r, g, b)
{
  	return "rgb("+r+","+g+","+b+")";
}

function borderWidth(b)
{
	return ""+b+"px"
}
