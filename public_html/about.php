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

     <!-- Main content -->
    <div class="container">
      <!-- This container moves below the menu bar -->
      <div class="below_menu_container">
      </div>
    </div>

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <header>
  <h1 style="color: #FFFFFF">Indianola University</h1>
  <p><img src="img/header.jpg" alt="Indianola University Header" height="150px"></p>
  </header>

  <section class="container">
    <h1>About Indianola University</h1>

    <article>
      <h2 style="font-style: italic">Contacts</h2>
      
      <p>If you would like to apply for admission please call 515-498-6874.</p>
      <p>If you would like to be recruited for sports please call 515-498-6873.</p>
      <p>If you would like to come on a visit please call 515-498-6875.</p>
      <p>For all other questions please call 515-498-9999.</p>
    </article>

    <article>
      <h2 style="font-style: italic">Home of the Leaf Storm</h2>

      <p>Indianola University is located in Indianola, Iowa. It is about 15 minutes south of downtown Des Moines. It is home to the famous Leaf Storm. The Leaf Storm are NCAA Division III. We have 10 varsity men's sports and 9 varsity women's sports. Click <a href="sports.html">here</a> to view the listing of the sports.</p>
    </article>

    <article>
      <h2 style="font-style: italic">Rivalry</h2>

      <p>On the other side of town from Indianola University sits a poor school that shall not be named. This school has a mascot of a storm. When the town of Indianola was founded, Indianola University was also founded. This other school tried to steal all of Indianola University's students a few years later. This set up a rivalry, with a huge rivalry football game that is always played on September 31st. You will want to get your tickets now! Call 515-466-5987 for tickets.</p>
      <img src="img/leaf_storm_vs_storm.PNG" alt="Leaf Storm Vs Storm">
    </article>
  </section>

<?php
include '../resources/footer.php';
?>
</body>
</html>