
<html>
<head>
  <style>
  style>
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
			div {
			margin:auto;
		    border-radius: 5px;
		    background-color: #f2f2f2;
		    padding: 5%;
		    height:40%;
		    width: 80%;
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

		  	    <?php

		  	       $servername = "localhost";
					$username = "root";
					$password = "mahbub";
					$dbname = "bidding";


					$conn = new mysqli($servername, $username, $password, $dbname);

					if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
					}
                     $sql = "SELECT * FROM adda";
                     $query=mysqli_query($conn,$sql);
                    
                    echo '<table width="100%"';
					 echo  '<tr><th>ITEM</th><th>CATEGORY</th><th>MINPRICE</th><th>Picture</th><th>Details</tr>';
                     while($row=mysqli_fetch_array($query))
                     {
                            echo '<tr><td>' .$row['item']. '</td><td>' .$row['category']. '</td><td>' .$row['minprice']. '</td><td><img height="30" width="30"  
                                   src="data:pic;base64,'.$row['pic'].' "></td><td>' ;
                            echo  "<a href=details.php?id=".$row['id'].">details</a></td></tr>";
                     }
                     echo "</table>";
                     



					mysqli_close();

		  	    ?>
		  </center>

		  <a href="login.html"> back </a>
      </div>
  
  </body>


</html>

