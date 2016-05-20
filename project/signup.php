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
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse"> </button>
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
             
            </button>
          
          </div>
        </div>
      </div>
      <div class="cover-image" style="background-image : url('http://bourkestreetbakery.com.au/wordpress/wp-content/uploads/2013/06/tarts1.jpg')"></div>
      <div class="container">
        <div class="row">
          <div class="col-md-5 text-center">
            <h1 class="text-inverse">SIGN UP</h1>
            <p class="text-primary">start to cook with us</p>
            <br>
            <br>
            <!-- FORM -->
            <form >
              <div class="form-group has-warning">
                <label class="control-label" for="username">Name</label>
                <input class="form-control" id="name" placeholder="Enter Name" name="name" type="text">
              </div>
              <div class="form-group has-warning">
                <label class="control-label" for="username" contenteditable="true">Username</label>
                <input class="form-control" id="username" placeholder="Enter username" type="text" name="username">
              </div>
              <div class="form-group has-warning">
                <label class="control-label" for="exampleInputPassword1">Password</label>
                <input class="form-control" id="password" placeholder="Password" type="password" name="password">
              </div>
              <input type="submit" id="submit" value="send">
            </form>
            <p id="result"></p>
            <!-- FORM end -->

            <!-- AJAX -->
            <script type="text/javascript">
                    $(function() {
                      $("#submit").click(function(){
                        var username = $("#username").val();
                        var password = $("#password").val();
                        var name = $("#name").val();  
                        $.ajax({
                          type: "POST",
                          url: "signup_php.php",
                          data: {"username": username,"password":password,"name":name},
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