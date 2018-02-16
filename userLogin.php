<!-- Login Page -->
<?php 
    // Connection
    require 'conn.php';
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>CBHSMS</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
     <!-- CSS LINKS -->

    <!-- Bootstrap stylesheet -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Paper kit stylesheet -->
    <link href="assets/css/paper-kit.css?v=2.0.1" rel="stylesheet"/>
    <!--     Fonts and icons     -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,300,700' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- My stylesheet  -->
    <link rel="stylesheet" type="text/css" href="assets/css/myNew.css">

    <style>
    	#myUsername, #myPassword { box-shadow: 0 0 1px #cccccc; }
    </style>

	</head>
	<body>
    <?php 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            # code...
            if (isset($_POST['loginButton'])) {
                # code...
                require 'login.php';
            }
        }
    ?>
    <div class="wrapper">
            <div class="filter"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 offset-lg-4 col-sm-6 offset-sm-3" id="signInCard">
                            <div class="card card-register">
                                <h3 class="title" id="loginHeader">Welcome</h3>
                                <form class="register-form" action="userLogin.php" method="post" autocomplete="off">
                                    <input type="text" class="form-control" id="myUsername" placeholder="Username" name="username" required autocomplete="off"> 
                                     <br>
                                    <input type="password" class="form-control" id="myPassword" placeholder="Password" name="password" required autocomplete="off">

                                    <?php $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                                    if(strpos($url, 'error=username') !== false) {
                                     ?>
                                    <label class="errorLabel"> <?php echo "Invalid Username or password " ?> </label>
                                    <?php } ?>
                                     <br>

                                    <input type="submit" class="btn btn-danger btn-block btn-round" id="myBtn" name="loginButton"></input>
                                  
                                    </form>
                                    <div class="forgot">
                                    <a href="index.html" class="btn btn-link btn-danger" id="forgotLabel">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
	        </div>
	    </div>
	</body>




</html>
