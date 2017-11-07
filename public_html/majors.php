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
</head>

   <!-- Main content -->
    <div class="container">
      <!-- This container moves below the menu bar -->
      <div class="below_menu_container">
      </div>
    </div>

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<body>
  <header>
  <h1 style="color: #FFFFFF">Indianola University</h1>
  <p><img src="img/header.jpg" alt="Indianola University Header" height="150px"></p>
  </header>

  <section class="container">
    <h1>Majors and Minors</h1>

    <p>Indianola University offers students a diverse selection of academic programs. Our professors are highly qualified, Due to our university size, most classes have a 14:1 student to faculty ratio, insuring students' success.</p>

    <article>
      <h3 style="font-style: italic">Majors</h3>
        <ul>
          <div class="col-xs-4">
            <li class="listtxt">Accounting</li>
            <li class="listtxt">Actuarial Science</li>
            <li class="listtxt">Biology</li>
            <li class="listtxt">Chemistry</li>
            <li class="listtxt">Computer Info Systems</li>
            <li class="listtxt">Computer Science</li>
            <li class="listtxt">Economics</li>
          </div>
          <div class="col-xs-4">
            <li class="listtxt">English</li>
            <li class="listtxt">French</li>
            <li class="listtxt">German</li>
            <li class="listtxt">Graphic Design</li>
            <li class="listtxt">History</li>
            <li class="listtxt">Mathematics</li>
            <li class="listtxt">Management</li>
          </div>
          <div>
            <li class="listtxt">Management Info Systems</li>
            <li class="listtxt">Music</li>
            <li class="listtxt">Physics</li>
            <li class="listtxt">Psychology</li>
            <li class="listtxt">Religion</li>
            <li class="listtxt">Sociology</li>
            <li class="listtxt">Theatre Arts</li>
          </div>
        </ul>

    </article>

     <article>
      <h3 style="font-style: italic">Minors</h3>
       <ul>
         <div class="col-xs-4">
            <li class="listtxt">Accounting</li>
            <li class="listtxt">Biology</li>
            <li class="listtxt">Chemistry</li>
            <li class="listtxt">Computer Info Systems</li>
            <li class="listtxt">Computer Science</li>
            <li class="listtxt">Economics</li>
            <li class="listtxt">English</li>
            <li class="listtxt">French</li>
            <li class="listtxt">German</li>
          </div>
          <div>
            <li class="listtxt">History</li>
            <li class="listtxt">Mathematics</li>
            <li class="listtxt">Management</li>
            <li class="listtxt">Psychology</li>
            <li class="listtxt">Sociology</li>
            <li class="listtxt">Theatre Arts</li>
            <li class="listtxt">Women's and Gender Studies</li>
            <li class="listtxt">World Religion</li>
            <li class="listtxt">Coaching</li>
          </div>
        </ul>
     
    </article>
  </section>
<?php
include '../resources/footer.php';
?>
</body>
</html>