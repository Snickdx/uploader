<?php  error_reporting( E_ALL ); ?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Material Design for Bootstrap fonts and icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">

    <!-- Material Design for Bootstrap CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">

    <title>Upload App</title>
    
    <style type="text/css">

    </style>
  </head>
  <body>
      <!-- As a heading -->
       <nav class="navbar navbar-dark bg-primary">
      <span class="navbar-brand mb-0 h1">Upload</span>
      <ul class="nav justify-content-end">
      <li class="nav-item">
        <a class="nav-link" style="color:white" href="index.php">Home</a>
      </li>
      </ul>
    </nav>

    
     <main role="main" class="container">
      
      <div class="jumbotron">
           <form  action="upload.php" method="POST" enctype="multipart/form-data">
            <div class="form-group" class="col">
                <label for="upload">Upload File</label>
                <div class="row">
                 <input id="upload" type="file" class="form-control-file btn btn-primary" name="file" />
                 <input type="submit" class="btn btn-primary"/>       
                </div>
            </div>
        </form>
      </div>
      
    </main>

  
</div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
  </body>
</html>