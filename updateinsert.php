<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Delete a Record</title>
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
    			$servername = "localhost";
    			$username = "root";
    			$password = "";
    			$dbname = "nmamit";
    			$id = $_POST['id'];

          $id = $_POST['id'];
          $un = $_POST['na'];
          $usn = $_POST['usn'];
          $uem = $_POST['em'];

    			//create connection
    			$conn = new mysqli($servername,$username,$password,$dbname);

    			//check connection
    			if($conn->connect_error)
    			{
    				die("Connection Failed: " . $conn->connect_error);
    			}

    			// sql to update a record
    			$sql = "UPDATE student SET name='$un', usn='$usn', emailid='$uem' WHERE id = $id";

    			if($conn->query($sql) === TRUE)
    			{
    				echo "Record Updated Successfully.";
    				header('Location:update.php');//php redirect
    			}
    			else
    			{
    			   echo "Error while updating a record" . $conn->error;
    			}
    			$conn->close();
		?>
        </center>
     </div>
   </div>

  
    <div class="row" style="padding-top: 60px;">
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