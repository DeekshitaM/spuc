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
          <?php
      			$servername = "localhost";
      			$username = "root";
      			$password = "";
      			$dbname = "nmamit";
      			$id = $_POST['id'];

      			//create connection
      			$conn = new mysqli($servername,$username,$password,$dbname);

      			//check connection
            echo "<h1>The Record for the id: $id</h1>";
      			if($conn->connect_error)
      			{
      				die("Connection Failed: " . $conn->connect_error);
      			}

      			
      			$sql1 = "SELECT * FROM student  where id = $id";
            $result = $conn->query($sql1);

      			if($result->num_rows > 0)
              {
                while ($row = $result->fetch_assoc())
                {
          ?>
          <center>
            <form action="updateinsert.php" method="post">
        <table border="2px">
          <tr><th>ID</th><td><input type="text" value="<?php echo "$row[id]";?>" name="id"></td></tr>
          <tr><th>NAME</th><td><input type="text" value="<?php echo "$row[name]";?>" name="na"></td></tr>
          <tr><th>USN</th><td><input type="text" value="<?php echo "$row[usn]";?>" name="usn"></td></tr>
          <tr><th>EMAIL ID</th><td><input type="text" value="<?php echo "$row[emailid]";?>" name="em"></td></tr>
  
          <?php
              }
            }
    		  ?>
          <tr>
            <td colspan="50" style="text-align: center;"><input type="submit" value="Update"></td>
          </tr>
        </table>
        </form>
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