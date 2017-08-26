<?php
session_start();
if (isset($_SESSION['log_count'])){
    $log_count = $_SESSION['log_count'];
}
?>
<!doctype html>
<html lang = "en">

<head>
	<title>2nd year group project</title>
	<meta charset = "utf-8">
	<metaname="viewport" content="width=device-width, initial-scale=1">

	<!--this is for link css file-->
	<link rel="stylesheet" type="text/css" href="css/FindAProffesional.css">
	
	<!--//this is for link icons for site-->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<!--//this is for link bootstrap to site-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container-fluid">
		<div class="row" id="logo">
			<div class="col-md-6" >
				<center>
					<h6 id="HeaderLogo" >NIVAHAN.LK</h6>
				</center>
			</div>

			<div class="col-md-6">
				<center>
					<!--add social media links to site-->
					<i id="SocialMediaTop1" class="fa fa-facebook fa-2x" aria-hidden="true"></i>
					<i id="SocialMediaTop2" class="fa fa-twitter fa-2x" aria-hidden="true"></i>
					<i id="SocialMediaTop3" class="fa fa-instagram fa-2x" aria-hidden="true"></i>
					<i id="SocialMediaTop4" class="fa fa-youtube fa-2x" aria-hidden="true"></i>
				</center>	
			</div>	
		</div>

		<div class="row" id="Header">
			<!--add navgation bar to site-->
			<nav class="navbar navbar-inverse" id="NavBar">
			  <div class="container-fluid" >
			    <div class="navbar-header"> 
			      <a class="navbar-brand" href="index.php" id="NavFontLogo">Nivahan.lk</a>
			    </div>
			    <ul class="nav navbar-nav" >
			      <li><a href="FindAProffesinal.php" id="NavFont">Find Proffesional</a></li>
			      <li><a href="forum.php" id="NavFont">Forum</a></li>
			      <li><a href="Wiki.php" id="NavFont">Wiki</a></li>
			      <li><a href="#" id="NavFont">About Us</a></li>  
			    </ul>
                  <form class="navbar-form navbar-right" id="NavFont">
                      <div class="form-group" id="SearchBarButton">
                          <input type="text" class="form-control" placeholder="Search">
                      </div>
                      <button type="submit" class="btn btn-default" id="SearchBarButton"><i class="fa fa-search " aria-hidden="true"></i></button>
                  </form>
			    
				<ul class="nav navbar-nav navbar-right" id="NavFont">
                    <?php
                    if (isset($_SESSION['uname'])){
                        ?>
                        <li><a href="<?php echo('ArchiProfile(archi view).php');?>" id="NavFont"><i class="fa fa-user-circle-o" aria-hidden="true"></i><?php echo($_SESSION['uname']) ?> </a></li>
                        <li><a href="logout.php" id="NavFont"><i class="fa fa-sign-in " aria-hidden="true"></i> LogOut</a></li>
                        <?php
                    }else{
                    ?>
                    <li><a href="signup.php" id="NavFont"><i class="fa fa-user-plus " aria-hidden="true"></i> Sign Up</a></li>
                    <li><a href="login.php" id="NavFont"><i class="fa fa-sign-in " aria-hidden="true"></i> Login</a></li>
                </ul>
                  <?php
                  }
                  ?>

<!--			      <li><a href="signup.php" id="NavFont"><i class="fa fa-user-plus " aria-hidden="true"></i> Sign Up</a></li>-->
<!--			      <li><a href="login.php" id="NavFont"><i class="fa fa-sign-in " aria-hidden="true"></i> Login</a></li>-->
<!--			    </ul>	-->



			  </div>
			</nav>
		</div>

		<div class="row" id="content">
			<center>
				<div class="row">
					<form class="navbar-form ">
				      <div class="form-group">
				        <input type="text" class="form-control" placeholder="Search">
				      </div>
				      <button type="submit" class="btn btn-default" >SEARCH</button>
				    </form>
				</div>
			</center>

			<div class="row">

				<div class="col-md-9">
					<div class="jumbotron">
						<h3>Signature Homes Northland</h3>
						<img src="Images/10.jpg" heigh="400px" width="400px">
						<p>Originally founded in 1983, we are one of New Zealand’s most well known and respected residential building companies. Since then Signature Homes has become synonymous with modern design, uncompromised quality and service, and our entire network is committed to the continuous improvement of the services we offer</p>
						<a href="#">more</a>
					</div>	

					<div class="jumbotron">
						<h3>Homeworld Design & Build</h3>
						<img src="Images/11.jpg" heigh="400px" width="400px">
						<p>We are a proud local company utilising local suppliers whilst remaining at the forefront of innovative design and quality construction. We’re dedicated to providing quality, value for money homes for our customers. Our 35+ years in business are a testament to our commitment to building homes in Northland.
						Our aim is to give you, our valued client, the best service possible, therefore we have a professional team of designers, new home consultants, construction supervisors, managers and administration staff second to none in the industry. We manage every aspect of your build from start to finish to make the whole process hassle free for you.</p>
						<a href="#">more</a>
					</div>

					<div class="jumbotron">
						<h3>Signature Homes Northland</h3>
						<img src="Images/10.jpg" heigh="400px" width="400px">
						<p>Originally founded in 1983, we are one of New Zealand’s most well known and respected residential building companies. Since then Signature Homes has become synonymous with modern design, uncompromised quality and service, and our entire network is committed to the continuous improvement of the services we offer</p>
						<a href="#">more</a>
					</div>
				</div>

				<div class="col-md-3">
					<div id="map" style="width:auto;height:400px;background:yellow"></div>

					<script>
					function myMap() {
					  var mapCanvas = document.getElementById("map");
					  var mapOptions = {
					    center: new google.maps.LatLng(51.5, -0.2), zoom: 10
					  };
					  var map = new google.maps.Map(mapCanvas, mapOptions);
					}
					</script>

					<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCN02p7ickvajWBJ86FzA3yXZwtDwM61A8&callback=myMap"></script>
				</div>
					
			</div>	
			
		</div>	

		<div class="row" id="Footer">
				<div class = "col-md-3 col-xs-6">
					<h2>latest designs</h2>
					<ul>
    				<li>Spring</li>   					
    				<li>Summer</li>
   					<li>Autumn</li>
    				<li>Winter</li>
    				</ul>

				</div>

				<div class = "col-md-3 col-xs-6">
					<h2>profiles</h2>
					<ul>
    				<li>Augest 2010</li>   					
    				</ul>

				</div>

				<div class = "col-md-3 col-xs-6">
					<h2>house categories</h2>
					<ul>
    				<li>Spring</li>   					
    				<li>Summer</li>
   					<li>Autumn</li>
    				<li>Winter</li>
    				<li>design</li>
    				</ul>

				</div>

				<div class = "col-md-3 col-xs-6">
					<h2>Contact US</h2>
					<ul>
    				<li>MOBILE</li>   					
    				<li>EMAIL</li>
   					<li>OFFICE</li>
    				</ul>

				</div>
		</div>

	</div>	
</body>

</html>