<?php
$con = new pdo('mysql:host=localhost;dbname=guidance_stud_profiling', 'root', ''); 

// set the PDO error mode to exception
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	
?>

