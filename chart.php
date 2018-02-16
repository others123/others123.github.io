<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'cbhsms_db'; // Database Name

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die ('Failed to connect to MySQL: ' . mysqli_connect_error());  
}


$chart = "SELECT disease_name, sum(number_of_victim) FROM tb_bagongsilang group by disease_name";
$res = $conn->query($chart);


$chart = "SELECT disease_name, sum(number_of_victims) FROM tb_camarin group by disease_name";
$camarin = $conn->query($chart);    

$chart = "SELECT disease_name, sum(number_of_victim) FROM tb_congress group by disease_name";
$congress = $conn->query($chart); 

$chart = "SELECT disease_name, sum(number_of_victim) FROM tb_malaria group by disease_name";
$malaria = $conn->query($chart);

$chart = "SELECT disease_name, sum(number_of_victim) FROM tb_tala group by disease_name";
$tala = $conn->query($chart); 

?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
        <title>About</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="icon" type="image/png" href="favicon.ico">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/bootsnav.css">
        <!-- my CSS -->
        <link rel="stylesheet" href="assets/css/myStyle.css">
        <!-- Theme custom css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="w3.css">
        <!-- Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['disease_name', 'number_of_victims'],


            <?php 

          while ($row=$res->fetch_assoc()) {
              echo "['".$row['disease_name']."',".$row['sum(number_of_victim)']."],";
          }

           ?>

          
        ]);

        var options = {
          chart: {
            title: 'Bagong Silang',
            subtitle: 'Year 2017'
           
          },

           bar: {groupWidth: "40%"},

          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_material'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['disease_name', 'number_of_victims'],


            <?php 

          while ($row=$res->fetch_assoc()) {
              echo "['".$row['disease_name']."',".$row['sum(number_of_victim)']."],";
          }

           ?>

          
        ]);

        
       
      }
    </script>

<!-- CAMARIN -->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['disease_name', 'number_of_victims'],


            <?php 

          while ($row=$camarin->fetch_assoc()) {
              echo "['".$row['disease_name']."',".$row['sum(number_of_victims)']."],";
          }

           ?>

          
        ]);

        var options = {
          chart: {
            title: 'Camarin',
            subtitle: 'Year 2017'
           
          },



          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_camarin'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>



    
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['disease_name', 'number_of_victims'],


            <?php 

          while ($row=$camarin->fetch_assoc()) {
              echo "['".$row['disease_name']."',".$row['sum(number_of_victims)']."],";
          }

           ?>

          
        ]);

        
       
      }
    </script> 

    <!-- CONGRESS -->

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['disease_name', 'number_of_victim'],


            <?php 

          while ($row=$congress->fetch_assoc()) {
              echo "['".$row['disease_name']."',".$row['sum(number_of_victim)']."],";
          }

           ?>

          
        ]);

        var options = {
          chart: {
            title: 'Congress',
            subtitle: 'Year 2017'
           
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_congress'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['disease_name', 'number_of_victims'],


            <?php 

          while ($row=$congress->fetch_assoc()) {
              echo "['".$row['disease_name']."',".$row['sum(number_of_victim)']."],";
          }

           ?>

          
        ]);

        
       
      }
    </script>

<!-- MALARIA -->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['disease_name', 'number_of_victims'],


            <?php 

          while ($row=$malaria->fetch_assoc()) {
              echo "['".$row['disease_name']."',".$row['sum(number_of_victim)']."],";
          }

           ?>

          
        ]);

        var options = {
          chart: {
            title: 'Malaria',
            subtitle: 'Year 2017'
           
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_malaria'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['disease_name', 'number_of_victims'],


            <?php 

          while ($row=$res->fetch_assoc()) {
              echo "['".$row['disease_name']."',".$row['sum(number_of_victim)']."],";
          }

           ?>

          
        ]);

        
       
      }
    </script>

<!-- TALA -->

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['disease_name', 'number_of_victim'],


            <?php 

          while ($row=$tala->fetch_assoc()) {
              echo "['".$row['disease_name']."',".$row['sum(number_of_victim)']."],";
          }

           ?>

          
        ]);

        var options = {
          chart: {
            title: 'Tala',
            subtitle: 'Year 2017'
           
          },
          bars: 'horizontal' // Required for Material Bar Charts.
        };

        var chart = new google.charts.Bar(document.getElementById('barchart_tala'));

        chart.draw(data, google.charts.Bar.convertOptions(options));
      }
    </script>

    
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['bar']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
           ['disease_name', 'number_of_victim'],


            <?php 

          while ($row=$tala->fetch_assoc()) {
              echo "['".$row['disease_name']."',".$row['sum(number_of_victim)']."],";
          }

           ?>

          
        ]);

        
       
      }
    </script>

<!-- <style>

body { 
  background: url(1.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

</style> -->

</head>

<body data-spy="scroll" data-target=".navbar-collapse" background="1.jpg">
        <div class="culmn">
            <!--Home page style-->
            <nav class="navbar navbar-default bootsnav navbar-fixed ">
                <div class="container">  
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                     
                        <img src="assets/images/MYLOGO.jpg" width="50%" style="margin-top:-10px;">
                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu" style="color:black;">
                        <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html" id="navList"><span id="navSignIN">Home</span></a></li>
                            <li><a href="usermap.html" class="navbar-home" id="navList"><span id="navSignIN">Heatlh Map</span></a></li>                    
                            <li><a href="chart.php" id="navList"><span id="navSignIN"> Graphs</span></a></li>
                            <li><a href="about.php" id="navList"><span id="navSignIN"> About us</span></a></li>  
                            <li><a href="userlogin.php" id="navList"><i class="fa fa-user-o" aria-hidden="true" ><span id="navSignIN"> Sign in</span></i></a></li>                   
                            <li><a href="RegisterUser.php" id="navList">  <button type="button" class="btn btn-primary" id="btn-signUp"><span id="btn-text">SIGN UP</span></button></a></li> 
                        </ul>
                    </div> <!-- /.navbar-collapse -->
                </div>   
            </nav>

            <br>
            <br>
            <br>
            <br>
<center>  

<br><br><br>
<div class="w3-responsive">

<div class="w3-card-4" style="width:70%;">

<header class="w3-container w3-light-blue   ">
  <center><h1>Bagong Silang</h1></center>
</header>
<br>
<div class="w3-card-12">
  
  <div class="w3-container w3-center">
  <div>
                        <div id="barchart_material" style="width: 900px; height: 500px;"></div>
                            
                     </div>
                     
                     <div>
                        <div id="barchart_material2" style="width: 900px; height: 100px;"></div>
                            
                     </div>
<br>
  </div>
</div>



</div>

<br><br>




</div>

<div class="w3-responsive">
  
  <div>

<div class="w3-card-4" style="width:70%;">

<header class="w3-container w3-light-blue   ">
  <center><h1>Diabetes</h1></center>
</header>
<br>
<div class="w3-card-12">
  
  <div class="w3-container w3-center">
  <div >
                        <div id="barchart_camarin" style="width: 900px; height: 500px;"></div>
                            
                     </div>
                     
                     <div>
                        <div id="barchart_camarin2" style="width: 900px; height: 100px;"></div>
                            
                     </div>


  </div>
</div>

<br><br>

</div>

<div class="w3-card-4" style="width:70%;">

<header class="w3-container w3-light-blue   ">
  <center><h1>Congress</h1></center>
</header>
<br>
<div class="w3-card-12">
  
  <div class="w3-container w3-center">
  <div>
                        <div id="barchart_congress" style="width: 900px; height: 500px;"></div>
                            
                     </div>
                     
                     <div>
                        <div id="barchart_congress2" style="width: 900px; height: 100px;"></div>
                            
                     </div>
  </div>
</div>
<br><br>


</div>

<div class="w3-card-4" style="width:70%;">

<header class="w3-container w3-light-blue   ">
  <center><h1>Malaria</h1></center>
</header>
<div class="w3-card-12">
  
  <div class="w3-container w3-center">
  <div>
                        <div>
                        <div id="barchart_malaria" style="width: 900px; height: 500px;"></div>
                            
                     </div>
                     
                     <div>
                        <div id="barchart_malaria2" style="width: 900px; height: 100px;"></div>
                            
                     </div>
  </div>
</div>



</div>

</div>


<br><br>

<div class="w3-card-4" style="width:70%;">

<header class="w3-container w3-light-blue   ">
  <center><h1>Tala</h1></center>
</header>
<br>
<div class="w3-card-12">
  
  <div class="w3-container w3-center">
  <div>
                        <div>
                        <div id="barchart_tala" style="width: 900px; height: 500px;"></div>
                            
                     </div>
                     
                     <div>
                        <div id="barchart_tala2" style="width: 900px; height: 100px;"></div>
                            
                     </div>

  </div>
</div>



</div>

</div>



<br>  
  
                    

<!-- TALA -->

<!-- <a href="../OurCapstone/crude2/tala/index.php"><button>Edit Graph</button></a>
  -->                   <!-- Column -->
                    

    </div>


</center>




    
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
   
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer"> © 2017</footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
   
</body>

</html>
