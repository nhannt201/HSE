<!doctype html>
<html lang="en">
  <head>
    <title>Test</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
</head>
  <body>
      
    <!-- Nav -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
          <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                  <a class="nav-link" href="#">Active <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#">Link</a>
              </li>
            </div>
          </ul>
      </nav>
    <!-- End Nav -->


    <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-append">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
    <div class="card my-4">
          <h5 class="card-header">Categories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Web Design</a>
                  </li>
                  <li>
                    <a href="#">HTML</a>
                  </li>
                  <li>
                    <a href="#">Freebies</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
          </div>
        </div>

    </div>
       <?php
				  if (isset($_POST['submit'])) { //isset de kiem tra xem co click vao button submit chua
					$hovaten = $_POST['hovaten'];
					$namsinh = $_POST['namsinh'];
					$link = $_POST['link'];
				
				?>
      <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-4 mt-4">
                <img class="img-fluid rounded" src="<?=$link;?>" alt="">
            </div>
            <div class="col-lg-7 mt-4">
                <div>
                  
                  <div class="card-body">
                    <h4 class="card-title">TEST POST</h4>
					<?php echo '<p class="lead">'.$hovaten.'</p>
                    <p class="card-text">'.$namsinh.'</p>'; ?>
                  </div>
				
               
            </div>
        </div>
      </div> <?php } ?>
      <hr>  
      <div class="row">
        <div class="col-lg-4 mt-4">
            <img class="img-fluid rounded" src="http://placehold.it/300x300" alt="">
        </div>
        <div class="col-lg-7 mt-4">
            <div>
              
              <div class="card-body">
                <h4 class="card-title">Title</h4>
                <p class="card-text">Text</p>
              </div>
           
        </div>
    </div>
  </div> 
  <hr>  
  <div class="row">
    <div class="col-lg-4 mt-4">
        <img class="img-fluid rounded" src="http://placehold.it/300x300" alt="">
    </div>
    <div class="col-lg-7 mt-4">
        <div>
          
          <div class="card-body">
            <h4 class="card-title">Title</h4>
            <p class="card-text">Text</p>
          </div>
       
    </div>
</div>
</div> 
<hr>  
    </div>
        
    <!-- /.row -->

  </div>
  <!-- /.container -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>