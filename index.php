<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"">

    <!-- Bootstrap CSS -->
<!-- Latest compiled and minified CSS -->
	<?php 
    include ("public/includes.php");
   ?>
    <title>Steam Wallet Nepal | Making Steam Purchases Easier</title>
  </head>
  <body>

    <?php 
      include ("public/nav.php");
     ?>
     <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
       <ol class="carousel-indicators">
         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
       </ol>
       <div class="carousel-inner">
         <div class="carousel-item active">
           <img class="d-block w-100" src="images/pubg.jpg" alt="First slide">
         </div>
         <div class="carousel-item">
           <img class="d-block w-100" src="images/pubg.jpg" alt="Second slide">
         </div>
         <div class="carousel-item">
           <img class="d-block w-100" src="images/pubg.jpg" alt="Third slide">
         </div>
       </div>
       <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
       </a>
       <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
       </a>
     </div>
      <div class="container-fluid layout">
        <div class="row">
          <div class="col-md-3">
            <div class="card">
              <img src="images/st.jpg" width="286" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Steam Gift Card</h5>
                <p class="card-text">Loads your Steam account to make purchases.</p>
                <a href="#" class="btn btn-primary">Order</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="images/gp.jpg" width="286" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Google Play Gift Card</h5>
                <p class="card-text">Topup your Google Account to make purchase in Play Store or in-app.</p>
                <a href="#" class="btn btn-primary">Order</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="images/psn.jpg" width="286" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">PlayStation Network Card</h5>
                <p class="card-text">Topup your Playstation Account to make purchases in store or in-game.</p>
                <a href="#" class="btn btn-primary">Order</a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card">
              <img src="images/itunes.jpg" width="286" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Itunes Gift Card</h5>
                <p class="card-text">Top up your Itunes account to make purchases in store or in-game.</p>
                <a href="#" class="btn btn-primary">Order</a>
              </div>
            </div>
          </div>
        </div>
      </div>
     <?php 
      include("public/footer.php");
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>