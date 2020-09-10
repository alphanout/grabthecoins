<!DOCTYPE html>
<html lang="en">
<head>
  <title>Grab the coin</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="mystyle.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body> 

<header role="banner">
	<h1>Hi <?php echo $_POST["name"]; ?>, </h1>
</header>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4">
    	<div class="card">
      	<img class="card-img-top" src="unlock.png" alt="Card image cap">
				<div class="card-block">
				<a href="game.html" class="btn btn-primary">Begin with level 1, Go BRO Go</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
    	<div class="card">
      	<img class="card-img-top" src="lock.png" alt="Card image cap">
				<div class="card-block">
					
					<a href="#" class="btn btn-primary">Complete previous to unlock level 2</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
    	<div class="card">
      	<img class="card-img-top" src="lock.png" alt="Card image cap">
				<div class="card-block">
					<a href="#" class="btn btn-primary">Complete previous to unlock level 3</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
    	<div class="card">
      	<img class="card-img-top" src="lock.png" alt="Card image cap">
				<div class="card-block">
					<a href="#" class="btn btn-primary">Complete previous to unlock level 4</a>
				</div>
			</div>
		</div>
		<div class="col-lg-4">
    	<div class="card">
      	<img class="card-img-top" src="lock.png" alt="Card image cap">
				<div class="card-block">
					<a href="#" class="btn btn-primary">Complete previous to unlock level 5</a>
				</div>
			</div>
		</div>
	</div>
	
</div>


</body>
</html>
