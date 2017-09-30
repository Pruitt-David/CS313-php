<?php session_start(); ?>

<!DOCTYPE html>
<html>
  <!-- HEAD -->
  <head>
    <title>Browsing</title>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">


    <link rel="stylesheet" type="text/css" href="styles.css">
    <script type="text/javascript" src="scripts.js"></script>
  </head>
  <!-- BODY -->
  <body>
    <?php 
      $nameDict = array(
        "salix" => "Salix matsudana \'Tortuosa\'",
        "malus" => "Malus domestica",
        "populus" => "Populus tremula \'Erecta\'",
        "aesculus" => "Aesculus hippocastanum",
        "acer" => "Acer pseudosieboldianum",
        "edonumus" => "Euonymus alata \'compactw\'",
        "betula" => "Betula occidentallis"
      );

      $priceDict = array(
        "salix" => 100,
        "malus" => 150,
        "populus" => 200,
        "aesculus" => 250,
        "acer" => 300,
        "edonumus" => 100,
        "betula" => 120
      )

      $_SESSION["fave"] = "dog";
      // $_SESSION["names"] = $nameDict;
      // $_SESSION["prices"] = $priceDict;


     ?>
    <!-- NAVBAR -->
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="prove03.php">Job's Nursery</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="prove03.php">Browsing</a></li>
        </ul>
      </div>
    </nav>

    <!-- CONTENT -->
    <div class="container">
      <div id="simple-nav-header" class="col-xs-12">
        <a href="#"><i class="fa fa-5x fa-arrow-circle-o-left pull-left" aria-hidden="true"></i></a>
        <a href="cart.php"><i class="fa fa-5x fa-arrow-circle-o-right pull-right" aria-hidden="true"></i></a>
        <h1>Browsing</h1>

      </div> <!-- END SCREEN NAV HEADER -->

      <div id="idDiv">
        <table class="table-striped">
          <tr>
            <th>Buy</th>
            <th>Name</th>
            <th>Price</th>
          </tr>
        <?php 

          foreach ($nameDict as $key => $value) {
            // echo "$value";

            echo "
                  <tr>
                    <td><input type=\"checkbox\" name=\"$value\"></input></td>
                    <td>$value</td>
                    <td>$priceDict[$key]</td>
                  </tr>";

          };

         ?>
       </table>

      </div> <!-- END ID DIV -->
    </div> <!-- END CONTAINER --> 


    <!-- FOOTER -->
    <div class="footer col-xs-12">
      <!-- <h4> Here's another shameless link to my blog.  -->
        <br> <br> <br> <br> <br> <br> 
      <!-- </h4> -->
    </div>



  </body>
  
</html>