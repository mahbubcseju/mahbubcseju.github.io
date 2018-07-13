<html>
<head>
	<style>
	table {
			    font-family: arial, sans-serif;
			    border-collapse: collapse;
			
			}

			td {
			    border: 2px solid #dddddd;
			    text-align: center;
		     
			}
			 th {
			    border: 2px solid #dddddd;
			    text-align: center;
			    
			}

			tr:nth-child(even) {
			    background-color: #dddddd;
			}
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
			.box {
			margin:auto;
		    border-radius: 5px;
		    background-color: #f2f2f2;
		    padding: 2%;
		    width: 40%;
		    position:relative;
		   }
		   .box1{
		   	margin:auto;
		    border-radius: 5px;
		    background-color: green;
		    padding: 2%;
		    width: 20%;
		    position:relative;

		   }
	</style>
</head>
<body>
	<h1>
		<center> BEST BID </center>
	</h1>
	<br>
	<div class="box">
              <?php

                    $id = $_GET['id'];
					
					$servername = "localhost";
					$username = "root";
					$password = "mahbub";
					$dbname = "bidding";

					$conn = new mysqli($servername, $username, $password, $dbname);

					if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
					}
					$sql = "SELECT * FROM adda WHERE id = '".$id."' ";
                     $query=mysqli_query($conn,$sql);
                      $row=mysqli_fetch_array($query);
                      echo '<center><img height="200" width="200" src="data:pic;base64,'.$row['pic'].' "><br><br></center>' ;
                      echo '<h3>Minimum cost : ' .$row['minprice'].'  BDT</h3>';
                      echo '<h3>Details of the product: </h3>';
                      echo '<center><div class="box1">' .$row['des']. '</dev></center>';
					$conn->close();
					
			  ?>


	</div>



</body>


</html>
