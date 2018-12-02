<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Driver</title>

    <!-- Bootstrap core CSS-->
    <link href="../CSS/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../CSS/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../CSS/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../CSS/css/sb-admin.css" rel="stylesheet">

    
    
    
    
  </head>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript">
    function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    var time = today.toLocaleTimeString();
    var day = today.toLocaleDateString();
    
    document.getElementById('txt').innerHTML =
    day + "     " + time;
    setTimeout(startTime, 500);
    }

    </script>
    
    <body id="page-top" onload="startTime()">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="../View/LandingMainPage.php">TransitPorts</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
<!--        <div class="input-group">
          <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fas fa-search"></i>
            </button>
          </div>
        </div>-->
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
<!--        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-bell fa-fw"></i>
            <span class="badge badge-danger">9+</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown no-arrow mx-1">
          <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-envelope fa-fw"></i>
            <span class="badge badge-danger">7</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>-->
        <li >
            <div id="txt" class="navbar-brand mr-1"></div>
        </li>
        <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user fa-fw"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
                    </div>
                </li>
            </ul>

        </nav>

        <div id="wrapper">

            <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="../View/LandingMainPage.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../View/DriverMainPage.php">
            <i class="fas fa-fw fa-user-circle"></i>
            <span>Driver</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../View/BusMainPage.php">
            <i class="fas fa-fw fa-bus"></i>
            <span>Bus</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../View/RouteMainPage.php">
            <i class="fas fa-fw fa-road"></i>
            <span>Route</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../View/ScheduleMainPage.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Schedule</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../View/MonitorMainPage.php">
            <i class="fas fa-fw fa-check-square"></i>
            <span>Monitor</span>
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../View/NotificationMainPage.php">
            <i class="fas fa-fw fa-exclamation"></i>
            <span>Notification</span>
            
          </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="../View/ReportMainPage.php">
            <i class="fas fa-fw fa-address-book"></i>
            <span>Report</span>
          </a>
        </li>
        
<!--        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-fw fa-folder"></i>
            <span>Pages</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
            <h6 class="dropdown-header">Login Screens:</h6>
            <a class="dropdown-item" href="LandingMainPage.php">Login</a>
            <a class="dropdown-item" href="register.html">Register</a>
            <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
            <div class="dropdown-divider"></div>
            <h6 class="dropdown-header">Other Pages:</h6>
            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item active" href="blank.html">Blank Page</a>
          </div>
        </li>-->
<!--        <li class="nav-item">
          <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Charts</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tables.html">
            <i class="fas fa-fw fa-table"></i>
            <span>Tables</span></a>
        </li>-->
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="LandingMainPage.php">Dashboard</a>
            </li>
            <li class="breadcrumb-item">
                <a href="DriverMainPage.php">Driver</a>
            </li>
            <li class="breadcrumb-item active">View Driver</li>
          </ol>

          <!-- Page Content -->
          <h1>Driver Information</h1>
          <hr>          
          <?php
            require '../vendor/autoload.php';

            use Kreait\Firebase\Factory;
            use Kreait\Firebase\ServiceAccount;

// This assumes that you have placed the Firebase credentials in the same directory
        // as this PHP file.
        $serviceAccount = ServiceAccount::fromJsonFile('../secret/transitports-ee351-ff3793a676d7.json');

        $firebase = (new Factory)
                ->withServiceAccount($serviceAccount)
                ->withDatabaseUri('https://transitports-ee351.firebaseio.com')
                ->create();

        $database = $firebase->getDatabase();
        
        $reference = $database->getReferenceFromUrl("https://transitports-ee351.firebaseio.com/Driver");
        $snapshot = $reference->getSnapshot();
        $count = $snapshot->numChildren();
        
            if(isset($_POST['driverID'])){
                $id = trim($_POST['driverID']);
                if($_POST['driverID']===""){
                    echo 'No record found';
                    echo '<form method="post" action="../View/ViewDriver.php">';
                    echo '<button class="btn btn-primary" type="submit" name="btnBack">Back</button>';
                    echo '</form>';
                    
                }else{
                    $result = $database
                        ->getReference("Driver/".$id)
                        ->getValue();
                    ?>
          
                    <form method="post">
                    <table bgcolor="#C4C4C4" align="left" width="600" border="0">	  
                        <tr>		
                            <td>Driver ID</td>		
                            <td><input id="id" name="id" type="text" value="<?php echo $id;?>" /></td>	  
                        </tr>
                        <tr>		
                            <td>Driver name </td>		
                            <td><input id="name" type="text" name="name"  value="<?php echo $result['name'];?>"/></td>	  
                        </tr>	  
                        <tr>		
                            <td>Driver email </td>		
                            <td><input type="email" id="email" name="email" value="<?php echo $result['email'];?>"/></td>	  
                        </tr>	  
                        <tr>		
                            <td>Driver contact number</td>		
                            <td><input type="text" id="contactNo" name="contactNo" value="<?php echo $result['contactNo'];?>"/></td>	  
                        </tr>
                        <tr>		
                            <td>Date joined</td>		
                            <td><input type="text" id="dateJoined" name="date" value="<?php echo $result['dateJoined'];?>" /></td>	  
                        </tr>
                        <tr>		
                            <td>Driver status</td>		
                            <td><input name="status" id="status" type="text" value="<?php echo $result['status'];?>"/></td>	  
                        </tr>	
                        <tr>		
                            <td>Driver password</td>		
                            <td><input name="password" id="password" type="text" value="<?php echo $result['password'];?>"/></td>	  
                        </tr>
                    </table>

                    <button class="btn btn-primary" value="Update" name="update" >Update</button>
                    <button class="btn btn-primary" value="Delete" name="delete" >Delete</button>
                    </form>
                    <button class="btn btn-primary" type="submit" name="back" >Back</button>
          
<?php

                }
                
            
            
            }
?>
             <?php
             if(isset($_POST['update'])){
                  $id = $_REQUEST['id'];
                  $name = $_REQUEST['name'];
                  $email = $_REQUEST['email'];
                  $dateJoined = $_REQUEST['date'];
                  $contactNo = $_REQUEST['contactNo'];
                  $status = $_REQUEST['status'];
                  $password = $_REQUEST['password'];
                  
                  $database->getReference("Driver/".(string)$id)
                      ->set([
                          'name' =>$name,
                          'email'=>$email,
                          'dateJoined'=>$dateJoined,
                          'contactNo'=>$contactNo,
                          'password'=>$password,
                          'status'=>$status
                      ]);
                  echo '<form method="post" action="../View/ViewDriver.php">';
                echo 'Update driver complete!<br />';
                echo '<button class="btn btn-primary" type="submit" name="btnProceed">Proceed</button>';
                echo '</form>';
                  
            }
                  if(isset ($_POST['delete'])){
                      $id = $_REQUEST['id'];
                      
                      $statusCheck = $database->getReference("Driver/".$id."/status")
                              ->set("removed from system");
                      echo '<form method="post" action="../View/ViewDriver.php">';
                      echo 'Driver has been removed from the system!<br />';
                      echo '<button class="btn btn-primary" type="submit" name="btnProceed">Proceed</button>';
                      echo '</form>';
                      
                  }
                  
                  if(isset($_POST['back'])){
                       
                  }
                  
        
                  ?>
                  
              
          
          
          
        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © TransitPorts 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="LoginAdmin.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../CSS/vendor/jquery/jquery.min.js"></script>
    <script src="../CSS/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../CSS/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../CSS/js/sb-admin.min.js"></script>

  </body>

</html>

