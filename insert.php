<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "parvatcooldb");
	
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}

		
		// Taking all 5 values from the form data(input)
		$fullname = $_REQUEST['txtfullname'];
		$contactname= $_REQUEST['txtphone'];
		$email = $_REQUEST['txtemail'];
		$address= $_REQUEST['txtaddress'];
	
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO contact_us VALUES ('$fullname','$contactname','$email','$address')";
		
		if(mysqli_query($conn, $sql)){
	          echo "<body bgcolor='black' style='display: flex;font-family:arial black;
			  justify-content: center;
			  align-items: center;
			  text-align: center;min-height: 90vh;'><h1 style='color:cyan;border: 5px dashed white;	padding:30px;
			  '>FORM   SUBMITTED  SUCCESSFULLY</h1></body>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
	






		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
