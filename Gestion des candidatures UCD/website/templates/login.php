<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> UCD Login</title>
  <link href="../static/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amarante&display=swap" rel="stylesheet">
  <link href="../static/css/style.css" rel="stylesheet">
  <link href="../static/css//style2.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../static/css/font-awesome.min.css" />
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <script src="../static/js/jquery-2.1.1.min.js}"></script>
  <script src="../static/js/bootstrap.min.js"></script>

</head>
<section>


  <body>

    <div class="login-clean">
      <form action="../controller.php" method="post">
        <h2 class="sr-only">Login Form</h2>
        <div class="illustration">
          <i class="fa fa-user"></i>
        </div>
        <div class="form-group">
          <input class="form-control" type="text" name="username" placeholder="Username">
        </div>
        <div class="form-group">
          <input class="form-control" type="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
          <button class="btn btn-primary btn-block" type="submit" onclick="launch_toast()">Log In</button>
        </div>
        <a class="forgot" href="#">Forgot your password?</a>
      </form>
    </div>
</section>

<div id="toast">
	<div class="far fa-bell" id="img"></div>
	<div id="desc">A notification message..</div>
</div>



<script>

function launch_toast() {
		var x = document.getElementById("toast");
		x.className = "show";
		setTimeout(function() {
			x.className = x.className.replace("show", "");
		}, 5000);

	}
</script>
</body>