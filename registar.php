<html>
<head>
	<style>
	body{

		background-color:blue;
		background-image: url("images1.jpg");

	}

	h1{
		margin-top:10%;
		position:relative;
		background-color:white;
		height:5%;
		width:15%;
		margin:auto;
		
	}
	div {
		margin:auto;
		border-radius: 5px;
		background-color: #f2f2f2;
		padding: 20px;
		height:40%;
		width:40%;
		position:relative;


	}
	</style>
</head>
<body>
	<h1>
		<center> BEST BID </center>
	</h1>
	<br>
	<br>
	<div>
		<center>
			<form action="" method="post"><br><br>

				              Your name:&nbsp &nbsp &nbsp &nbsp
				             <input type="text" name="name" value="mahbub" /> <br><br>

				              Password:&nbsp &nbsp &nbsp &nbsp &nbsp
				             <input type="text" name="pass" value="*******"/> <br><br>

				              Email Address:

				              <input type="email" name="email" value="mahbubcseju@gmail.com"/> <br><br>

				               Phone Number:&nbsp 

				               <input type="text" name="phone" value="+880**********"/> <br><br>
				               <input type="submit" value="Submit " name="submit"/><br />

              <?php
					if(isset($_POST["submit"]))
					{
					$servername = "localhost";
					$username = "root";
					$password = "mahbub";
					$dbname = "bidding";


					$conn = new mysqli($servername, $username, $password, $dbname);

					if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
					}

					$sql = "INSERT INTO login (name, pass, email,phone)
					VALUES ('".$_POST["name"]."','".$_POST["pass"]."','".$_POST["email"]."','".$_POST["phone"]."')";
					

					if ($conn->query($sql) === TRUE) {
					echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
					}  else {	
					
					echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
					}

					$conn->close();
					}	
			  ?>
			</form>
		</center>

	</div>



</body>


</html>
