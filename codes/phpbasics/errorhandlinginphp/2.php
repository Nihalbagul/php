<?php


if( !file_exists("file.txt") ) {
	die("File is not present");
}


else {
	$file = fopen("file.txt", "w");
}
?>
