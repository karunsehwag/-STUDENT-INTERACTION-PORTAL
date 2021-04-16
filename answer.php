<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
	$name=$_SESSION["name"];
    $sname=$_session["scholar"];
	echo $name;
}

			
							
							
						
							
?>
<!DOCTYPE html>

<html class="no-js"  lang="en">

  <head>

  

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

    

    <title>iiit bhoplal's legacy</title>

	

    

    <!-- Normalize -->

    <link rel="stylesheet" href="css/assets/normalize.css" type="text/css"> 

    <!-- Bootstrap -->

    <link href="css/assets/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Font-awesome.min -->

    <link href="css/font-awesome.min1.css" rel="stylesheet" type="text/css">

    <!-- Main Style -->

    <link rel="stylesheet" href="css/main.css" type="text/css">

	<!-- Responsive Style -->

    <link href="css/responsive1.css" rel="stylesheet" type="text/css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->

 	<script src="js/assets/modernizr-2.8.3.min.js" type="text/javascript"></script>

	
<style>#nav{ 
    width:100%;
	background-color:white;
	clear:both;

	
}
#nav ul{list-style-type:none;
       
		}
#nav ul li{ 
float:left;
 }
#nav ul li a{
	font-size:20px;
text-decoration:none;
display:block;
padding:4px 10px 4px 10px; 
background-color:white;
color:black;
}
#nav ul li a:hover{
background-color:grey;}</style>	



  </head>

  <body>

  	

			

            <!-- header -->

            <header id="header" class="header">

            	<div class="container-fluid">

                	<hgroup>

                    	   <div id="nav">
	    <h2>IIIT BHOPAL </h2>
    
  <ul> <li> <a href="index.html">HOME</a></li>
   <li> <a href="about.html">ABOUT</a></li>
   <li> <a href="gallery.html">GALLERY</a></li>
    <li><a href="news.php">ASK A QUESTION</a></li>
	  <li><a href="blog.php">BLOG</a></li>
	   <li><a href="uploaddb2.php">BLOG UPLOAD</a></li>
	     <li><a href="login.php">LOGIN</a></li><li>
   <li><a href="logout.php">LOGOUT</a></li>
   </ul>
   </div>
      

                   

                        

                    </hgroup>

                </div>

            </header>
			

            <!-- header -->

            <!-- main-wrapper-inner -->

        	<main class="main-wrapper-inner blog-wrapper" id="container">

            	<div class="container">

                	<div class="wrapper-inner">
					
					
                                         <div class="commentys-form">

                    	<h3>WRITE  YOUR ANSWER</h3>

                        

                        <div class="row">

                        	 <form method="POST"  enctype="multipart/form-data">
                                <div class="clearfix"></div>

                                 <div class="col-xs-12 col-sm-12 col-md-12">

                                 	<textarea name="answer" cols="" rows="" placeholder="Whats in your mind"></textarea>
                                <br>
                                </div>

                                <div class="text-center">

                                	<button type="submit" name="submit">   SUBMIT    </button>

                                </div>

                            	

                                

                            </form>

                        </div>

                        

                    </div>
					<?php 
				 $r=$_GET['link'];
                       		 $name=$_SESSION['name'];
							
                          	
$id =$_SESSION["id"];
				   
						
	                    					
if(isset($_POST['submit']))
{$answer=$_POST['answer'];

require_once "config.php";

if(!$link)
{die("connection failed:".mysqli_connect_error());
}
$sql="INSERT INTO `ans` (`id`,`answer`,`name`, `pid`) VALUES ('$r','$answer','$name','$id')";

if (mysqli_query($link,  $sql))
{echo"<h3>answer submitted</h3>";
}

}
?>

                    


                      
                        <!-- comments -->
	



                        

                    </div>

                </div>

            </main>

          <!-- main-wrapper-inner -->

         <!-- footer -->

         <footer class="footer">

            <h3>Stay connected with us</h3>

            

        </footer>

        <!-- footer -->

   



    <!-- jQuery -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>

    <script>window.jQuery || document.write('<script src="js/assets/jquery.min.js"><\/script>')</script>

    <script src="js/assets/plugins.js" type="text/javascript"></script>

    <script src="js/assets/bootstrap.min.js" type="text/javascript"></script>

	<script src="js/main.js" type="text/javascript"></script>

	<script src="js/jquery.nicescroll.min.js" type="text/javascript"></script>	

	

	

  </body>

</html>