
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
        <!-- actual content of this page -->
        <div class="inner-left"> <!-- start first table div -->
          <header class="special">
            <h2>list of destinations & buses base on dates</h2>
            <p>
              choose wisely
            </p>
          </header>

          <!-- Table -->
          <table width="100%" border="1" cellspacing="1" cellpadding="1">
            <tr>
              <td>Departure</td> <!-- from where -->
              <td>Destination</td> <!-- to where -->
              <td>Departure Date</td>
              <td>Buses</td>
              <td colspan="1">Action</td>
            </tr>
<?php    

  if ($result->num_rows > 0) {
  //keep loop print data as there is still data to print
    while ($row = $result->fetch_assoc()) {    //array fetching

      $id = $row['id']; //this is used to locate row and be used for edit and delete

      echo "<tr>";  //echo $row['COULUMN THAT U WANT']; 
      echo "<td>".$row['toDest']."</td>";
      echo "<td>".$row['fromDest']."</td>";
      echo "<td>".$row['departDate']."</td>";
      echo "<td>".$row['buses']."</td>";
      echo "<td><a href = 'payment.php?id=$id'>BUY TICKET</a></td>"; 
      echo "</tr>";
    }

  } else {

    echo "<script type='text/javascript'>alert('Error: Could not found any buses!');window.location='index.php';</script> ";

  }

?>
          </table>
          <form method="post" action="index_processing.php">
            
            
          </form>
        </div> <!-- end of first table div -->
        
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
