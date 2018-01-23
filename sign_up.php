<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
<!-- Latest compiled and minified CSS -->
  <?php 
    include ("public/includes.php");
   ?>
    <title>MancheChahiyo</title>
  </head>
  <body>

    <?php 
      include ("public/nav.php");
     ?>
     <div class="container-fluid layout">
      <div class="row">
         <div class="col-md-4"></div>
          <div class="col-md-4">
            <div class="alert alert-danger d-none" role="alert">
              This is a warning alert—check it out!
            </div>
            <div class="alert alert-success d-none" role="alert">
              This is a warning alert—check it out!
            </div>
             <form method="GET">
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1" required="">
                <label class="form-check-label" for="exampleCheck1">I accept the Terms and Conditions</label>
              </div>
              <input type="submit" class="btn btn-primary" value="Sign Up">
            </form>
          </div>
        <div class="col-md-4"></div>
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