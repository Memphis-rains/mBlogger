<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       <a class="navbar-brand" href="#"><b>mBlogger</b></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
        
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
        
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Topics
        </a>
          
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="ai.php">AI</a>
          <a class="dropdown-item" href="3d.php">3D Printing</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="w4m.php">Write for me</a>
        </div>
        <li class="nav-item">
        <a class="nav-link" href="contact.php">Contact Me</a>
      </li>
      </li>
          </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
	<div class="mx-2">
	<button class="btn btn-secondary" data-toggle="modal" data-target="#loginModal">Login</button>
	<button class="btn btn-secondary" data-toggle="modal" data-target="#signupModal">Sign up</button>
  </div>
</nav>
<!-- Button trigger modal -->


<!-- login -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login to mBLOGGER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-danger">Login</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sign-up to mBLOGGER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
	<label for="exampleInputEmail1">Mobile Number</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

      </div>
    </div>
  </div>
</div>
      
   
      <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.itij.com/sites/default/files/styles/og_image/public/2019-08/3d-printer-concept0.jpg?h=2d9a3ece&itok=WXIJHgx8" height=550px width="100%">
      <div class="carousel-caption d-none d-md-block">
          <h1 style="color:red"><strong>Welcome to mBlogger</strong></h1>
          <h3>Latest updates for upcomming technologies</h3>
          <button class="btn btn-danger">Artificial Intelligence</button>
          <button class="btn btn-primary">3D Printing</button>
          <button class="btn btn-success">Technology</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://thumbor.forbes.com/thumbor/960x0/https%3A%2F%2Fspecials-images.forbesimg.com%2Fimageserve%2F5f67d6b8af733458404e97bf%2FThe-4-Top-Artificial-Intelligence-Trends-For-2021%2F960x0.jpg%3Ffit%3Dscale"height=550px width="100%">
      <div class="carousel-caption d-none d-md-block">
        <h1 style="color:white"><strong>Learn technology with me</strong></h1>
          <h3>The home for techies</h3>
          <button class="btn btn-danger">Artificial Intelligence</button>
          <button class="btn btn-primary">3D Printing</button>
          <button class="btn btn-success">Technology</button>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIX3e7-pJbihcwmli-vVIruCpgZz7ozqLg0g&usqp=CAU"height=550px width="100%">
      <div class="carousel-caption d-none d-md-block">
        <h1 style="color:red"><strong>Technology is fun!</strong></h1>
          <h3>The home for techies</h3>
          <button class="btn btn-danger">Artificial Intelligence</button>
          <button class="btn btn-primary">3D Printing</button>
          <button class="btn btn-success">Technology</button>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
          
          
          <div class=container>
<div class="row mb-2">
    <div class="col-md-6 my-4">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">Global summits</h3>
          
          <p class="card-text mb-auto">Attend our global summit to be a part of jour journey.Join us to have the taste of this icinoic tachnologies and AI stuff.</p>
        
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://user-images.strikinglycdn.com/res/hrscywv4p/image/upload/c_limit,fl_lossy,h_9000,w_1200,f_auto,q_auto/533847/59419418_425892808221360_9121859346647482368_n_pjscad.jpg " width="200px" height="150px">
        </div>
      </div>
    </div>
    <div class="col-md-6 my-4" >
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Learn</strong>
          <h3 class="mb-0">Learn  stuff with us</h3>
          
          <p class="mb-auto">We teach rookies about the present and upcomming technologies that will help to shape the world </p>
          <a href="#" class="stretched-link"></a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://marketingland.com/wp-content/ml-loads/2015/11/idea_1920-800x600.jpg " width="200px" height="150px">
        </div>
      </div>
    </div>
    
              <div class=container>
<div class="row mb-2">
    <div class="col-md-6 my-4">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">cCamps</strong>
          <h3 class="mb-0">Attend our techno camps</h3>
          
          <p class="card-text mb-auto">WE organise tech camps thrice a uear in which all the smart technologies gather to show their perfomance</p>
        
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="data:image/jpeg;base64,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" width="200px" height="150px">
        </div>
      </div>
    </div>
    <div class="col-md-6 my-4" >
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Grow</strong>
          <h3 class="mb-0">Grow with us</h3>
          
          <p class="mb-auto">If you think you have any idea that can bring the boom in the technological market ,then we are here to help you.</p>
          <a href="#" class="stretched-link"></a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://www.globalfocusmagazine.com/wp-content/uploads/2020/02/Engaging_with_technology-scaled.jpg" width="200px" height="150px">
        </div>
      </div>
    </div>
            
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>