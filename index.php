<!DOCTYPE html>
<html>
<head>
	<title>Online Shopping</title>
  	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/animated.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		          <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="main.php"><img src="W-logo.png"><p>Werxan</p></a>
		    </div>
		    <div>
		      <div class="collapse navbar-collapse navbar-right" id="myNavbar">
		        <ul class="nav navbar-nav">
			        <form class="navbar-form navbar-left">
					  <div class="input-group">
					    <input type="text" class="form-control" placeholder="Search">
					    <div class="input-group-btn">
					      <button class="btn btn-default" type="submit">
					        <i>GO!</i>
					      </button>
					    </div>
					  </div>
					</form>
		          <li class="active"><a href="main.php">Shop</a></li>
		          <li><a href="#log_in">Sign Up</a></li>
		          <li class="log_in_width"><a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Log In</a>
		          <div id="id01" class="modal">
					  <form class="modal-content animate" action="/ip%20project%28final%29/login.php" method="post">
					    <div class="imgcontainer">
					      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					    </div>

					    <div class="container">
					      <label><b>Username</b></label>
					      <input type="text" placeholder="Enter Username" name="uname" required>

					      <label><b>Password</b></label>
					      <input type="password" placeholder="Enter Password" name="psw" required>
					        
					      <button name="login_btn" type="submit">Login</button>
					      <input type="checkbox" checked="checked"> Remember me
					    </div>

					    <div class="container">
					      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
					      <span class="psw">Forgot <a href="#">password?</a></span>
					    </div>
					  </form>
					</div>
		          </li>
		          <li>
		          	<div class="dropdown" style="float:left;">
					  <button class="dropbtn">
					  <img src="images/cart.png"><span>Cart</span></button>
					  <div class="dropdown-content">
					    <a href="#">Link 1</a>
					    <a href="#">Link 2</a>
					    <a href="#">Link 3</a>
					    <button class="btn btn-success" type="submit">
					    Buy Now
					    </button>
					  </div>
					</div>
				  </li>
		        </ul>
		      </div>
		    </div>
		  </div>
		</nav> 
	</header>
	<section>
		<div class="container">
			<div class="col-md-3">
				<div class="menu">
					<a href="main.php"><h1>WERXAN</h1>
					<h3>O N L I N E - S H O P P I N G</h3></a>
					<ul>
						<li><a href="main.php"><span>HOME</span></a></li>
						<li><a href="men.php"><span>MEN</span></a></li>
						<li><a href="women.php"><span>WOMEN</span></a></li>
						<li><a href="kids.php"><span>KIDS</span></a></li>
						<li><a href="sale.php"><span>SALE</span></a></li>
						<li><a href="news.php"><span>NEWS</span></a></li>
						<li><a href="aboutus.php"><span>ABOUT US</span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<div class="choose wow fadeInDown">
					<h1>Make Your Choice</h1>
					<p>In a few minutes you can get goods you want</p>
				</div>
				<div style="height: 40px"></div>
				<div class="good">
					<div class="col-md-6">
						<div class="img_blog wow zoomIn">
							<a href="men.php">
								<img src="images/mensection.jpg">
							</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="img_blog wow zoomIn">
							<a href="women.php">
								<img src="images/womensection.jpg">
							</a>
						</div>
					</div>
				</div>
				<div class="good">
					<div class="col-md-6">
						<div class="img_blog wow zoomIn">
							<a href="kids.php">
								<img src="images/kidssection1.png">
							</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="img_blog wow zoomIn">
							<a href="sale.php">
								<img src="images/salesection.jpeg">
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div style="height: 100px"></div>
	<div class="parallax">
		<div class="bgimg1">
			<div class="caption wow zoomIn">
				<span class="sometext">New Collection</span>
			</div>
		</div>
		<div style="height: 50px"></div>
		<div class="container">
			<div class="product">
				<div class="col-md-4">
					<div class="goods1 wow zoomIn">
						<a href="news.php"><img src="images/mennew.jpg" alt="product" class="image">
						<div class="middle">
							<div class="info_text">More</div>
						</div></a>
						<p></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="goods1 wow zoomIn">
						<a href="news.php"><img src="images/womennew.jpg" alt="product" class="image">
						<div class="middle">
							<div class="info_text">More</div>
						</div></a>
						<p></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="goods1 wow zoomIn">
						<a href="news.php"><img src="images/kidsnew.jpg" alt="product" class="image">
						<div class="middle">
							<div class="info_text">More</div>
						</div></a>
						<p></p>
					</div>
				</div>
			</div>
		</div>
		<div class="bgimg2">
			<div class="caption wow zoomIn">
				<span class="sometext">Sale</span>
			</div>
		</div>
		<div style="height: 50px"></div>
		<div class="container">
			<div class="">
				<div class="col-md-4">
					<div class="goods1 wow zoomIn">
						<a href="sale.php"><img src="images/mensale.jpg" alt="product" class="image">
						<div class="middle">
							<div class="info_text">More</div>
						</div></a>
						<p></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="goods1 wow zoomIn">
						<a href="sale.php"><img src="images/womensale.jpg" alt="product" class="image">
						<div class="middle">
							<div class="info_text">More</div>
						</div></a>
						<p></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="goods1 wow zoomIn">
						<a href="sale.php"><img src="images/kidssale.jpg" alt="product" class="image">
						<div class="middle">
							<div class="info_text">More</div>
						</div></a>
						<p></p>
					</div>
				</div>
			</div>
		</div>
		<div class="bgimg3">
			<div class="caption wow zoomIn">
				<span class="sometext">Gallery</span>
			</div>
		</div>
		<div style="height: 50px"></div>
		<div class="container">
			<div class="product">
				<div class="col-md-4">
					<div class="goods1 wow zoomIn">
						<a href="gallery.php"><img src="images/gallerymen.jpg" alt="product" class="image">
						<div class="middle">
							<div class="info_text">More</div>
						</div></a>
						<p></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="goods1 wow zoomIn">
						<a href="gallery.php"><img src="images/gallerywomen.jpg" alt="product" class="image">
						<div class="middle">
							<div class="info_text">More</div>
						</div></a>
						<p></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="goods1 wow zoomIn">
						<a href="gallery.php"><img src="images/gallerykids.jpg" alt="product" class="image">
						<div class="middle">
							<div class="info_text">More</div>
						</div></a>
						<p></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="feedback1">
		<div id="log_in">
			<div class="container">
	        	<div class="feedback wow slideInUp">
	            	<div class="client">Clients</div>
	            	<div class="bgclr">
	            	<div class="contant">Sign Up</div>
	            	<form method="post" action="/ip%20project%28final%29/actions/userrelated/signup.php">
	            	<div id="name">
	    	        	<input name="name" type="text" placeholder="Your name" required="required">
	            	</div>
	            	<div id="email">
	                	<input name="email" type="text" placeholder="Email">
	            	</div>
	            	<div id="telephone">
	                	<input name="telephone" type="text" placeholder="Telephone number" required="required">
	            	</div>
	            	<div id="password">
	                	<input name="password" type="password" placeholder="Password" required="required">
	            	</div>
	            	<div id="password2">
	                	<input name="password2" type="password" placeholder="Password Confirmation" required="required">
	            	</div>
	            	<div class="send">
	                	<input type="submit" name="signup" value="Sign Up!">
	            	</div>
	            	</form>
	            	</div>
	        	</div>
	    	</div>
    	</div>
	</div>
	<div id="wrapper">
		<footer>
        <div class="item">
            <div class="container">
                <div class="contacts">
                    <div class="text">CONTACTS</div>
                    <table>
                        <tr>
                            <td><a href="tel:">+998 97 777 77 77</a></td><td><a href="mailto:info@werxan.com">info@werxan.com</a></td>
                        </tr>
                        <tr>
                            <td><a href="tel:">+998 94 444 44 44</a></td><td><a href="mailto:werxan.com">werxan.com</a></td>
                        </tr>
                        <tr>
                            <td><a href="tel:">+998 93 379 66 97</a></td><td><a href="mailto:werxan.com">werxan.com</a></td>
                        </tr>
                    </table>
                </div>
                <div class="share1">
                    <div class="text">SHARE</div>
                    <div class="s_media footer-s-media">
                        <div class="fb">
                            <a href="/ip%20project%28final%29/pageredirection/redirecttofacebook.php" class="img_cover"></a>
                        </div>
                        <div class="vb">
                            <a href="/ip%20project%28final%29/pageredirection/redirecttotelegram.php" class="img_cover"></a>
                        </div>
                        <div class="insta">
                            <a href="/ip%20project%28final%29/pageredirection/redirecttoinstagram.php" class="img_cover"></a>
                        </div>
                        <div class="gg">
                            <a href="/ip%20project%28final%29/pageredirection/redirecttoplusgoogle.php" class="img_cover"></a>
                        </div>
                        <div class="tw">
                            <a href="/ip%20project%28final%29/pageredirection/redirecttotwitter.php" class="img_cover"></a>
                        </div>
                    </div>
                </div>
                <div class="adress">
                    <span class="text">ADRESS</span>
                    <p>
                        Support: info@werxan.com<br>
                        Address: 7a Street. M. Ulugbek,<br>
                        Tashkent, Uzbekistan, 100100<br>
                    </p>
                </div>            
            </div>
            <div class="cover">
                <p>&copy 2001-<?php echo date("Y"); ?> Online-Shopping</p>
            </div>
        </div>
    </footer>
	</div>
<!-- script for smooth scroll spy -->
<script>
$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar-inverse", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('php, body').animate({
        scrollTop: $(hash).offset().top
      }, 500, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});
</script>



	<script>
	// Get the modal
	var modal = document.getElementById('id01');
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
    	if (event.target == modal) {
        	modal.style.display = "none";
    	}
	}
	</script>

	<script src="js/wow.js"></script>
              <script>
              new WOW().init();
              </script>

</body>
</html>
