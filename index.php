<?php
require_once('db.php');
?>

<html>
<head>
	<link href="style.css" rel="stylesheet" type="text/css"/> 
<script type="text/javascript">
function dis(str)
{
	var xmlhttp;    

	if (window.XMLHttpRequest)
	  	xmlhttp=new XMLHttpRequest();
	else
  		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  	xmlhttp.onreadystatechange=function()
  	{
  		if (xmlhttp.readyState==4 && xmlhttp.status==200 )
    		document.getElementById("member").innerHTML=xmlhttp.responseText;
	}
	xmlhttp.open("GET","get.php?q="+str,true);
	xmlhttp.send();
	document.getElementById("mem1").style.display="block";
}

function dis1()
{
	document.getElementById("mem2").style.display="block";
	document.getElementById("mem3").style.display="block";
	document.getElementById("mem4").style.display="block";
}
</script>
</head>
<body>
	
		<?php
	if(empty($_POST["Submit"]))
	{
		echo"<form method='post' action='index.php'>
		<h2 align='center' style='color:red'><br><br>INDIAN PREMIER LEAGUE<br><br><br></h2>
		<table align='center'>
		<tr><td>
	<label for='iplteam'>Which is your favorite ipl team : </label></td>
	<td><select name='sel1' onchange='dis(this.value)'>
		<option value=''>SELECT</option>
		<option value='Mumbai Indians'>Mumbai Indians</option>
		<option value='Kolkata Knight Riders'>Kolkata Knight Riders</option>
		<option value='Delhi Daredevils'>Delhi Daredevils</option>
	</select></td></tr>
	
	<tr>
		
		<td><br><br><label for='teammember' id=mem1 style='display:none'>Select your favorite player :</label></td>
		<td><br><br>
		<div id=member ></div>
		</td>
	</tr>

	<tr><td><br><br><label for='mail' id=mem2 style='display:none'>Enter your mail id :</label></td>
		<td><br><br><input type='email' name='mail' id=mem3 style='display:none' required unique></td></tr>
		<tr><td colspan='2' align='center'><br><br><input type='submit' value='Submit' name='Submit' id=mem4 style='display:none'><br><br></td></tr>
		</table>
		</form>";
    }else
    {
    	$team=mysql_real_escape_string($_POST["sel1"]);
    	$player=mysql_real_escape_string($_POST["player"]);
    	$mail=mysql_real_escape_string($_POST["mail"]);
    	
    	$query="select * from ipl";
    	$result = mysqli_query($con,$query);
    	while($row = mysqli_fetch_array($result))
    	{
        	if($row[3] == $mail)
        	{
	      		echo "<script>window.alert('Email " . $mail . " already suggested his views!!!');window.location = 'index.php';</script>";

	      		exit();
	   		 }

 		}
    	$query="insert into ipl(TeamName,player,user)values ('$team','$player','$mail')";
    	$result = mysqli_query($con,$query);
		if(!$result)
			echo "Error : " . mysqli_error($con);
		else
		{
			echo "<br><br><h3 align='center' style='color:yellow'>SUMMARY<br><br>TEAM NAME= $team<br><br>PLAYER NAME=$player<br><br>MAIL ID=$mail<br><br> <h3> ";
			echo "<h2 align='center' style='color:red'>CONGRATZZ!!!<br><br>You have chosen $team 's $player by $mail.<br></h2>";
			echo"<h4 align='center'><a style='color:#fff;'href='index.php'>Choose Team Again</a></h4>";
		}



}
?>
</body>
</html>