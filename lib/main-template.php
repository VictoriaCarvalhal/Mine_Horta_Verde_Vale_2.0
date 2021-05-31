<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php pageTitle();?></title>
    <?php headinclude();?>
  </head>
  <body>
    <nav class="navbar navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#"><?php pageTitle();?></a>
        </div>
      </div>
    </nav>
    <div class="container">
      <?php mainContent();?>
    </div>
    <?php endinclude();?>
  </body>
</html>
