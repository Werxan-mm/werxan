<!DOCTYPE html>
<html>
<head>
	<title>Online Shopping/Men</title>
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
		          <li class="active"><a href="#">Shop</a></li>
		          <li><a href="/ip%20project%28final%29/main.php#log_in">Sign Up</a></li>
		          <li class="log_in_width"><a onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Log In</a>
		          <div id="id01" class="modal">
					  <form class="modal-content animate" action="/ip%20project%28final%29/authentication.php" method="post">
					    <div class="imgcontainer">
					      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					    </div>

					    <div class="container">
					      <label><b>Username</b></label>
					      <input type="text" placeholder="Enter Username" name="uname" required>

					      <label><b>Password</b></label>
					      <input type="password" placeholder="Enter Password" name="psw" required>
					        
					      <button type="submit">Login</button>
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
		<div class="container ">
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
					<h1>Our Company</h1>
					<p>Here you can find some information about our company!</p>
				</div>
				<div style="height: 20px"></div>
				<div class="aboutus_banner wow zoomIn"></div>
			</div>
		</div>
	</section>
	<div style="height: 100px"></div>
	<div class="about_paralax">
		<div class="about_bgimg">
			<div class="caption wow zoomIn">
				<span class="sometext">The Epitome of Symbiosis</span>
				<h1>Both Epitome and Symbiosis are Greek words.</h1>
				<h2>Epitome coming from Greek through Latin, epitome refers to something that is the
				ultimate representative of its class while Symbiosis is a Greek word deriving from the
				words syn that means together and bios that means livelihood. Looking at the
				dictionary you read for symbiosis: "close and usually obligatory association of two
				different organisms of species that live together to their mutual benefit".
				</h2>
			</div>
		</div>
		<div class="about_bgimg2">
			<div class="caption wow zoomIn">
				<span class="sometext">Engineers by day, </span>
				<br>
				<span class="sometext" style="letter-spacing: 2px;">dreamers by night</span>
				<div class="container" style="margin-top: 50px;">
				<div class="col-md-6"><h4>Today success in business is almost impossible without collaboration.  We need to work with someone who knows and understands us, someone who listens to what we really need and, with us, defines realistic objectives and the ways to reach them.  Someone, who will share with us knowledge, practices, risks and results.  A partner we can count on day after day. It is up to us alone to discover this collaborative business experience and take advantage of that.</h4></div>
				<div class="col-md-6"><h4>We started Werxan Online Shopping as a way to create things we believe have meaning and longevity. In today's disposable world, we find passion in creating something that will be cherished for years to come. Crafting an Werxan Good requires incredible patience. It requires us to prioritize quality over quantity. Less over more. Simple over complex. Even worse, it requires us to be consistent, even while the pressure to ship grows like a tidal wave over our head. We love that each Werxan Goods that goes out our doors has its own unique character. We put the same effort into every good as if it were our own, and we find ourselves just as excited finishing today's goods as we were with our first.</h4>
				</div>
				</div>
			</div>
		</div>
		<div class="about_bgimg3">
			<div class="caption wow zoomIn">
				<span class="sometext">Company Info</span>
				<div class="container" style="margin-top: 50px;">
					<div class="col-md-6">
						<p>Company overview</p>
						<h4>Our brands, design, source, market & sell clothing, shoes and accessories targeted at 16-24 year old consumers in the Uzbekistan and internationally. The Group sells products to customers in almost every country in the world, with a strong presence in the Uzbekistan, Russia and Korea.</h4>
					</div>
					<div class="col-md-6">
						<p>Growth strategy</p>
						<h4>The Company's ambition and growth prospects are underpinned by forecast growth in both the domestic and international online fashion retail markets, boohoo's highly efficient product sourcing model and a robust infrastructure development plan.</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="about_bgimg4">
			<div class="caption wow zoomIn">
				<span class="sometext">Mission & Charity</span>
				<div class="container" style="margin-top: 50px;">
					<div class="col-md-6">
						<p>Mission</p>
						<h4>We thrive on three principles: COLLABORATE with a diverse group of crafters and artisans to gain unique perspectives on design and inspiration. CRAFT sustainable and distinct goods that dramatically reduce waste putting into practice the principle "in today's waste lie the seeds of tomorrow's goods and products". We treasure the waste left behind and even make something beautiful out of it. For us waste is no more.  COMMIT to making a positive difference by partnering with various charitable organizations around the world.</h4>
					</div>
					<div class="col-md-6">
						<p>Charity</p>
						<h4>Working closely with charity partners is something that we have always been passionate about. We would be partnering with three exceptionally worthy charities, 1 euro from every Werxan Good you purchase goes directly to the charity you selected. Please read on to find out how the Werxan Goods is really making a difference – and how you can help, too. Want to know more about these charities? Our founder, Sherzodbek, explains why the work undertaken by these charities is particularly close to her heart.</h4>
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




<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
</body>
</html>