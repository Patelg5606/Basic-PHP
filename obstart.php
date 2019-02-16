<?php ob_start(); ?>
<h1>My page</h1>
This is may page.
<?php

$redirect_page='http://google.co.uk';
$redirect= false;
if($redirect==true){
header('Location:'.$redirect_page);
}
ob_end_flush();
?>
$ip_address=$SERVER['REMOTE_ADDR'];