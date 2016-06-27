<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TaskHub Home</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <!--<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
        <div class="container topnav">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand topnav" href="index.html">TaskHub</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#about">About the Team</a>
                    </li>
                    <li>
                        <a href="index.html">Services</a>
                    </li>
                    <li>
                        <a href="sign_up.html">Sign Up/Login</a>
                    </li>
                </ul>
            </div>-->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>TaskHub</h1>
                        <h3>How Business is Supposed to Be Done</h3>
                        <hr class="intro-divider">
                            <div class="form">
      
                              <ul class="tab-group">
                                <li class="tab active"><a href="#signup">Sign Up</a></li>
                                <li class="tab"><a href= "#login">Log In</a></li>
                              </ul>
                              
                              <div class="tab-content">
                                <div id="signup">   
                                  <h1>Sign Up for Free</h1>
                                  
                                  <form action="" method="post">
                                  
                                    <div class="field-wrap">
                                      <label>
                                        User Name<span class="req">*</span>
                                      </label>
                                      <input type="text" required autocomplete="off" name="u_name" />
                                    </div>

                                  <div class="field-wrap">
                                    <label>
                                      Email Address<span class="req">*</span>
                                    </label>
                                    <input type="email" required autocomplete="off" name="u_email"/>
                                  </div>
                                  
                                  <div class="field-wrap">
                                    <label>
                                      Set A Password<span class="req">*</span>
                                    </label>
                                    <input type="password" required autocomplete="off" name="u_pass"/>
                                  </div>
                                  
                                  <button  name="sign_up" class="button button-block">Get Started</button>
                                  
                                </form>


                                <?php 
                                include("user_insert.php");
                                ?>

                                </div>
                                
                                <div id="login">   
                                  <h1>Welcome Back!</h1>
                                  
                                  <form action="" method="post">
                                  
                                    <div class="field-wrap">
                                    <label>
                                      Email Address<span class="req">*</span>
                                    </label>
                                    <input name="email" type="email" required autocomplete="off"/>
                                  </div>
                                  
                                  <div class="field-wrap">
                                    <label>
                                      Password<span class="req">*</span>
                                    </label>
                                    <input name="pass" type="password" required autocomplete="off"/>
                                  </div>
                                  
                                  <!--<p class="forgot"><a href="#">Forgot Password?</a></p>-->
                                  
                                  <button name="login" class="button button-block">Log In</button>
                                  
                                  </form>

                                    <?php 
                                    include("login.php");
                                    ?>
                                    
				<h2>Forgot Your Password?</h2>
                                <form action="Change.php" method="POST">
				E-mail Address: <input type="text" name="email" /> <input type="submit" name="ForgotPassword" value=" Request Reset " />
				</form>
                                
                                </div>
                                
                              </div><!-- tab-content -->
                              
                        </div> <!-- /form -->

                        <!--
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>
                            <li>
                                <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                            </li>
                            <li>
                                <a href="#" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                            </li>
                        </ul>-->
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->


    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <!--<li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="#about">About</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="index.html">Services</a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li>
                            <a href="sign_up.html">Sign Up/Login</a>
                        </li>-->
                    </ul>
                    <br><!--
                    <p class="copyright text-muted small">Disclaimers: 
                    <ul>
                        <li> A special thanks to <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a> for providing the photographs that you see in this template.</li>   
                        <li>This template features the 'Lato' font, part of the <a target="_blank" href="http://www.google.com/fonts">Google Web Font library</a>, as well as <a target="_blank" href="http://fontawesome.io">icons from Font Awesome</a>.</li>
                    </ul>-->
                    </p>
                    <p class="copyright text-muted small">Copyright &copy; TaskHub 2016. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>

</html>
