<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Dee Web Application Development</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Start your project here-->  
 <div class="container">
   <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <?php include('menu.php');?>
     </div>
   </div>
 
 	   <div class="row" style="padding-top: 100px;">
     <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
      <center>
        <?php
			$servername="localhost";
			$username="root";
			$password="";
			$dbname="nmamit";
			$id = $_POST['id'];
			$name = $_POST['name'];
			$usn = $_POST['usn'];
			$email = $_POST['emailid'];

			//create connection
			$conn=new mysqli($servername,$username,$password,$dbname);

			//check connection
			if($conn->connect_error)
			{
				die("Connection Failed:" . $conn->connect_error);
			}

			// create database
			$sql="INSERT INTO student (id,name,usn,emailid) VALUES ('$id','$name','$usn','$email')";
			if($conn->query($sql) === TRUE)
			{
				//$last_id = $conn->id;
				echo "<h2>New Record Created Successfully.</h2>";
		?>
			<table border="2px">
			<tr>
				<th>ID</th>
				<th>NAME</th>
				<th>USN</th>
				<th>EMAIL ID</th>
			</tr>
			<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "nmamit";

				//create connection
				$conn = new mysqli($servername,$username,$password,$dbname);

				//check connection
				if($conn->connect_error)
				{
					die("Connection Failed: " . $conn->connect_error);
				}

				// select from table
				$sql = "SELECT * FROM student";
				$result = $conn->query($sql);

				if($result->num_rows > 0)
				{
					while ($row = $result->fetch_assoc())
					{
			?>
			<tr>
				<td><?php echo "$row[id]";?></td>
				<td><?php echo "$row[name]";?></td>
				<td><?php echo "$row[usn]";?></td>
				<td><?php echo "$row[emailid]";?></td>
			</tr>
			<?php
					}
				}
				else
				{
				   echo "0 Results";
				}
			?>
		</table>
		<?php
			}
			else
			{
			   echo "Error: " . $sql . "<br>" . $conn->error;
			}
			?>
        </center>
     </div>
   </div>

  
    <div class="row" style="padding-top: 100px;">
      <div  class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <?php include('footer.php');?>
      </div>
    </div>
  </div>
</div> 
   </div>
 </div>
  </div>
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>