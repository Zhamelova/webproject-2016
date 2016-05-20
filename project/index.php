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
    <title>Bon appetit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="index.css" rel="stylesheet" type="text/css">
  </head><body>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
          </button>
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
            </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <h3 style="margin-right:30px;margin-top:5px" ><?=$name?></h3>
            </li>
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
    <div class="cover">
      <div class="hidden-lg hidden-md hidden-sm hidden-xs navbar">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
            </button>
            <a class="navbar-brand"><img height="20" alt="Brand" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAA81BMVEX///9VPnxWPXxWPXxWPXxWPXxWPXxWPXz///9hSYT6+vuFc6BXPn37+vz8+/z9/f2LeqWMe6aOfqiTg6uXiK5bQ4BZQX9iS4VdRYFdRYJfSINuWI5vWY9xXJF0YJR3Y5Z4ZZd5ZZd6Z5h9apq0qcW1qsW1q8a6sMqpnLyrn76tocCvpMGwpMJoUoprVYxeRoJjS4abjLGilLemmbrDutDFvdLPx9nX0eDa1OLb1uPd1+Td2OXe2eXh3Ofj3+nk4Orl4evp5u7u7PLv7fPx7/T08vb08/f19Pf29Pj39vn6+fuEcZ9YP35aQn/8/P1ZQH5fR4PINAOdAAAAB3RSTlMAIWWOw/P002ipnAAAAPhJREFUeF6NldWOhEAUBRvtRsfdfd3d3e3/v2ZPmGSWZNPDqScqqaSBSy4CGJbtSi2ubRkiwXRkBo6ZdJIApeEwoWMIS1JYwuZCW7hc6ApJkgrr+T/eW1V9uKXS5I5GXAjW2VAV9KFfSfgJpk+w4yXhwoqwl5AIGwp4RPgdK3XNHD2ETYiwe6nUa18f5jYSxle4vulw7/EtoCdzvqkPv3bn7M0eYbc7xFPXzqCrRCgH0Hsm/IjgTSb04W0i7EGjz+xw+wR6oZ1MnJ9TWrtToEx+4QfcZJ5X6tnhw+nhvqebdVhZUJX/oFcKvaTotUcvUnY188ue/n38AunzPPE8yg7bAAAAAElFTkSuQmCC"></a>
          </div>
        </div>
      </div>
      <div class="cover-image" style="background-image : url('http://www.bonappetit.com/wp-content/uploads/2016/05/nanas-chocolate-vinegar-cake-groat-greatest-recipe-of-all-time.jpg')"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1 class="text-inverse">Chocolate cake</h1>
            <p class="text-primary">start to cook with us</p>
            <br>
            <br>
            <a class="btn btn-lg btn-primary">Click me</a>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <img src="http://www.marthastewart.com/sites/files/marthastewart.com/styles/wmax-1500/public/d25/med104694_0509_lemon_cake/med104694_0509_lemon_cake_horiz.jpg?itok=EvwEmrr1" class="img-responsive">
            <h2>Lemon drizzle cake</h2>
            <p>Having put lots of effort into making your gifts, take a bit of time to
              wrap them up. Sheets of cellophane are great and can be tied together with
              festive ribbons and decorations. Or look out for reasonably priced jars,
              dishes and cups, which make any gift look really special and can be used
              again afterwards.</p>
          </div>
          <div class="col-md-4">
            <img src="http://www.taste.com.au/images/recipes/tas/2011/11/berry-pavlova-22585_l.jpeg" class="img-responsive">
            <h2>Strawberry Pavlova</h2>
            <p>Place a sheet of parchment paper on a sheet pan. Draw a 9-inch circle
              on the paper, using a 9-inch plate as a guide, then turn the paper over
              so the circle is on the reverse side. (This way you won't get a pencil
              mark on the meringue.)</p>
          </div>
          <div class="col-md-4">
            <img src="https://heavyeditorial.files.wordpress.com/2016/02/red-velvet-thumb.jpg?quality=65&amp;strip=all" class="img-responsive">
            <h2>Red Velvet</h2>
            <p>The BEST Red Velvet Cake Recipe. best red velvet cake recipe (Same red
              velvet cake recipe with more food coloring to achieve a brighter red.)
              This red velvet cake recipe is SUPERB!!!! And it passes the stick to the
              back of the fork test like a champ!</p>
          </div>
        </div>
      </div>
    </div>
    <div class="carousel slide" id="fullcarousel-example" data-interval="false" data-ride="carousel">
          <a class="left carousel-control" href="#fullcarousel-example" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
      <a class="right carousel-control" href="#fullcarousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
    </div>
    <div id="carousel-example" data-interval="false" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/bd1rmAL7ir8" allowfullscreen=""></iframe>
          </div>
        </div>
        <div class="item">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/6wmJCdwhHjs" allowfullscreen=""></iframe>
          </div>
        </div>
        <div class="item">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/exRchffOmRY" allowfullscreen=""></iframe>
          </div>
        </div>
        <div class="item">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1OdcVQzsVnE" allowfullscreen=""></iframe>
          </div>
        </div>
        <div class="item">
          <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XIBHIq2hDRA" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#carousel-example" data-slide="prev"><i class="icon-prev  fa fa-angle-left"></i></a>
      <a class="right carousel-control" href="#carousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
    </div>
    <footer class="section section-primary">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>Follow us</h1>
            <p>You can follow us on instagram,
              <br>twitter and facebook</p>
          </div>
          <div class="col-sm-6">
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
  

</body></html>