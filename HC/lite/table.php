<?php
// $db_host = 'localhost'; // Server Name
// $db_user = 'root'; // Username
// $db_pass = ''; // Password
// $db_name = 'cbhsms_db'; // Database Name

// $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
// if (!$conn) {
//     die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
// }

// $sql = 'SELECT * 
//         FROM tb_diseases';
        
// $query = mysqli_query($conn, $sql);

// if (!$query) {
//     die ('SQL Error: ' . mysqli_error($conn));
// }

    include('db.php');
 ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <?php 

        if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['submit'])) { //user registering

        require 'add.php';
        
    }
    
    
}
     ?>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>CBHSMS</title>
    <!-- Bootstrap Core CSS -->
    <link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="css/colors/blue.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

    
</head>

<body class="fix-header fix-sidebar card-no-border">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                           
                            <!-- Light Logo icon -->
                            <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         
                         <!-- Light Logo text -->    
                        <!--  <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /> --></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tala Health Center</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
               <nav class="sidebar-nav">
                   <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="dashboard.php" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="profile.php" aria-expanded="false"><i class="mdi mdi-account-check"></i><span class="hide-menu">Profile</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="table.php" aria-expanded="false"><i class="mdi mdi-table"></i><span class="hide-menu\\">Diseases Data</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="chart.php" aria-expanded="false"><i class="mdi mdi-chart-bar"></i><span class="hide-menu">Data Graphs</span></a>
                        </li>
                        <li> <a class="waves-effect waves-dark" href="map-google.html" aria-expanded="false"><i class="mdi mdi-earth"></i><span class="hide-menu">Diseases Mapping</span></a>
                        </li>
                      
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Table</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Table</li>
                        </ol>
                    </div>
                  
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title"><i class="mdi mdi-grease-pencil"></i> Diseases Table</h4>

                                <!-- Add new Diseases -->
                                 

                        
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Sick ID</th>
                                                <th>Disease Name</th>
                                                <th>Description</th>
                                                <th>Cause</th>
                                                <th>Effect</th>
                                                <th>Countermeasures</th>
                                                <th colspan="2">Option</th>
                                            </tr>
                                        </thead>
                        <form method="GET" action="delete.php">
                            <?php
 

                            $result = "SELECT * FROM cbhsms_db.tb_diseases";
                            $run = mysql_query($result);
                            while($row = mysql_fetch_assoc($run)){
                                $sick_id = $row['sick_id'];
                                $sick_name = $row['sick_name'];
                                $sick_description = $row['sick_description'];
                                $sick_cause = $row['sick_cause'];
                                $sick_effect = $row['sick_effect'];
                                $sick_countermeasures = $row['sick_countermeasures'];
                                
                            ?>

                                <tr>
                                    <td><?php echo $sick_id;?></td>
                                    <td><?php echo $sick_name;?></td>
                                    <td><?php echo $sick_description;?></td>
                                    <td><?php echo $sick_cause;?></td>
                                    <td><?php echo $sick_effect;?></td>
                                    <td><?php echo $sick_countermeasures;?></td>
                                    
                                    <td><a href="delete.php?cat=<?php echo $sick_id;?>" onclick="return confirm('Delete This?');">DELETE</a></td>
                                    <td><a href="editform.php?dog=<?php echo $sick_id;?>">EDIT</a></td>
                                </tr>
                                <?php }?>










                    
            
                                    </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

            <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title"><i class="mdi mdi-grease-pencil"></i>Add Diseases</h4>

                                <!-- Add new Diseases -->
                                 

                        
                                <div class="table-responsive">
                                    <table class="table">
                                        <div id="signup">   
          
          
          <form action="table.php" method="post" autocomplete="off">
          

          <div class="container">
           
          <div class="form-group">
              <div class="field-wrap">
              <label>
                Disease Name<span class="req" style="color: red;">*</span>
              </label>
              <input type="text" required autocomplete="off" name='sick_name' class="form-control" placeholder="Enter Disease Name" />
            </div>
          </div>
 
           <div class="form-group">
               
               <div class="field-wrap">
              <label>
                Description<span class="req" style="color: red;">*</span>
              </label>
              <input type="text"required autocomplete="off" name='sick_description' class="form-control" placeholder="Enter Description" />
            </div>
          </div>

            <div class="form-group">
               
               <div class="field-wrap">
            <label>
              Cause<span class="req" style="color: red;">*</span>
            </label>
            <input type="text"required autocomplete="off" name='sick_cause' class="form-control" placeholder="Enter Cause" />
          </div>
          </div>
                
            

          <div class="form-group">
              
            <div class="field-wrap">
            <label>
              Effect<span class="req" style="color: red;">*</span>
            </label>
            <input type="text"required autocomplete="off" name='sick_effect' class="form-control" placeholder="Enter Effect" />
          </div>

          </div>
          

          <div class="form-group">
          
          <div class="field-wrap">
            <label>
              Counter Measure<span class="req" style="color: red;">*</span>
            </label>
            <input type="text"required autocomplete="off" name='sick_countermeasures' class="form-control" placeholder="Enter Counter Measure" />
          </div>
              

          </div>
          

          <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success" name="save" />Save</button>
          
      </div>
    </div>
          
          
          </form>



          </div>

          

          <?php 

          if(isset($_POST['save']))
{
 // variables for input data
 $sick_name = $_POST['sick_name'];
 $sick_description = $_POST['sick_description'];
 $sick_cause = $_POST['sick_cause'];
 $sick_effect = $_POST['sick_effect'];
 $sick_countermeasures = $_POST['sick_countermeasures'];
 // variables for input data
 
 // sql query for inserting data into database
 
        $sql_query = "INSERT INTO tb_diseases(sick_name,sick_description,sick_cause,sick_effect,sick_countermeasures) VALUES('$sick_name','$sick_description','$sick_cause','$sick_effect','$sick_countermeasures')";
 mysql_query($sql_query);




}


           ?>

        </div>  
        
      </div><!-- tab-content -->          
                                    </table>
                                
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>

      

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
                © 2017
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/plugins/bootstrap/js/tether.min.js"></script>
    <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../assets/plugins/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>
