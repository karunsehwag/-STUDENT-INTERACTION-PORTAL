<!DOCTYPE html>

<html class="no-js"  lang="en">

  <head>

  

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

    

   <title>IIIT BHOPAL'S LEGACY</title>

	

    

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
	
	
	
	<style>
	#karun{};
	#karun img
	{
	 height:500px;}
	 #design
   {
}
   #design img
   {width:100%;
	   
   height:680px;
   }
	 
	#nav{ 
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

                    	<!-- logo -->

                        	

                        <!-- logo -->

                        <!-- nav -->

       <div id="nav">
	  
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
                        <!-- nav -->

                    </hgroup>

                </div>

            </header>

            <!-- header -->

            <!-- main-wrapper-inner -->

        	<main class="main-wrapper-inner blog-wrapper" id="container">

            	<div class="container">

                	<div class="wrapper-inner">

                       <?php 
					    // Create database connection
  require_once "config.php";

  // Initialize message variable
  $msg = "";
			    $result = mysqli_query($link, "SELECT * FROM images ORDER BY id DESC;");
				 while ($row = mysqli_fetch_array($result))
				 {

                    	echo "<article id='post' class='post'>";

                        echo	"<figure>";
						echo  "<div id='design'>";
                          echo    " <img src='images/".$row['image']."' class='img-responsive' alt='#' />";
                          echo   "</div>";
                       echo 	"</figure>";

                       echo    " <section class='inner-left'>";

                            echo " <span class='date'>".$row['date']."</span>";

                           echo   "<p class='cat-pan'>by ".$row['name']."</p>";

                         echo " </section>";

                           echo "<section class='inner-right'>";

                            echo	"<header>";

                            echo		"<h3>".$row['TOPIC']."</h3>";

                             echo "  </header>";

                           echo  "<p>".$row['image_text']."</p>";

                          echo"  </section>";

                          echo " <div class='clearfix'></div>";

				 echo "</article>";} ?>

                        

                       


                        

                    </div>

                </div>

            </main>

          <!-- main-wrapper-inner -->

         <!-- footer -->

         <footer id="footer" class="footer">

            <h3>Stay connected with us</h3>

            <div class="container footer-bot">

                <div class="row">

                	<!-- logo -->


                    <!-- logo -->

                    <!-- address -->

                    </div>

                    <!-- address -->

                    <!-- email -->

                   

                    <!-- email -->

                    <!-- social -->

                     

                    <!-- social -->

                </div>

           

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