
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
</head>
<body>



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

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <header>
    <h1 style="color: #FFFFFF">Indianola University</h1>
    <p> <img src="img/header.jpg" alt="Indianola University Header" height="150px"></p>
  </header>

  <div class="container jumbotron">
    <h1 class="display-3">Hello, students!</h1>
    <p class="lead">Indianola University welcomes you and hopes you have a great experience. For any questions you may have, use the navigation bar above to navigate throughout the website. If you have any questions call 515-423-3881.</p>
    <hr class="my-4">
    <p>We hope you enjoy your stay at Indianola University.</p>
    <a class="btn btn-primary btn-lg" href="about.html" role="button">Learn more</a>
  </div>

  <article class="container">
    <h2 style="font-style: italic">Welcome</h2>
    <p>Welcome to the official website of Indianola University. We are happy to have you on our site. While looking around, if you have any questions on applying please call our recruitment office at 515-456-7894.</p>
    <p>Here at Indianola University we pride ourselves on a quality education. We have been described as the &quot;Harvard of the Midwest&quot;, but we don't think this really describes us. We look at it as Harvard is the Indianola College of the Ivy League. We are the best college in the entire universe. Our students have a 100% job placement rate after graduation. We also have 100% of our students graduate. These number cannot be beat by any college. The best part is, we also have a 100% acceptance rate! Located 15 minutes south of Des Moines, the location is unbeatable for college students.</p>
    <p>Please feel free to explore our website and see all that we have to offer! Thanks for visiting and <em> GO LEAF STORM</em>! </p>
  </article>

<?php
include '../resources/footer.php';
?>

</body>
</html>