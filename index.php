<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="dist/app.css">
    <title>php-ajax-dischi</title>
  </head>
  <body>
    <!-- Header -->
    <header>
      <div class="header-container">
        <img src="img/logo.png" alt="logo">
      </div>
      <?php include 'database.php'
       ?>
       <select name="search" id="search-cd">
       <option value="">All</option>
       <?php foreach ($database as $value) {
         ?>
         <option value="<?php echo $value['author'] ?>"><?php  echo $value['author'] ?></option>
         <?php }
         ?>
         </select>

    </header>
    <!-- /Header -->

    <!-- Main -->
    <main>
      <div class="main-container">

      </div>

    </main>
    <!-- /Main -->

    <!-- Handlebars -->
    <!-- template cd -->
    <script id="entry-template" type="text/x-handlebars-template">
      <div class="cd">
        <img class="cd-image" src="{{poster}}" alt="{{title}}">
        <h3 class="cd-title">{{title}}</h3>
        <h4 class="cd-author">{{author}}</h4>
        <h5 class="cd-date">{{date}}</h5>
      </div>
    </script>

    <!-- il mio script -->
    <script src="dist/app.js" charset="utf-8"></script>
  </body>
</html>
