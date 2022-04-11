var pic_list = ["sun.jpg", "merucry.jpg", "venus.jpg", "earth.jpg", "mars.jpg"];
var index = 0;

function Prev()
{
	if(index == 0)
	{
		index = 4;
	}
	else
	{
		index = index - 1;
	}

	document.getElementById("image").src=pic_list[index];
}

function Next()
{
	if(index == 4)
	{
		index = 0;
	}
	else
	{
		index = index + 1;
	}

	document.getElementById("image").src=pic_list[index];
}
