<!DOCTYPE HTML>
<html>
	<head>
		<title>Bus Ticket Booking System</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.php">Rapid Bus</a>	
			<div class="navbar">
			<div class="dropdown">
          		<button class="dropbtn" onclick="window.location.href='search.html';">Search</button>
        	</div>
			<div class="dropdown">
			<button class="dropbtn">Currency</button>
			<div class="dropdown-content">
				<a href="#">SGD</a>
				<a href="#">MYR</a>
				<a href="#">THB</a>
				<a href="#">VTD</a>
				<a href="#">PHP</a>					
			</div>
			</div>
			<div class="dropdown">
			<button class="dropbtn">Country</button>
			<div class="dropdown-content">
				<a href="#">Singapore</a>
				<a href="#">Malaysia</a>
				<a href="#">Thailand</a>
				<a href="#">Vietnam</a>
				<a href="#">Philippine</a>
			</div>
			</div> 			
			</div>				
			</header>

		<!-- Nav -->
		
		
		<!-- Highlights -->
			<section class="wrapper">
				<div class="inner">
					<header class="special">
						<h2>Bus Booking System</h2>
						<p>A Destination For The New Millennium. Grab the cheapest bus ticket to your favourite place NOW!</p>
					</header>
					<!-- Form -->								
									<form method="post" action="index_processing.php">
										<div class="row gtr-uniform">
											<div class="col-6 col-12-xsmall">
												<input type="text" name="toDest" value="" placeholder="To" required />												
											</div>
											<div class="col-6 col-12-xsmall">
												<input type="text" name="fromDest"  value="" placeholder="From" required />												
											</div>
											<label for="departDate">Departure Date:</label>
											<div>
												<input type="text" name="departDate"  value="" placeholder="Example : 25/7/2020" required />						
											</div>	
									
											<!-- Break -->
											<div class="col-12">
												<ul class="actions">
													<li><input type="submit" value="Check Availability" class="primary" /></li>
												</ul>
											</div>
										</div>
									</form>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>							
							<p>* Only 0.01% trips slightly higher than counter price.</p> 
							<p>** Only applicable for transactions without the use of discount code and trips offered by certain companies.</p> 
							<p>*** For certain trips only, discount already reflected in the ticket price itself (i.e. lower price than bus counters).</p>
							<p>* Bus pictures are for reference only.</p>
							<p>* Trip durations are estimated time only.</p>
						</section>
						<section>
							<h4>We accept these types of currency.</h4>
							<ul class="alt">
								<li>Sing Dollar</li>
								<li>Malysia Ringgit</li>
								<li>Indon Rupiah</li>
								<li>Thai Baht</li>
								<li>Viet Dong</li>
								<li>Philipp Peso</li>
							</ul>
						</section>
						<section>
							<h4>Social Media</h4>
							<ul class="plain">
								<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>						
							</ul>
						</section>
					</div>					
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>