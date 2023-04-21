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

		
        $products1 = $_REQUEST['products'];
        $txtprice1 = $_REQUEST['txtprice'];
        $txtquan1 = $_REQUEST['txtquan'];
        $txtamt1 = $_REQUEST['txtamt'];
        $cardname1 = $_REQUEST['cardname'];
        $txtcard1 = $_REQUEST['txtcard'];
        $txtcust_name1 = $_REQUEST['txtcust_name'];
        $txtaddress1 = $_REQUEST['txtaddress'];
        $txtcontact1 = $_REQUEST['txtcontact'];
        $txtorder1 = $_REQUEST['txtorder'];
        $txtdeliver1 = $_REQUEST['txtdeliver'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO cart VALUES ('$products1','$txtprice1','$txtquan1','$txtamt1','$cardname1', '$txtcard1','$txtcust_name1','$txtaddress1','$txtcontact1','$txtorder1','$txtdeliver1')";
		
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
