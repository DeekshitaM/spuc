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
        <form action="insertintodb.php" method="post" >
          <table border="2px">
            <tr>
              <th>Enter ID:</th>
              <td><input type="text" name="id"></td>
            </tr>
            <tr>
              <th>Enter NAME:</th>
              <td><input type="text" name="name"></td>
            </tr>
            <tr>
              <th>Enter USN:</th>
              <td><input type="text" name="usn"></td>
            </tr>
            <tr>
              <th>Enter EMAIL_ID:</th>
              <td><input type="text" name="emailid"></td>
            </tr>
            <tr>
              <td colspan="50"><input type="submit" value="Insert Data">
              &nbsp&nbsp&nbsp&nbsp<input type="reset" value="Reset"></td>
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