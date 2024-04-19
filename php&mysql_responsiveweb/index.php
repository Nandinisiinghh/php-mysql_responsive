<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">


</head>
<?php

$con = mysqli_connect('localhost', 'root', '', 'responsiveweb');










$query = "SELECT MAX(id) AS max_value FROM userinfodata";


$result = mysqli_query($con, $query);

if ($result) {

  $row = mysqli_fetch_assoc($result);


  $maxValue = $row['max_value'];
  $maxValue = $maxValue + 1;
}









if (isset($_POST['save'])) {

  $id = $maxValue;
  $user = $_POST['user'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $comment = $_POST['comment'];

  $query = "insert into userinfodata (id, user, email, mobile, comment) values( $id, '$user', '$email', $mobile, '$comment')";

  mysqli_query($con, $query);
}

?>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Nandini</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>


  <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/home1.jpg" alt="Los Angeles" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="images/home2.jpg" alt="Chicago" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="images/home3.jpg" alt="New York" width="1100" height="500">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>

  <section class="my-5">
    <div class="py-5">
      <h3 class="text-center">About us</h3>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-12">
          <img src="images/aboutt.jpg" class="img-fluid aboutimg">
        </div>
        <div class="col-lg-6 col-md-6 col-12">
          <h2 class="display-4">I am Nandini</h2>
          <p class="py-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis impedit suscipit quo maxime voluptatum, ab dolorum minus fugit quisquam velit in esse? Delectus ab odit omnis beatae incidunt quis nesciunt!</p>
          <a href="about.php" class="btn btn-success">check more</a>
        </div>
      </div>

    </div>
  </section>

  <section class="my-5">
    <div class="py-5">
      <h3 class="text-center">Our Services</h3>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images/girl.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Beautifull girl.</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>

        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images/girl.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Beautifull girl.</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>

        </div>
        <div class="col-lg-4 col-md-4 col-12">
          <div class="card">
            <img class="card-img-top" src="images/girl.jpg" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Beautifull girl.</h4>
              <p class="card-text">Some example text.</p>
              <a href="#" class="btn btn-primary">See Profile</a>
            </div>
          </div>

        </div>

      </div>

    </div>

    <section class="my-5">
      <div class="py-5">
        <h3 class="text-center">Our Gallery</h3>
      </div>

      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/gurl.jpg" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/gurl.jpg" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/gurl.jpg" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/gurl.jpg" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/gurl.jpg" class="img-fluid pb-4">
          </div>
          <div class="col-lg-4 col-md-4 col-12">
            <img src="images/gurl.jpg" class="img-fluid pb-4">
          </div>
        </div>
      </div>
    </section>


    <section class="my-5">
      <div class="py-5">
        <h3 class="text-center">About us</h3>
      </div>

      <div class="w-50 m-auto">
        <form action="index.php" method="post">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" autocomplete="off" class="form-control">

          </div>
          <div class="form-group">
            <label>Email Id</label>
            <input type="text" name="email" autocomplete="off" class="form-control">

          </div>
          <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="mobile" autocomplete="off" class="form-control">

          </div>

          <div class="form-group">
            <label>Comment</label>
            <textarea class="form-control" name="comment">
            </textarea>

          </div>
          <button type="submit" class="btn btn-success" name="save">submit</button>


        </form>
      </div>

    </section>

    <footer>
      <p class="p-3 bg-dark text-white text-center">@Nandini</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>