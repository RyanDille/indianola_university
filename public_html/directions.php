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
    <h1>Directions and Hours</h1>

  <article>
    <h3 style="font-style: italic">University Hours</h3>
    <table class="table table-striped table table-inverse">
      <thead>
        <tr>
          <th>Day</th>
          <th>Hours</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Monday-Friday</td>
          <td>8:00am-4:00pm</td> 
        </tr>
        <tr>
          <td>Saturday-Sunday</td>
          <td>10:00am-2:00pm</td> 
        </tr>
      </tbody>
    </table>
  </article>

    <article>
      <h3 style="font-style: italic">Directions</h3>

      <p><em>From Des Moines, IA:</em> Head south on Highway 65/69 until you reach Indianola. Take a left onto Girard Ave. Continue on street for 4 blocks. Take right onto East C Street. The campus will appear on your right.</p>
      <p><em>From I35:</em> Exit onto Highway 5. Continue for 8 miles and take the exit for Highway 65/69. Head south on Highway 65/69 until you reach Indianola. Take a left onto Girard Ave. Continue on street for 4 blocks. Take right onto East C Street. The campus will appear on your right.</p>
    <p><img src="img/map.png" alt="Indianola University Map"></p>
    </article>
  </section>
<?php
include '../resources/footer.php';
?>
</body>
</html>