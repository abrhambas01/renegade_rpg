<?php
setcookie("name","Daniel",time() + 86400 ) ;
$_SESSION['username'] = "Daniel";
session_start(); 
?>
<!-- part 2 -->
<?php
/**/
// cookies -  saves information of the user in client side - browser
// sessions - saves information in server side - 

/*setting sessions*/
$_SESSION['email'] = $email ; 
$_SESSION['password'] = $password ; 
$_SESSION['username'] = "dani948a";

if (!isset($_SESSION['username'])){
	echo $_SESSION['username'];
}
else { 

}

