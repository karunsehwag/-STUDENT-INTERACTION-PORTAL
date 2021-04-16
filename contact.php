<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
   <!-- Site Metas -->
    <title>IIIT BHOPAL'S LEGACY</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->	
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <!-- font family -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
   <!-- end font family -->
   <link rel="stylesheet" href="css/3dslider.css" />
   <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
   
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
   <body class="game_info" data-spy="scroll" data-target=".header">
      <!-- LOADER -->
      <div id="preloader">
          <img class="preloader" src="images/img5.webp" alt="">
      </div>
      <!-- END LOADER -->
	  
	  
							     <div id="nav">
	
    
    <ul><li> <a href="index.html">HOME</a></li>
   <li> <a href="about.html">ABOUT</a></li>
   <li> <a href="gallery.html">GALLERY</a></li>
    <li><a href="news.php">ASK A QUESTION</a></li>
	  <li><a href="blog.php">BLOG</a></li>
	   <li><a href="login.php">LOGIN</a></li><li>
   <li><a href="contact.php">REGISTER</a></li>
  </ul>
  
   </div>
      
	  
      <section id="contant" class="contant main-heading team">
	  
         <div class="row">
		  <h1>PLEASE FILL THE FORM</h1>
            <div class="container">
               <div class="contact">
                 
                  
                  <div class="col-md-12">
                     <div class="contact-us">
					  
                    <fieldset>
<legend>REGISTRATION FORM</legend>
<form method="POST" class="comments-form" ><br>

<input type="text" name="name" class="required" placeholder="NAME">
<br>
<input type="text" name="sname" class="required" placeholder="SCHOLAR NO *">
<br>
<input type="date" name="dob" placeholder="date of birth">
</input>
<br>
<input type="email" name="email" class="required email" placeholder="EMAIL ADDRESS">
<br>
<input list="number" name="pno"  placeholder="MOBILE NUMBER">
<br>
<div class="thbg-color">
<br><input  type="submit" name="submit"><div>
</fieldset>
<br>


</form></div>
<?php 
if(isset($_POST['submit']))
{
	



$name=$_POST['name'];
$sname=$_POST['sname'];

$dob=$_POST['dob'];
$email    = $_POST['email'];
$pno=$_POST['pno'];



require_once "config.php";

if(!$link)
{die("connection failed:".mysqli_connect_error());
}  
$sql="INSERT INTO `userdata`( `NAME`, `SCHOLAR`, `DOB`, `PHONE`, `EMAIL`) VALUES ('$name', '$sname', '$dob', '$pno', '$email')";


if (mysqli_query($link,  $sql))
{     session_start();
                            
                            // Store data in session variables
                            $_SESSION["log"] = true;
							 $_SESSION["nam"]=$name;
							
							   $_SESSION["snam"]=$sname;                            
                            
                            // Redirect user to welcome page
                            header("location: register.php");
}
}
?> 


                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
 <footer id="footer" class="footer">
  
         <div class="container">
            <div class="row">
               <div class="col-md-4 ">
                  <div class="full">
                     <div class="footer-widget">
                     
                    
                        <ul class="social-icons style-4">
                           <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                           <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                           <li><a class="youtube" href="#"><i class="fa fa-youtube-play"></i></a></li>
                           <li><a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
						<br>
						<br>
						<br>
                     </div>
                  </div>
               </div>
               
                       
               
           
           
            </div>
         </div>
        
      </footer>
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <!-- ALL JS FILES -->
      <script src="js/all.js"></script>
      <!-- ALL PLUGINS -->
      <script src="js/custom.js"></script>
   </body>
</html>