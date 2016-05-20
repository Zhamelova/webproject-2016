<html><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="jquery-1.12.3.min.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="index.css" rel="stylesheet" type="text/css">
  </head><body>
    <div class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
          </button>
          <a class="navbar-brand" href="inedx.php">Bon appetit</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-ex-collapse">
        <ul class="nav navbar-nav navbar">
          <li class="active" >
              <a href="recipes.php">Recipes</a>
            </li>
             <li class="active">
              <a href="gallery.php">Gallery</a>
            </li>
            </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
              <a href="login.php">Login</a>
            </li>
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
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"><img height="20" alt="Brand" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAMAAAC7IEhfAAAA81BMVEX///9VPnxWPXxWPXxWPXxWPXxWPXxWPXz///9hSYT6+vuFc6BXPn37+vz8+/z9/f2LeqWMe6aOfqiTg6uXiK5bQ4BZQX9iS4VdRYFdRYJfSINuWI5vWY9xXJF0YJR3Y5Z4ZZd5ZZd6Z5h9apq0qcW1qsW1q8a6sMqpnLyrn76tocCvpMGwpMJoUoprVYxeRoJjS4abjLGilLemmbrDutDFvdLPx9nX0eDa1OLb1uPd1+Td2OXe2eXh3Ofj3+nk4Orl4evp5u7u7PLv7fPx7/T08vb08/f19Pf29Pj39vn6+fuEcZ9YP35aQn/8/P1ZQH5fR4PINAOdAAAAB3RSTlMAIWWOw/P002ipnAAAAPhJREFUeF6NldWOhEAUBRvtRsfdfd3d3e3/v2ZPmGSWZNPDqScqqaSBSy4CGJbtSi2ubRkiwXRkBo6ZdJIApeEwoWMIS1JYwuZCW7hc6ApJkgrr+T/eW1V9uKXS5I5GXAjW2VAV9KFfSfgJpk+w4yXhwoqwl5AIGwp4RPgdK3XNHD2ETYiwe6nUa18f5jYSxle4vulw7/EtoCdzvqkPv3bn7M0eYbc7xFPXzqCrRCgH0Hsm/IjgTSb04W0i7EGjz+xw+wR6oZ1MnJ9TWrtToEx+4QfcZJ5X6tnhw+nhvqebdVhZUJX/oFcKvaTotUcvUnY188ue/n38AunzPPE8yg7bAAAAAElFTkSuQmCC"></a>
          </div>
        </div>
      </div>
      <div class="cover-image" style="background-image : url('http://bourkestreetbakery.com.au/wordpress/wp-content/uploads/2013/06/tarts1.jpg')"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-5 text-center">
            <h1 class="text-inverse">LOGIN</h1>
            <p class="text-primary">start to cook with us</p>
            <br>
            <br>
            <!-- FORM -->
            <form action="login_php.php" method="POST" >
              <div class="form-group has-warning">
                <label class="control-label" for="username" contenteditable="true">Username</label>
                <input class="form-control" id="username" placeholder="Enter username" type="text" name="username">
              </div>
              <div class="form-group has-warning">
                <label class="control-label" for="exampleInputPassword1">Password</label>
                <input class="form-control" id="password" placeholder="Password" type="password" name="password">
              </div>
              <input type="submit" id="submit" value="assiya"/>
            </form>
            <p id="result"></p>
            <!-- FORM end -->
             <script type="text/javascript">
                    $(function() {
                      $("#submit").click(function(){
                        var username = $("#username").val();
                        var password = $("#password").val(); 
                        $.ajax({
                          type: "POST",
                          url: "login_php.php",
                          data: {"username": username,"password":password},
                          cache: false,           
                          success: function(response){
                            if (response=="") {
                              $(location).attr('href',"index.php");
                            }else{
                              $("#result").html(response).css({color:"red",fontWeight:"bold"});
                            }
                          }
                        });
                        return false;
                      });
                    });
            </script>
            <!-- AJAX end -->
          </div>
        </div>
      </div>
    </div>
    <div class="carousel slide" id="fullcarousel-example" data-interval="false" data-ride="carousel">
      <div class="carousel-inner">
        <div class="item active">
          <div class="carousel-caption">
            <h2>Videos</h2>
            <p>Description</p>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#fullcarousel-example" data-slide="prev"><i class="icon-prev fa fa-angle-left"></i></a>
      <a class="right carousel-control" href="#fullcarousel-example" data-slide="next"><i class="icon-next fa fa-angle-right"></i></a>
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