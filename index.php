<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title>Mini Instagram</title>
<style>
    body {
        background-image: url("img/page-bg.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: left 20px center;
    }


</style>
</head>
<body>
	<div class="container" style="padding:150px">
    <div class="row">
        <div class="span6 offset3">
	<form class="form-horizontal" style="border:1px solid" action="login.php" method="POST">
  <div class="control-group">
    <label class="control-label" for="inputEmail"><font color="white">Username</font></label>
    <div class="controls">
      <input type="text" id="inputEmail" placeholder="Username" name="username">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword"><font color="white"> Password</font></label>
    <div class="controls">
      <input type="password" id="inputPassword" placeholder="Password" name="password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox"> Remember me
      </label>
      <button type="submit" class="btn">Sign in</button>
    </div>
  </div>
</form>
 </div>
    </div>
</div>
</body>
</html>
