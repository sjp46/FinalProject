<html>
<body>

Welcome 

<?php 
	if (isset($_POST["fname"])){
		echo $_POST["fname"];
	}
	else {
		echo "(you didn't provide a name)";
	}
	
		
?><br>
Your email address is: <?php
	echo $_POST["email"];
	echo filter_input(INPUT_GET, 'email');
	?>

</body>
</html>
