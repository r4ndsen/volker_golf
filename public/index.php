<?php require __DIR__.'/../bootstrap.php'; ?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Volker Golf</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Werner Spiegel">

    <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/components/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- <link rel="shortcut icon" type="image/png" href="favicon.png"> -->
  </head>

  <body>

    <form class="centeredContent form-inline">
      <div class="input-group">
        <input class="form-control input-lg js_inputCode" type="text" placeholder="Teilnahmecode"/>
        <span class="input-group-btn">
          <button class="btn btn-default btn-lg js_submitRequest" type="submit">Pr&uuml;fen</button>
        </span>
      </div>
    </form>
    <script src="vendor/components/jquery/jquery.min.js"></script>
    <script src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/action.js"></script>
  </body>
</html>
