<!-- Tre Loge -->
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  
  <!-- This points us to the css sheet. -->
  <link rel="stylesheet" type="text/css" href="style_sheet.css">

    <!-- Main CSS styles for Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/simplex/bootstrap.min.css">

  <title>Indianola University</title>

<!-- Navigation Bar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
    <!-- Three line "hamburger" icon for the collapsed navigation -->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Title on nav bar -->
          <a class="navbar-brand" href="index.html">Indianola University</a>
        </div>

        <div id="navbar" class="collapse navbar-collapse">
        <?php
        include '../resources/navigation.php';
        ?>
        </div>
      </div>
  </nav>


   <!-- Main content -->
    <div class="container">
      <!-- This container moves below the menu bar -->
      <div class="below_menu_container">
      </div>
    </div>

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>

<body>
  <header>
  <h1 style="color: #FFFFFF">Indianola University</h1>
  <p><img src="img/header.jpg" alt="Indianola University Header" height="150px"></p>
  </header>

  <section class="container">
    <h1>Tuition and Fees</h1>

    <article>
    
      <p>Below are our current tuition and fees for the 2017-18 school year.</p>

<table class="table table-striped table table-inverse">
  <thead>
    <tr>
      <th>Tuition</th>
      <th>$80,564</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Activity Fee</td>
      <td>$125</td>
    </tr>
    <tr>
      <td>Computer Fee</td>
      <td>$1,250</td>
    </tr>
    <tr>
      <td>Intramural Fee</td>
      <td>$250</td>
    </tr>
    <tr>
      <th>Room Charge</th>
      <th>$6,529</th>
    </tr>
    <tr>
      <th>Board Charge</th>
      <th>$5,874</th>
    </tr>
    <tr>
      <th>Total Tuition and Fees</th>
      <th>$94,592</th>
    </tr>
  </tbody>
</table>

    <p>Unfortunately, at this time we do not provide any financial aid.</p>
    <p>For all of our European students our total tuition and fees in Euros is 79.272,58 &euro;. </p>

    </article>
    </section>
<?php
include '../resources/footer.php';
?>
</body>
</html>