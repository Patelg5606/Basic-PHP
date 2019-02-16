<?php ob_start ;?>

<?php

$redirect_page='http://google.co.uk';
$redirect= false;
if($redirect==true){
header('Location:'.$redirect_page);
}

?>
