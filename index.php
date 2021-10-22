
	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<?php 
			require('require_file.php');
	 	?>
		<link rel="stylesheet" href="index.css">
	</head>
	<body>
		<div class="container-fluid">
			<div class="list-group login_title" style="text-align: center;">
			  <p class="list-group-item ">
			    Login to Laundry Shop
			  </p>
			  <div>
			  	<form class="form-horizontal">
				  <div class="form-group" style="padding: 0 30px;">
				    
				    <div class="col-sm-12 ">
				      <input type="text" class="form-control inputEmail" id="inputEmail3" placeholder="Email">
				    </div>
				  </div>
				  <div class="form-group" style="padding: 0 30px;">
				    
				    <div class="col-sm-12 ">
				      <input type="password" class="form-control inputPassword" id="inputPassword3" placeholder="Password">
				    </div>
				  </div>
				  <div class="form-group mind_check">
				    <div class="col-sm-offset-2 col-sm-10" style="margin-bottom: 10px;">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox"> Remember me
				        </label>	
				      </div>
				      <div class="col-sm-offset-2 col-sm-2 sign_in">
				      <button type="submit" class="btn btn-default">Login</button>
				    </div>
				    </div>
				    
				  </div>
				  
				</form>
			  </div>
			</div>

		</div>
		<div class="login-help">
		      <p>Forgot your password? <a href="index.php">Click here to reset it</a>.</p>
		    </div>
	</body>
	</html>
