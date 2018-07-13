
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
    padding: 1%;
  /*  height:40%;*/
    width:40%;
    position:relative;
     }
     input[type=text]{
     	display: block;
     }
     .cl input[type="text"]{
        display:block;
        background-color:red: 
     	width:40px;
     	height:40px;
     }
   </style>
</head>
  <body>
	  <h1>
	                  <center> BEST BID </center>
	  </h1>
	  <br>
      <div>
		 
		  <form action="" method = "post" enctype="multipart/form-data">  <!/*multipart na dile image kaj korbe na */
		        	<br>
		        	 <center> 
			        Item name:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp
		             <input type="text" name="item" value ="" /> <br>&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp
		             &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
		             Picture:
		             <input type="file" name="image" value ="" /> <br><br>

		             Category:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp
		             
		             <input type="text" name="category" value=""/> <br>
		             
		             Item Description :&nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp<br>
		             <textarea  cols="20" rows="10" name="des" value =""></textarea><br><br>
		               
		             Minimum Bid:&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp
		           
		             <input type="text" name="minprice" value=""/> <br>

		             <input type="submit" value="Submit " name="submit"/><br />
		              </center>
		          </form>


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
					$image=addslashes($_FILES['image']['tmp_name']);
					$image =file_get_contents($image);
					$image= base64_encode($image);

					$sql = "INSERT INTO adda (item,pic, category, minprice,des)
					VALUES ('".$_POST["item"]."','".$image."','".$_POST["category"]."','".$_POST["minprice"]."','".$_POST["des"]."')";
					
					if ($conn->query($sql) === TRUE) {
					echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
					}  else {	
					
					echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
					}

					$conn->close();
					}	


			  ?>
			
 
		  

		  
      </div>
  
  </body>


</html>

