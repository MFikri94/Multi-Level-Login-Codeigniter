<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="row">
      <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">LOGO</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <!--ACCESS MENUS FOR ADMIN-->
                <?php if($this->session->userdata('level')==='1'):?>
                  <li class="active"><a href="#">Dashboard</a></li>
                  <li><a href="#">Posts</a></li>
                  <li><a href="#">Pages</a></li>
                  <li><a href="#">Media</a></li>
                <!--ACCESS MENUS FOR STAFF-->
                <?php elseif($this->session->userdata('level')==='2'):?>
                  <li class="active"><a href="#">Dashboard</a></li>
                  <li><a href="#">Pages</a></li>
                  <li><a href="#">Media</a></li>
                <!--ACCESS MENUS FOR AUTHOR-->
                <?php else:?>
                  <li class="active"><a href="#">Dashboard</a></li>
                  <li><a href="#">Posts</a></li>
                <?php endif;?>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url('login/logout');?>">Sign Out</a></li>
              </ul>
            </div><!--/.nav-collapse -->
          </div><!--/.container-fluid -->
        </nav>

        <div class="jumbotron">
          <h1>Welcome Back <?php echo $this->session->userdata('username');?></h1>
        </div>

      </div>
    </div>

    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>
