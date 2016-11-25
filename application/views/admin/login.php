<?php
$assets_location = base_url()."assets/bootstrap/";
$controllers_location = base_url()."application/controllers/";
?>

<!DOCTYPE html>
<html>
<head>

	<!-- Bootstrap Core CSS -->
    <link type="text/css" href="<?php echo $assets_location;?>dist/css/bootstrap.css" rel="stylesheet" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo $assets_location;?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<title>Login Admin</title>

</head>
<body>
	<div class="container col-lg-12 text-center">
		<h3>Halaman Login Admin</h3>
    </div>
		<form class="form-horizontal" method="post" action="dashboard/login">
			<div class="form-group">
				<label for="inputUsername" class="control-label col-xs-4">Username</label>
				<div class="col-xs-4">
					<input name="username" type="text" class="form-control" id="inputUsername" placeholder="Username">
				</div>
			</div>
			<div class="form-group">
				<label for="inputPassword" class="control-label col-xs-4">Password</label>
				<div class="col-xs-4">
					<input name="password" type="password" id="inputPassword" class="form-control" placeholder="Password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-xs-offset-4 col-xs-9">
					<button name="submit" type="submit" class="btn btn-primary">Login</button>
				</div>
			</div>
		</form>
</body>
</html>