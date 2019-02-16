<?php

if (isset($_POST['text'])&&isset($_POST['searchfor'])&&isset($_POST['replacewith'])) 
{
	echo $text = $_POST['text'];
	echo $search = $_POST['searchfor'];
	echo $replace = $_POST['replacewith'];
	
	$string_length=strlen($search);
	
	if(!empty(text)&&!empty($search)&&!empty($replace)){
		
		while($strpos=strpos($text,$search,$offset)){
			
			 $offset=$strpos+$string_length;
			 $text=substr_replace($text,$replace,$strpos,$search_length);
			 
		}
		echo $text;
	}else{
		echo'pls fill the all fields';
	}

}



?>
<hr>
<form action="mera.php" method="POST">
	<textarea name="text" row="6" cols="30"></textarea><br><br>
	search for:<br>
	<input type="text" name="search"><br><br>
	Replace with:<br>
	<input type="text" name="replacewith"><br><br>
	<input type="Submit" value="Find and Replace">
</form>