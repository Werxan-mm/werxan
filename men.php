<!DOCTYPE html>
<html>
<head>
	<title>Online Shopping/Men</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/animated.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

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
					<h1>Men Choice</h1>
					<p>Here you can find the best dress codes for man ever!</p>
				</div>
				<div style="height: 20px"></div>
				<div class="men_banner wow zoomIn"></div>
			</div>
		</div>
	</section>
	<div class="choose">
					<h1>Men Choice</h1>
					<p></p>
				</div>
	<div class="men_product">
		<div class="container-fluid">
			<div class="col-md-3">
				<div id="item1" class="men_goods wow zoomIn" class="items">
					<img src="images/fashion-Men-wool-coat-Korean-style-winter_84429.jpg">

					<p>Name of product<span>Prise: 20$</span></p>
					<input type="hidden" id="item1_name" value="Simple Navy Blue T-Shirt">
    				<input type="hidden" id="item1_price" value="$95">
					<button onclick="cart('item1')">ADD TO CART</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="men_goods wow zoomIn">
					<img src="images/fashion-Men-wool-coat-Korean-style-winter_84429.jpg">
					<p>Name of product<span>Prise: 20$</span></p>
					<button>ADD TO CART</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="men_goods wow zoomIn">
					<img src="images/fashion-Men-wool-coat-Korean-style-winter_84429.jpg">
					<p>Name of product<span>Prise: 20$</span></p>
					<button>ADD TO CART</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="men_goods wow zoomIn">
					<img src="images/fashion-Men-wool-coat-Korean-style-winter_84429.jpg">
					<p>Name of product<span>Prise: 20$</span></p>
					<button>ADD TO CART</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="men_goods wow zoomIn">
					<img src="images/fashion-Men-wool-coat-Korean-style-winter_84429.jpg">
					<p>Name of product<span>Prise: 20$</span></p>
					<button>ADD TO CART</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="men_goods wow zoomIn">
					<img src="images/fashion-Men-wool-coat-Korean-style-winter_84429.jpg">
					<p>Name of product<span>Prise: 20$</span></p>
					<button>ADD TO CART</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="men_goods wow zoomIn">
					<img src="images/fashion-Men-wool-coat-Korean-style-winter_84429.jpg">
					<p>Name of product<span>Prise: 20$</span></p>
					<button>ADD TO CART</button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="men_goods wow zoomIn">
					<img src="images/fashion-Men-wool-coat-Korean-style-winter_84429.jpg">
					<p>Name of product<span>Prise: 20$</span></p>
					<button>ADD TO CART</button>
				</div>
			</div>
		</div>
	</div>
	<div style="height: 50px"></div>
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


	<script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>


</body>
</html>