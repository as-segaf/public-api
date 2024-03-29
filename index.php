<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>MOVIE</title>
  </head>
  <body>

  	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<div class="container">
	  	  <a class="navbar-brand" href="#">MOVIE</a>
	  	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
	  	    <span class="navbar-toggler-icon"></span>
	  	  </button>
	  	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	  	    <div class="navbar-nav">
	  	      <a class="nav-item nav-link active" href="#">Search Movie</a>
	  	    </div>
	  	  </div> 			
  		</div>
  	</nav>

  	<div class="container">
  		<div class="row mt-3 justify-content-center">
  			<div class="col-md-8">
  				<h1 class="text-center">Search Movie</h1>
  				<div class="input-group mb-3">
  				  <input type="text" class="form-control" placeholder="Movie's Tittle" id="search-input">
  				  <div class="input-group-append">
  				    <button class="btn btn-dark" type="button" id="search-button">Search</button>
  				  </div>
  				</div>
  			</div>
  		</div>

  		<hr>

  		<div class="row" id="movie-list">
  			
  		</div>
  	</div>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>