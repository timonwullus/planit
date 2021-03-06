<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Todos - <?php echo $title; ?></title>
    <?php /* NEW */ ?>
    <?php echo $css;?>
    <meta 	name="viewport"
		content="initial-scale=1.0,
				  width=device-width" />
  </head>
  <body>
    <div class="container">
      <?php
        if(!empty($_SESSION['error'])) {
          echo '<div class="error box">' . $_SESSION['error'] . '</div>';
        }
        if(!empty($_SESSION['info'])) {
          echo '<div class="info box">' . $_SESSION['info'] . '</div>';
        }
      ?>

      <?php echo $content;?>
    </div>
    <?php /* NEW */ ?>
    <?php echo $js; ?>
    <script src="js/validate.js"></script>
  </body>
</html>
