<?php
session_start();
if(!isset($_SESSION['user'])){
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
  <?php include 'links.php' ?>
 </head>
 <body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Admin Page</a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
       <a href="logout.php" class="btn btn-primary">Logout</a>

      <li class="nav-item">
        </nav>
<div class="card shadow mb-4">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-center text-primary">User Details</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
            <?php
            	$con=mysqli_connect("localhost","root","","eventmanagement"); 
                if(!$con) { die(" Connection Error "); } 
                $query = "SELECT * FROM userinfodata";
                $query_run = mysqli_query($con, $query);
            ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th> ID </th>
                            <th> Username </th>
                            <th>Email </th>
                            <th>Event Type</th>
                            <th>Additional Information</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if(mysqli_num_rows($query_run) > 0)        
                        {
                            while($row = mysqli_fetch_assoc($query_run))
                            {
                        ?>
                            <tr>
                                <td><?php  echo $row['id']; ?></td>
                                <td><?php  echo $row['username']; ?></td>
                                <td><?php  echo $row['email']; ?></td>
                                <td><?php  echo $row['etype']; ?></td>
                                <td><?php  echo $row['comment']; ?></td>
                            </tr>
                        <?php
                            } 
                        }
                        else {
                            echo "No Record Found";
                        }
                        ?>
                    </tbody>
                </table>

            
            </div>
         
        </div>
        
    </div>
</body>
</html>