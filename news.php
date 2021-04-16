<!DOCTYPE html>

<html class="no-js"  lang="en">

  <head>

  

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">

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
background-color:grey;}
.footer{ background-color:black;  z-index:1; width:100%; bottom:0; left:0; right:0; padding-top:104px; padding-bottom:115px; text-align:center; color:#999999; font-size:10px; letter-spacing:1px; font-weight:400}
.main-wrapper,.main-wrapper-inner{background-color:#FFF;position:relative; z-index:6;margin-bottom:0px;}

.wrapper{background-color:#FFF; padding:0 25px;position:relative; z-index:6; }</style>	



  </head>

  <body>

  	

			

            <!-- header -->

            <header id="header" class="header">

            	<div class="container-fluid">

                	<hgroup>

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
      

                   

                        

                    </hgroup>

                </div>

            </header>

            <!-- header -->

            <!-- main-wrapper-inner -->

        	<main class="main-wrapper-inner blog-wrapper" id="container">

            	<div class="container">

                	<div class="wrapper-inner">
					
					
                                         <div class="commentys-form">

                    	<h3>ASK YOUR QUESTION</h3>

                        

                        <div class="row">

                        	 <form method="POST"  enctype="multipart/form-data">

                            

                            	<div class="col-xs-12 col-sm-4 col-md-4">

                                	<input name="name" type="text" placeholder="Whats your name *">

                                </div>

                                <div class="col-xs-12 col-sm-4 col-md-4">

                                	<input name="email" type="email" placeholder="Whats your email *">

                                </div>


                                <div class="clearfix"></div>

                                 <div class="col-xs-12 col-sm-12 col-md-12">

                                 	<textarea name="ques" cols="" rows="" placeholder="Whats in your mind"></textarea>
                                <br>
                                </div>

                                <div class="text-center">

                                	<button type="submit" name="submit">   SUBMIT    </button>

                                </div>

                            	

                                

                            </form>

                        </div>

                        

                    </div>
					<?php
if(isset($_POST['submit']))
{$ques=$_POST['ques'];
$name=$_POST['name'];
$email=$_POST['email'];
require_once "config.php";

if(!$link)
{die("connection failed:".mysqli_connect_error());
}
$sql="INSERT INTO `ques` (`ques1`,`name`,`email`) VALUES ('$ques','$name','$email')";

if (mysqli_query($link,  $sql))
{echo"<h1>new record created</h1>";
}

}
?>

                    


                      
                        <!-- comments -->
						<br><br><br>
  <h2>VIEW PREVIOUS ASKED QUESTIONS</h2>
                       <div class="comments-pan">

                      

                        <ul class="comments-reply">
<?php  require_once "config.php";               
$result = mysqli_query($link, "SELECT * FROM ques");
				 while ($row = mysqli_fetch_array($result))
				 {     
				 $id=$row['id'];
				
					 echo "<li>";
                   
                  
                          echo"  <section>";

				 echo     "<h4> " .$row['name'].  "<a href='answer.php?link=$id'>ANSWER</a></h4>";

                          echo      "<div class='date-pan'>".$row['date']."</div>";

                             echo  "<h4> " .$row['ques1'].  "</h4>";

                           echo "</section>";

       
 $resul = mysqli_query($link, "SELECT * FROM ans  WHERE id LIKE '%{$id}%'");
				 while ($ro = mysqli_fetch_array($resul))
{    
							echo "<ol class='reply-pan'>";
							                 



                            echo	"<li>";
    	
 
                              echo    "  <section>";

                                 echo   "    <h4>".$ro['name']."</h4>";

                                   echo    " <div class='date-pan'>".$ro['date']. "</div>";

                                    echo    "<h4>".$ro['answer']."</h4>";

echo"</section>";

echo "</li>";

echo  "</ol>";} }?>
					

                        </li>

                  

                    </ul>

                    


                    

                </div>



                        

                    </div>

                </div>

            </main>

          <!-- main-wrapper-inner -->

         <!-- footer -->

         <footer id="footer" class="footer">
  <h3>Stay connected with us</h3>
         <div class="container">
            
              
                 
                     
                    
                
               
            
 
            
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