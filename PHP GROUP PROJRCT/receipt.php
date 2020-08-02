<!DOCTYPE html>
<html>
  <head>
    <title>Bus Ticket Booking System</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, user-scalable=no"
    />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <link rel="stylesheet" href="assets/css/main.css" />
  </head>
  <style>
    .inner {
      width: 58rem;
    }
    .tg {
      border-collapse: collapse;
      border-spacing: 0;
    }
    .tg td {
      border-color: black;
      border-style: solid;
      border-width: 1px;
      font-family: Arial, sans-serif;
      font-size: 14px;
      overflow: hidden;
      padding: 16px 20px;
      word-break: normal;
    }
    .tg th {
      border-color: black;
      border-style: solid;
      border-width: 1px;
      font-family: Arial, sans-serif;
      font-size: 14px;
      font-weight: normal;
      overflow: hidden;
      padding: 16px 20px;
      word-break: normal;
    }
    .tg .tg-i2l1 {
      background-color: #ffffff;
      border-color: #ffffff;
      color: #000000;
      font-family: Verdana, Geneva, sans-serif !important;
      text-align: left;
      vertical-align: top;
      width: 339px;
    }
    .tg .tg-b0es {
      background-color: #ffffff;
      border-color: #ffffff;
      font-weight: bold;
      text-align: center;
      vertical-align: top;
    }

    .tg-b0es {
      background-color: #ffffff;
      border-color: white;
      font-weight: bold;
      text-align: center;
      vertical-align: top;
      font-weight:bold;
      border-width: 0px;
      border-bottom: black;

    }
  </style>
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
    <section id="main" class="wrapper">
      <div class="inner">
        <header class="special">
          <h2>Purchase History</h2>
          
        </header>
        <div class="content">
          <div class="heading">
            <h2>Thank you for your order!</h2>
          </div>
          <div style="text-align: left;">
            <span style="font-size: medium; font-weight: bold;">
              We're just letting you know your ticket has been recieved and is
              now being processed through our system. Your purchase history are
              shown below for your reference. </span>
            <br/>
          </div>

          <?php
            require_once('connectdatabase.php');

            if(empty($_GET)){
              $id = $_POST['id'];
            } else {
              $id = $_GET['id'];
            }

            $historyQuery = "SELECT * FROM `history` WHERE `id` = '$id'";
            $historyResult = $connect->query($historyQuery);

            $historyRow = $historyResult->fetch_assoc();

            $busQuery = 'SELECT * FROM `busschedule` WHERE `id` = "'.$historyRow['busid'].'"';
            $busResult = $connect->query($busQuery);

            $busRow = $busResult->fetch_assoc();
          ?>

          <div style="text-align: left;">
            <span style="font-size: medium;"><br /></span>
          </div>

          <div style="text-align: left;">
            <span style="font-size: medium;"></span>
          </div>

          <div style="text-align: left;">
            <span style="font-size: medium;"><br /></span>
          </div>

          <table class="tg">
            <tbody>
              <tr>
                <td class="tg-b0es" colspan="2" style="font-size: 20pt;"><b>Ticket Detail</b></td>
              </tr>
              <tr>
                <td class="tg-b0es" colspan="2" >    </td>
              </tr>
              <tr>
                <td class="tg-i2l1">Ticket ID</td>
                <td class="tg-i2l1">Ticket Number</td>
              </tr>
              <tr>
                <td class="tg-i2l1"><?php echo $historyRow['id'];?></td>
                <td class="tg-i2l1"><?php echo $historyRow['ticketNum']?></td>
              </tr>
              <tr>
                <td class="tg-i2l1">Bus</td>
                <td class="tg-i2l1">Origin</td>
              </tr>
              <tr>
              <td class="tg-i2l1"><?php echo $busRow['buses']?></td>
                <td class="tg-i2l1"><?php echo $busRow['fromDest']?></td>
                
              </tr>
              <tr>
                <td class="tg-i2l1">Destination</td>
                <td class="tg-i2l1">Depature Date</td>
              </tr>
              <tr>
                <td class="tg-i2l1"><?php echo $busRow['toDest']?></td>
                <td class="tg-i2l1"><?php echo $busRow['departDate']?></td>
              </tr>
              
            </tbody>
            
          </table>
          <br/>
          <hr/>
          <br/>
          <table class="tg">
            <tbody>
              <tr>
                <td class="tg-b0es" colspan="2" style="font-size: 20pt;"><b>Customer Detail</b></td>
              </tr>
              <tr>
                <td class="tg-b0es" colspan="2" ></td>
              </tr>

              <tr>
                <td class="tg-i2l1">Name</td>
                <td class="tg-i2l1">Phone Number</td>
              </tr>
              <tr>
                <td class="tg-i2l1"><?php echo $historyRow['name'];?></td>
                <td class="tg-i2l1"><?php echo $historyRow['phoneNum'];?></td>
              </tr>

              <tr>
                <td class="tg-i2l1">Email</td>
                <td class="tg-i2l1"></td>
              </tr>
              <tr>
                <td class="tg-i2l1"><?php echo $historyRow['email'];?></td>
                <td class="tg-i2l1"></td>
              </tr>
              
              
            </tbody>
            
          </table>
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
