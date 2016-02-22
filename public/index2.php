<?php require __DIR__.'/../private/header.php'; ?>

    <form class="centeredContent form-inline">
      <div class="input-group">
        <input class="form-control input-lg js_inputCode has-success has-feedback" type="text" placeholder="Teilnahmecode" id="inputSuccess" aria-describedby="inputSuccessStatus">

        <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
        <span id="inputSuccessStatus" class="sr-only">(success)</span>

      </div>
      <div class="js_response input-lg text-center"></div>
    </form>

<?php require __DIR__.'/../private/footer.php'; ?>
