<?php

// Getting the message from adddress
//if there is ?name=.. then $_GET["message"]
$my_message = $_GET["message"];
$my_to = $_GET["to"];
echo "To : ".$my_to;
echo('<br>');
echo " Message :".$my_message;
?>
<h2> First application </h2>

<form method="get">
<label for ="to">TO	</label> 
<input type="text" name ="to"><br><br>
	<label for ="message">Message *</label>
	<input type="text" name ="message"><br><br>
	<input type="submit" value ="Save to DB">



<form>
