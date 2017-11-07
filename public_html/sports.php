<!-- Kayla Aronow -->
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
    <h1>Indianola University Athletics</h1>

    <article>
      <h3 style="font-style: italic">Men's Sports</h3>
         <ul>
            <li class="listtxt">Baseball</li>
            <li class="listtxt">Basketball</li>
            <li class="listtxt">Cross Country</li>
            <li class="listtxt">Football</li>
            <li class="listtxt">Golf</li>
            <li class="listtxt">Soccer</li>
            <li class="listtxt">Swimming and Diving</li>
            <li class="listtxt">Tennis</li>
            <li class="listtxt">Track and Field</li>
            <li class="listtxt">Wrestling</li>
            </ul>
    
    </article>


    <article>
      <h3 style="font-style: italic">Women's Sports</h3>
         <ul>
            <li class="listtxt">Basketball</li>
            <li class="listtxt">Cross Country</li>
            <li class="listtxt">Golf</li>
            <li class="listtxt">Soccer</li>
            <li class="listtxt">Softball</li>
            <li class="listtxt">Swimming and Diving</li>
            <li class="listtxt">Tennis</li>
            <li class="listtxt">Track and Field</li>
            <li class="listtxt">Volleyball</li>
            </ul>
      
    </article>

    <article>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="recruit.html" role="button">Recruit Me</a>
  </p>
      <p>If you are interested in being recruited by Indianola University, email the respective coaches.</p>
       
     
    </article>
  </section>
<?php
include '../resources/footer.php';
?>
</body>
</html>