<?php
include('Connection.php');
$sql = "SELECT * FROM apartments Where Status ='Available'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
   ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Menlyn Place</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="Css/Style.css" rel="stylesheet" type="text/css">
</head>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<body>
  <div class="section"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="Images/bg_1.jpg" alt="Los Angeles" style="width:100%;">
      </div>
      <div class="item">
        <img src="Images/bg_2.jpg" alt="Chicago" style="width:100%;">
      </div>
    
      <div class="item">
        <img src="Images/bg_3.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      
      <span class="sr-only">Next</span>
    </a>

  </div>
  <div class="section2" id="section2" style="display:none;" > 
  <div class="container2">
<div class="wrap">
<h3>MENLYN PLACE</h3>
<b><h2><a href="#content">WHO ARE WE</a></h2></b>
</div>
</div>
<div class="content" id="content">sds</div>
</div>
 <div class="section3" id="section3" style="display:none;"> 
  <div class="container2">
  <div class="wrap">
  <h3>LIVE HERE TODAY</h3>
<b><h2><a href="#content2">CONTACT US</a></h2></b>
</div>
</div>
<div class="content" id="content2">
<form>
<input type="text" placeholder="Your Name">
<input type="email" placeholder="Your Email">
<input type="text" placeholder="Subject">
<textarea placeholder="Message"></textarea>
<input type="submit" value="SEND MESSAGE">
</form>
</div>
</div>
<div class="container3" id="container3">
<footer>
<?php
 while($row = $result->fetch_assoc()) {
	 echo'
	 <div style="margin-top:90px; ">
	 <label>Price :' . $row["Price"].'</label>
	 <label>Unit Number : '. $row["UnitNumber"].'</label>
	 <label>Date Posted : '. $row["DatePosted"].'</label>
	 <label>Apartment Details : '. $row["ApartmentDetails"].'</label>
	 </div>
	 ';
	 echo'<div id="myCarousel1" class="carousel slide" data-ride="carousel" style=" width:500px ;margin-top:-225px;height:auto;">

    <!-- Wrapper for slides -->
    <div class="carousel-inner" >
      <div class="item active">
        <img src="Images/'.$row["RoomImg1"].'" style="height:300px; width:500px ;"alt="Los Angeles">
      </div>
      <div class="item">
        <img src="Images/'.$row["RoomImg2"].'" style="height:300px; width:500px ; alt="Chicago">
      </div>
    
      <div class="item">
        <img src="Images/'.$row["RoomImg3"].'" style="height:300px; width:500px ; alt="New york" >
      </div>
    </div>

  </div>';
	 echo'<hr><br>'
	 ;
	
    }
} 
 $con->close();
?>
</footer>
</div>
</div>
</div>

<div class="container" id="#ftco-navbar">
      <a href="Login.php" class="navbar-brand" ><bb>MENLYN PLACE</bb> <hr></a>
      
      <div class="topnav" id="myTopnav">
      <a href="#" class="active" style="display:none;">HOME</a> 
      <a href="Index.php">HOME</a> 
      <a href="Rooms.php">Rooms</a> 
      <a href="Apartments.php" style="display:none;" >APARTMENTS</a>
      <a href="#section2"  style="display:none;">About US</a>
      <a href="#section3"  style="display:none;">Contact Us</a>  
      <a href="javascript:void(0);" class="icon" onClick="myFunction()"> 
      <em class="fa fa-bars"></em> 
      </a>
        <hr>
</div>
<div class="text">
-APARTMENTS
<br>
<p>
<h4>hjjhfhjfhjf</h4>
<h4>hjjhfhjfhjf</h4>
<h4>hjjhfhjfhjf</h4>
</p>
</div>
</div>
<center><a href="#container3" style="color:black;"><button >Continue</button></a></center>
<script>
function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}
</script>
</body>
</html>