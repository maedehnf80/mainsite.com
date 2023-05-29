<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "fooroushgah");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
      $name = $_POST['name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phonenumber = $_POST['phonenumber'];
      $city = $_POST['city'];

		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO user VALUES ('$first_name',
			'$last_name','$name','$password','$email','$phonenumber','$city')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Please browse your localhost php my admin"
				. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n $last_name\n ");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>
