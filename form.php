<?php

if (isset($_POST)) {

	// Fetch data -

	// check if data is valid
	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {

		echo("e-mail is not valid");

		// Something went wrong, load the user's data

	} else {

        echo "Welcome " . $_POST["name"] . ", you e-mail is: " . $_POST["email"];

	}

}

?>

<form action="form.php" method="post">

	First name:<br>
	<input type="text" name="name"><br>

	E-mail:<br>
	<input type="email" name="email"><br><br>

	<input type="submit" value="Submit">

</form>


