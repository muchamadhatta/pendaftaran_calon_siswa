<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Perancangan Sistem Simulasi Pra Try Out Pada SD Santa Theresia Depok</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  
  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
    ======================================================= -->
  </head>

  <body>
  <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <div id="login-page">
        <div class="container">
          <form class="form-login" action="cek_login.php" method="post">
            <h2 class="form-login-heading">L  O  G  I  N</h2>
            <div class="login-wrap">
              <div class="col-md-2"></div>
              <div class='col-md-4'>
               <img src='images/icon-adminn.png' alt='' width='150px' class='hidden-phone'>
               <br><br>
              </div>
              <div class="col-md-4"></div>
              
             <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
             <br>
             <input type="password" class="form-control" name="password" placeholder="Password">
             <label class="checkbox">
              <span class="pull-right">
                <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
              </span>
            </label>
            <br><br>
            <button class="btn btn-theme btn-block" href="index.html" type="submit"> L O G I N</button>
            <br><br>
          </div>
          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title">Forgot Password ?</h4>
                </div>
                <div class="modal-body">
                  <p>Enter your e-mail address below to reset your password.</p>
                  <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
                </div>
                <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                  <button class="btn btn-theme" type="button">Submit</button>
                </div>
              </div>
            </div>
          </div>
          <!-- modal -->
        </form>
      </div>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
    <script>
      $.backstretch("images/background.png", {
        speed: 500
      });
    </script>

    <footer class="footer">
     <!-- row -->
      <div class="row">
        <br>
        <div class="col-md-8 col-md-offset-2 text-center">
          <!-- footer copyright -->
          <div class="footer-copyright">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy; <script>document.write(new Date().getFullYear());</script> Skripsi 
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
          <!-- /footer copyright -->
        </div>
      </div>
      <!-- /row -->
    </footer>
  </body>

  </html>
