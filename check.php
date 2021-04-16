<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=Date], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
input[type=file], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.contain {
width:80%;
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin:auto;
  
 
}

.col-25 {
  float: left;
  width: 20%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 80%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}


/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

</style>

</head>
<body>


<div class="container">

<div class="contain"><h2>Please fill out the form</h2>
<fieldset>
<legend>PERSONNEL INFORMATION</legend>
  <form method="POST" enctype="multipart/form-data">
    <div class="row">
      <div class="col-25">
        <label for="topic">TOPIC</label>
      </div>
      <div class="col-75">
        <input type="text" id="topic" name="topic" placeholder="Please enter the topic">
      </div>
    </div>
	<div class="row">
	 <div class="col-25">
        <label for="image">Upload Image</label>
      </div>
	   <div class="col-75">
	
  	<div>
  	  <input type="file" name="image">
  	</div>
	</div>
	</div>
    <div class="row">
      <div class="col-25">
        <label for="dead">Dead Line</label>
      </div>
      <div class="col-75">
        <input type="Date" id="dead" name="dead" placeholder="Your last name..">
      </div>
    </div>
	  <div class="row">
      <div class="col-25">
        <label for="price">PRICE</label>
      </div>
      <div class="col-75">
        <input type="text" id="price" name="price" placeholder="price">
      </div>
    </div>
	
	
    
    <div class="row">
      <div class="col-25">
        <label for="subject">Overview</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="abstract">Abstract</label>
      </div>
      <div class="col-75">
        <textarea id="abstract" name="abstract" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="country">Tags</label>
      </div>
      <div class="col-75">
	   <div class="row">
       <input type="checkbox" id="tagb" name="tagb" value="Bike">
  <label for="tagb"> Bussinesss and Entrepreneur</label>
 
  <input type="checkbox" id="tagc" name="tagc" value="Boat">
  <label for="tagc">Computer/info and Technology</label>
    <input type="checkbox" id="tagg" name="tagg" value="Boat">
  <label for="tagg">Global Health</label>
   <input type="checkbox" id="tags" name="tags" value="Boat">
  <label for="tags">Social Inovation</label>
    <input type="checkbox" id="tagp" name="tagp" value="Boat">
  <label for="tagp">Public Good</label>
   <input type="checkbox" id="tag19" name="tag19" value="Car">
  <label for="tagc">COVID-19</label>
     <input type="checkbox" id="tagi" name="tagi" value="Car">
  <label for="tagi">Ideation</label>
  </div>
      </div>
    </div>
    <div class="row">
	    
	
      <input type="submit"   value="upload">
	  
    </div>
    </fieldset>

</div>
 <?php
  // Create database connection
  $db = mysqli_connect("localhost:3307", "root", "", "demo");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$topic = mysqli_real_escape_string($db, $_POST['topic']);
	  	$subject = mysqli_real_escape_string($db, $_POST['subject']);
		  	$abstract = mysqli_real_escape_string($db, $_POST['abstract']);
		

  	// image file directory
  	$target = "images/".basename($image);
	$dead=$_SESSION['dead']; 
	$price=$_SESSION['price'];
    $tagb=$_SESSION['tagb'];
	$tagc=$_SESSION['tagc'];	
    $tagg=$_SESSION['tagg'];	
	$tags=$_SESSION['tags'];	
	$tagp=$_SESSION['tagp'];	
	$tag19=$_SESSION['tag19'];	
	$tagi=$_SESSION['tagi'];	

  	$sql = "INSERT INTO form (image,topic,subject,abstract,tagb,tagc,tagg,tags,tagp,tag19,tagi) VALUES ('$image', '$topic', '$subject', '$abstract', '$dead','$tagb','$tagc','$tagg','$tags','$tagp','$tag19','$tagi')";
  	// execute query
  	mysqli_query($db, $sql);
	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

  	
  } ?>


</div>
</body>
</html>