<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Clean Blog - Start Bootstrap Theme</title>

  <!-- Bootstrap core CSS -->


  <link href= '<?php echo asset("vendor/bootstrap/css/bootstrap.min.css"); ?>' rel="stylesheet">

  
  <!-- Custom styles for this template -->
  <link href= '<?php echo asset("css/blog.css"); ?>' rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="#">My Blog</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">Post Details</a>
          </li>
          
        
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url(<?php echo asset('img/post-bg.jpg'); ?>">
<!-- <header class="masthead" style="<?php //echo asset("background-image: url('img/post-bg.jpg')"); ?>"> -->

    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>Post Title</h1>
            <h2 class="subheading">Description of the post here</h2>
            
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
       
       <h2 class="section-heading">Post Title</h2>

          <p>As we got further and further away, it [the Earth] diminished in size. Finally it shrank to the size of a marble, the most beautiful you can imagine. That beautiful, warm, living object looked so fragile, so delicate, that if you touched it with a finger it would crumble and fall apart. Seeing this has to change a man.</p>

          <a href="#">
            <img class="img-fluid" src= '<?php echo asset("img/post-sample-image.jpg"); ?>' alt="">
          </a>
        
          <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore, and this is exploration at its greatest.</p>

          <div class="clearfix">
          <a class="btn btn-primary float-right" href="<?php echo url('/'); ?>">Back Home &rarr;</a>
        </div>
        </div>
      </div>
    </div>
  </article>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
           
          <p class="copyright text-muted">Copyright &copy; 2020</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src='<?php echo asset("vendor/jquery/jquery.min.js"); ?>'></script>
  <script src= '<?php echo asset("vendor/bootstrap/js/bootstrap.bundle.min.js"); ?>'></script>

</body>

</html>
