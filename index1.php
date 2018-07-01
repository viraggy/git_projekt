<?php 
// config
include 'config.php';
include 'class/mysql_gateway.php';
	//új osztály létrehozása, ami a mysql_gateway.php-ben lett definiálva-itt van a kapcsolat
$db = new MG(); 


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset=utf-8 />
	<title>PHP MySql connect example</title>
	<link rel="stylesheet" type="text/css" media="screen" href="css/master.css" />
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>
<body>
	<h3>PHP and MySql communication</h3>	
	
	<?php
	  $q = "SELECT * FROM humans ";
	  $arr = $db->get_array( $q, 1 );
	  echo "<pre>";
	  print_r($arr);
	  echo "</pre>";

	?>
	
</body>
</html>