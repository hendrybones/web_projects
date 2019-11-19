
<!doctype <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ttu mdawida</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
  <script src="main.js"></script>
  <link rel="stylesheet"href="event.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <style>
  /* Make the image fully responsive */
  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  .h1{
    text-align: center;
  }
  .id-footer{
    border: 5px solid red;
  }
  </style>
</head>
<body>
<header>

<div class="container">
  <h1>TTU MDAWIDA ASSOCIACTION</h1>
  <nav class="navbar navbar-expand-sm bg-light justify-content-center">
  <!---logo--->
  <a class="navbar-brand" href="#">
  <img src="1.jpg" alt="logo" style="width:40px;">
  
  </a>
  
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#about">team</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">service</a>
    </li>
  </ul>
</nav>

  </div>
  </header>
  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="1.jpeg" alt="Los Angeles" width="1100" height="500">
      <div class="corosel-item">
      </div>
    </div>
    <div class="carousel-item">
      <img src="2.jpeg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">

      <img src="3.jpeg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<div class="container">
<div class="row">
<div class="mx-auto col-md-10 text-center">
<h2> TEAM</h2>
</div>
</div>
</div>

<div class="container">
<div class="row">
<div class="col-md-3">
  <h2>team</h2>
  <p> he is my roll model he gat big arms:</p>            
  <img src="21.jpeg" class="img-fluid rounded-circle" alt="v deseal" width="304" height="236"> 
</div>
<div class="col-md-3">
<h2>manager</h2>
  <p> he is my roll model he gat big arms:</p>            
  <img src="10.jpeg" class="img-fluid rounded-circle" alt="v deseal" width="304" height="236">
</div>
<div class="col-md-3">
<h2>manager</h2>
  <p> he is my roll model he gat big arms:</p>            
  <img src="13.jpeg" class="img-fluid rounded-circle" alt="v deseal" width="304" height="236">
</div>
<div class="col-md-3">
<h2>manager</h2>
  <p> he is my roll model he gat big arms:</p>            
  <img src="22.jpeg" class="img-fluid rounded-circle" alt="v deseal" width="304" height="236">
</div>
</div>
<div class="container">
<div class="row justfy-content-center" >
<div class="mx-auto col-lg-10 text-center">
<h3>  service</h3>
</div>
</div>

<div class="container">
<div id="#about">
<div class="row">
<div class="col-md-6">
<img src="11.jpeg" alt="service" >
</div>
<div class="col-md-6">
<h3>best service</h3>
<p> 
What is Lorem Ipsum?

Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
o</p>
</div>
</div>
</div>
</div>
<!----footer begins ---->


<footer>
<div class="container border:solid black" >
<div class="row">
<div class="mx-auto col-md-10 text-center">
<h3> FOOTER</h3>
</div>
</div>
</div>
<div class="container">
<div id="footer">
<div class="row">
<div class="col-md-4">
<p>social media:</p>
  <i class="fas fa-facebook"></i>
  <i class="fas fa-instagram"></i>
  <i class="fas fa-twitter"></i>
  <i class="fas fa-file"></i>
  <i class="fas fa-bars"></i>

</div>
<div class="col-md-4">
<h3>CONTACT US</h3>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
    <div class="form-group">
      <label for="pwd">comments:</label>
      <input type="textarea" class="form-control" id="pwd" textarea="Enter password" name="pswd">
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

</div>
<div class="col-md-4">
<h3>INFO</h3>
<p>Where can I get some?

There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
</div>
</div>
</div>
</footer>



</body>
</html>
