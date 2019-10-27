<?php

if (isset($_POST)) {

	// Fetch data and insert it at the inputs
	function loadSessionVariables(){ ?>
    <script>

        document.addEventListener("DOMContentLoaded",function(){

            if (sessionStorage.getItem("form-data")) {

                const forms = document.querySelectorAll('form');
                const form = forms[0];

                let retrievedData = sessionStorage.getItem("form-data");
                retrievedData = JSON.parse(retrievedData);

                let index = 0;

                [...form.elements].forEach((input) => {

                    if ( input.type === "text") {

                        input.value  = retrievedData[index];
                        index++;

                    }

                });

                sessionStorage.clear();

            }

        });

    </script>


<?php }

	// check if data is valid
	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {

		echo("e-mail is not valid");

		// Something went wrong, load the user's data
		loadSessionVariables();

	} else {

        echo "Welcome " . $_POST["name"] . ", you e-mail is: " . $_POST["email"];

	}

}

?>

<form action="form.php" method="post">

	First name:<br>
	<input required type="text" name="name"><br>

	E-mail:<br>
	<input required type="text" name="email"><br><br>

	<input onClick="saveData()" type="submit" value="Submit">

</form>

<script>
    // fetch and save the values
    function saveData(){

        const forms = document.querySelectorAll('form');
        const form = forms[0];

        let array = [];

        [...form.elements].forEach((input) => {

            // save empty inputs in order to keep the insertion loop order
            if ( input.type === "text" )  array.push(input.value);

        });

        sessionStorage.setItem("form-data", JSON.stringify(array ));

    }
</script>


