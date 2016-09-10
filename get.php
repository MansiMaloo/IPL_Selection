<?php

$team=$_REQUEST["q"];

if($team=="Mumbai Indians")
{
	echo"<select name='player' onchange='dis1()'>
			<option value=''>SELECT</option>
			<option value='Lasith Malinga'>Lasith Malinga</option>
			<option value='Rohit Sharma'>Rohit Sharma</option>
			<option value='Kieron Pollard'>Kieron Pollard</option>
		</select><br>";
}
else if($team=="Kolkata Knight Riders")
{
	echo"<select name='player' onchange='dis1()'>
			<option value=''>SELECT</option>
			<option value='Gautam Gambhir'>Gautam Gambhir</option>
			<option value='Yusuf Pathan'>Yusuf Pathan</option>
			<option value='John Hastings'>John Hastings</option>
		</select><br>";
}
else if($team=="Delhi Daredevils")
echo "<select name='player' onchange='dis1()'>
			<option value=''>SELECT</option>
			<option value='Zaheer Khan'>Zaheer Khan</option>
			<option value='Jp Duminy'>Jp Duminy</option>
			<option value='Chris Morris'>Chris Morris</option>
		</select><br>";


?>