<?php

// Getting the message from adddress
//if there is ?name=.. then $_GET["message"]
$my_message = $_GET["message"];
$my_to = $_GET["to"];
$my_from = $_GET["from"];
echo "To : ".$my_to;
echo('<br>');
echo "From : ".$my_from;
echo('<br>');
echo " Message :".$my_message;
?>
<h2> First application </h2>

<form method="get">
<label for ="from">From	</label> 
<input type="text" name ="from"><br><br>

<label for ="to">TO	</label> 
<input type="text" name ="to"><br><br>

	<label for ="message">Message *</label>
	<input type="text" name ="message"><br><br>
	
	<input type="submit" value ="Save to DB">



<form>
