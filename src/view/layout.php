<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Todos - <?php echo $title; ?></title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <main>
      <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="error box">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="info box">' . $_SESSION['info'] . '</div>';
        }
      ?>
      <header><h1>Todos - <?php echo $title; ?></h1></header>
      <?php echo $content;?>
    </main>
    <script src="script.js"></script>
  </body>
</html>
