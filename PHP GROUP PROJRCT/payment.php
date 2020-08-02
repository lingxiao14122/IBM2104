<!DOCTYPE html>
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
    <header class="special">
      <h2>Payment</h2>
    </header>
    <div class="#">
      <div class="content">
        <!-- Form -->
        <form method="post" action="paymentprocess.php?id=<?php echo $_GET['id']?>">
		<div class="row">
            <div class="creditCardForm">
              <div class="heading">
                <h1>Enter Details</h1>
              </div>
              <div class="payment">
                <form>
                  <div class="form-group" id="card-number-field">
                    <label for="owner">Name</label>
                    <input type="text" class="form-control" name="name" required />
                  </div>
                  
                  <div class="form-group owner">
                    <label for="cardNumber">Card Number</label>
                    <input type="text" class="form-control" name="cardNumber" required />
                  </div>

                  <div class="form-group CVV">
                    <label for="cvv">CVV</label>
                    <input type="text" class="form-control" name="cvv" required />
                  </div>

                  <div class="form-group CVV">
                    <label for="cvv">Expiration Date</label>
                    <input type="text" class="form-control" name="cardExpired" required />
                  </div>
                  <div class="form-group" id="credit_cards">
                    <img
                      src="http://demo.tutorialzine.com/2016/11/simple-credit-card-validation-form/assets/images/visa.jpg"
                      id="visa" />
                    <img
                      src="http://demo.tutorialzine.com/2016/11/simple-credit-card-validation-form/assets/images/mastercard.jpg"
                      id="mastercard" />
                    <img
                      src="http://demo.tutorialzine.com/2016/11/simple-credit-card-validation-form/assets/images/amex.jpg"
                      id="amex" />
                  </div>
                  <div class="form-group owner">
                    <label for="owner">Email</label>
                    <input type="text" class="form-control" name="email" required />
                  </div>
                  <div class="form-group owner">
                    <label for="owner">Phone Number</label>
                    <input type="text" class="form-control" name="phoneNum" required />
                  </div>

                  <div class="form-group CVV">
                    <label for="cvv">Number of Ticket(s) </label>
                    <input type="text" class="form-control" name="ticketNum" required />
                  </div>

                  <div class="form-group" id="pay-now">
                    <button type="submit" class="btn btn-default" id="confirm-purchase">
                      Confirm
                    </button>
                  </div>
                </form>
              </div>
            </div><!--End Payment Table -->
			<div class="creditCardForm">
			<div class="heading">
                <h1>Bus Ticket Details</h1>
            </div>
			<div class="payment">
        <?php
        
          require_once('connectdatabase.php');
          $id = $_GET['id'];

          $query = 'SELECT * FROM `busschedule` WHERE `id`="'.$id.'";';
          $result = $connect->query($query);

          if($result->num_rows == 1){
            $row = $result->fetch_assoc();

            echo '<form>
            <div class="form-group owner">
              <label for="cvv">Departure </label>
              <input type="text" class="form-control" name="departDate" value="'.$row['fromDest'].'" disabled />
            </div>           
          
            <div class="form-group owner">
              <label for="cvv">Destination </label>
              <input type="text" class="form-control" name="expired" value="'.$row['toDest'].'" disabled />
            </div>
            <div class="form-group owner">
              <label for="cvv">Departure Date </label>
              <input type="text" class="form-control" name="expired" value="'.$row['departDate'].'" disabled />
            </div>           
          </form>
        </div>';
          }
        
        ?>
			</div>
		</div><!--End of Row-->
        </form>
        <!-- END OF FORM -->
      </div>    
    </div>
	
  </section>

  <!-- Footer -->
  <footer id="footer">
    <div class="inner">
      <div class="content">
        <section>
          <p>* Only 0.01% trips slightly higher than counter price.</p>
          <p>
            ** Only applicable for transactions without the use of discount
            code and trips offered by certain companies.
          </p>
          <p>
            *** For certain trips only, discount already reflected in the
            ticket price itself (i.e. lower price than bus counters).
          </p>
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
            <li>
              <a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a>
            </li>
            <li>
              <a href="#"><i class="icon fa-facebook">&nbsp;</i>Facebook</a>
            </li>
            <li>
              <a href="#"><i class="icon fa-instagram">&nbsp;</i>Instagram</a>
            </li>
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