<?php 
  session_start();
  include 'connection.php';
  $name="";
  if (isset($_SESSION['id'])) {
    $id=$_SESSION['id'];
    $result=mysql_query("SELECT `ID`, `NAME` FROM `project` WHERE ID='$id'");
    $array=mysql_fetch_array($result);
    $name=$array['NAME'];
  }
 ?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery-1.12.3.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="gallery.css" rel="stylesheet" type="text/css">
  </head><body>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse"></button>
          <a class="navbar-brand">Bon appetit</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
          <ul class="nav navbar-nav navbar">
            <li class="active">
              <a href="recipes.php">Recipes</a>
            </li>
            <li class="active">
              <a href="gallery.php">Gallery</a>
            </li>
            <!-- CHECK is ADMIN -->
            <?php 
                if(isset($_SESSION['id']) && $_SESSION['id']==1 ){
                  echo "<li class='active'>
                          <a href='add_image_form.php'>Add image</a>
                        </li>";
                }
             ?>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <h3 style="margin-right:30px;margin-top:5px" ><?=$name?></h3>
            </li>
            <!-- CHECK is USER ON SITE -->
            <?php 
              if(isset($_SESSION['id'])){
                  echo "<li class='active'>
                          <a href='logout.php'>Logout</a>
                        </li>";
                }else{
                  echo "<li class='active'>
                          <a href='login.php'>Login</a>
                        </li>";
                }
             ?>
            <li class="active">
              <a href="signup.php">Sign up</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <h1 class="text-center">Gallery</h1>
                  </div>
                </div>
                <!-- SHOW IMAGES -->
                <?php
                    $arr=array(); 
                    $res=mysql_query("SELECT * FROM `images` WHERE 1");                    
                    while ($row=mysql_fetch_array($res)) {
                        $arr[]=$row;
                      }
                    foreach ($arr as $image) {
                      ?>

                      <div  class="col-md-4 text-center">
                        <img src="images/<?=$image['IMAGE']?>" class="img-responsive img-thumbnail ">
                        <?php 
                          if(isset($_SESSION['id']) && $_SESSION['id']==1 ){
                         ?>
                            <a href="delete_image.php?id=<?=$image['ID']?>">Delete</a>
                          <?php }?>
                        <h3><?=$image['NAME']?></h3>
                      </div>
                      
                      <?php
                    }
                 ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="section section-primary">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>Follow us</h1>
            <p>You can follow us on instagram,
              <br>twitter and facebook</p>
          </div>
          <div class="col-sm-6" draggable="true">
            <p class="text-info text-right"></p>
            <div class="row">
              <div class="col-md-12 hidden-xs text-right">
                <a href="https://instagram.com"><i class="fa fa-3x fa-fw fa-instagram text-inverse"></i></a>
                <a href="https://twitter.com"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                <a href="https://facebook.com"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  

</body>
</html>