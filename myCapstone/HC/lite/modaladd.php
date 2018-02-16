<?php 
	include('db.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Material Pro Admin Template - The Most Complete & Trusted Bootstrap 4 Admin Template</title>
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
<body>

<div class="row">
                    <!-- column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-block">
                                <h4 class="card-title"><i class="mdi mdi-grease-pencil"></i> Diseases Table</h4>

                                <!-- Add new Diseases -->
                                 <div class="text-right" style="margin:-20px 0 0 0 ;">
                                 <button type="button" class="btn btn-primary btn-circle btn-lg" data-toggle="tooltip" title="Add new"><i class="glyphicon glyphicon-ok"></i><a href="modaladd.php" style="color: white;">+</a></button>
                                    </div>

                        
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Disease Name</th>
                                                <th>Description</th>
                                                <th>No. of Victims</th>
                                                <th colspan="2">Option</th>
                                            </tr>
                                        </thead>
                        <form method="GET" action="delete.php">
                            <?php
                            $result = "SELECT * FROM save.disease_tbl";
                            $run = mysql_query($result);
                            while($row = mysql_fetch_assoc($run)){
                                $id = $row['id'];
                                $disease_name = $row['disease_name'];
                                $description = $row['description'];
                                $no_of_victims = $row['no_of_victims'];
                                
                            ?>

                                <tr>
                                    <td><?php echo $id;?></td>
                                    <td><?php echo $disease_name;?></td>
                                    <td><?php echo $description;?></td>
                                    <td><?php echo $no_of_victims;?></td>
                                    
                                    <td><a href="delete.php?cat=<?php echo $id;?>">DELETE</a></td>
                                    <td><a href="editform.php?dog=<?php echo $id;?>">EDIT</a></td>
                                </tr>
                                <?php }?>










                    
            
                                    </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</body>
</html>