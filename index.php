<?php
  require_once('localization/languages.php');
  global $messages; global $languages; global $lang;

  //check if language is provided, and if so if it belongs to a supported one - otherwise load default (el)
  $lang = isset($_GET['l']) ? (in_array($_GET['l'], array_keys($languages)) ? $_GET['l'] : 'el' ) : 'el';
  
  //load localization
  require_once('localization/' . $lang . '.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php echo $messages['meta_description']; ?>">
    <meta name="author" content="Demetris Gerogiannis (aka DpG)">

    <meta property="og:url" content="https://www.workremotely.gr/sms"/>
    <meta property="og:type" content="page"/>
    <meta property="og:title" content="<?php echo $messages['og_title']; ?>"/>
    <meta property="og:description" content="<?php echo $messages['og_description']; ?>"/>


    <link rel="canonical" href="https://getbootstrap.com/docs/3.3/examples/jumbotron/">

    <title><?php echo $messages['title']; ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="https://getbootstrap.com/docs/3.3/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/3.3/examples/jumbotron/jumbotron.css" rel="stylesheet">


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="https://getbootstrap.com/docs/3.3/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>.go-bold{font-weight:bold;} .flag{width:18px; margin-right: 5px;}</style>
  </head>
  <body>
    <div class="container">
      <div class="btn-group" role="group" aria-label="<?php echo $messages['select-language']; ?>">
        <?php
          foreach($languages as $key=>$val) {
            echo '<a class="btn btn-secondary ' . ($key==$lang ? 'go-bold' : '') . '" href="index.php?l=' . $key . '"><img class="flag" src="./localization/flags/' . $val['icon'] . '.png"/>' . $val['title'] . '</a>';
          }
        ?>
      </div>
      <hr/>
      <br/>
      <p><?php echo $messages['intro-help']; ?></p>
      <form id='sms-form'>
        <div class="form-group">
            <label for="full-name"><?php echo $messages['full-name']; ?></label>
            <input type="full-name" class="form-control" id="full-name" aria-describedby="full-name-help" placeholder="<?php echo $messages['full-name-placeholder']; ?>">
            <small id="full-name-help" class="form-text text-muted"><?php echo $messages['full-name-hint']; ?></small>
        </div>
        <div class="form-group">
            <label for="address"><?php echo $messages['address']; ?></label>
            <input type="address" class="form-control" id="address" aria-describedby="address-help" placeholder="<?php echo $messages['address-placeholder']; ?>">
            <small id="address-help" class="form-text text-muted"><?php echo $messages['address-hint']; ?></small>
        </div>
        
        <div class="form-group">
            <p><b><?php echo $messages['address-hint']; ?>:</b></p>
            <p>1. <?php echo $messages['reason_1']; ?></p>
            <a href="#" onclick="javascript:prepareSMS(1);" class="btn btn-primary"><?php echo $messages['create_sms']; ?></a>
            <hr/>
            <p>2. <?php echo $messages['reason_2']; ?></p>
            <a href="#" onclick="javascript:prepareSMS(2);" class="btn btn-primary"><?php echo $messages['create_sms']; ?></a>
            <hr/>
            <p>3. <?php echo $messages['reason_3']; ?></p>
            <a href="#" onclick="javascript:prepareSMS(3);" class="btn btn-primary"><?php echo $messages['create_sms']; ?></a>
            <hr/>
            <p>4. <?php echo $messages['reason_4']; ?></p>
            <a href="#" onclick="javascript:prepareSMS(4);" class="btn btn-primary"><?php echo $messages['create_sms']; ?></a>
            <hr/>
            <p>5. <?php echo $messages['reason_5']; ?></p>
            <a href="#" onclick="javascript:prepareSMS(5);" class="btn btn-primary"><?php echo $messages['create_sms']; ?></a>
            <hr/>
            <p>6. <?php echo $messages['reason_6']; ?></p>
            <a href="#" onclick="javascript:prepareSMS(6);" class="btn btn-primary"><?php echo $messages['create_sms']; ?></a>
            <hr/>
        </div>
      </form>
      <br/>
      <p>
        <b><?php echo $messages['important']; ?>:</b> <?php echo $messages['liability-declaration']; ?>
      </p>
      <br/><br/>
      <small>        
        <p>
            <b><?php echo $messages['privacy-notice']; ?>:</b> <?php echo $messages['privacy-message']; ?>
        </p>
        <center>
            <a href="#" onclick="javascript:cleanCookies();"><?php echo $messages['delete-cookies']; ?></a>
        </center>
      </small>

      <hr>

      <footer>
        <p> Crafted with love by <a href='https://www.github.com/dgerog' targe='_blank'>Demetris Gerogiannis (aka DpG)</a>. - Share the knowledge! Share the passion! - Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a></p>
      </footer>
    </div>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://getbootstrap.com/docs/3.3/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="https://getbootstrap.com/docs/3.3/assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- Custom Scripts -->
    <script src="js/cookies.js"></script>
    <script src="js/sms.js.php"></script>
    <script>
        var messages = <?php echo json_encode($messages['error']); ?>;
        $(document).ready(function() {
            $('#full-name').val(getCookie('fn'));
            $('#address').val(getCookie('ad'));
        });
    </script>
  </body>
</html>