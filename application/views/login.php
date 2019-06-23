<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login Sistem Penunjang Keputusan</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url("ast/css/bootstrap.min.css"); ?>">
    <script src="<?php echo base_url("ast/js/bootstrap.min.js");?>"></script>
  </head>
<body>
  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand">Sistem Penunjang Keputusan</a>
        </div>
        </div>
</nav>
<br><br><br><br><br>
  <div class="container">  
    <div class="panel panel-default">
      <div class="page-header">
<div class="container" style="margin-top: 70px;">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Silahkan Login</div>
                <div class="panel-body">
                    <?=print_error()?>
                    <?php echo form_open('login');?>
                    <div class="form-signin">       
                        <div class="form-group">
                            <label for="username">USERNAME</label>
                            <input type="text" class="form-control" name="username"autofocus>
                        </div>
                        <div class="form-group">
                            <label for="password">PASSWORD</label>
                            <input type="password" class="form-control" name="password">
                        </div>       
                        <button class="btn btn-lg btn-info btn-block" type="submit">Masuk</button>
                        <br>
                        <?php echo $this->session->flashdata("error");?>        
                    </div>
                </div>  
            </div> 
        </div>      
    </div>
</div>
</div>
</div>
    <footer class="footer">
      <div class="container">
        <span class="glyphicon glyphicon-copyright-mark" align="center">Sistem Penunjang Keputusan</span>
      </div>
    </footer>    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo base_url("ast/js/bootstrap.min.js");?>"></script>
    </body>
</html>