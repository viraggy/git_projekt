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
	  	$conn = mysql_connect('localhost','root','' ) or die( mysql_error() );

	  	// Kapcsolat ellenőrzése --> ha sikerült, akkor kiíratjuk hogy sikerült a kapcsolat
	  	/*if ($conn = TRUE) {
	  			echo "A kapcsolat sikerült!";
	  		}	
*/
	  	mysql_set_charset('utf8', $conn);  //karekterkódolás beállítása
	  	mysql_select_db('mydb');		// munka adatbázis beállítása--> amiben dolgozni fogunk

	  	$lekerdezes = "SELECT * FROM humans ";
	  	$visszateresi_ertek = mysql_query($lekerdezes);

	  	echo "A lekérdezés eredményének sorainak száma : <b>". mysql_num_rows($visszateresi_ertek).".</b></br>";

	  	//ellenőrzés hogy van -e eredménye a lekérdezésnek--> ha nincs akkor végetér a pr. vagyis kiszáll
	  	//if (mysql_num_rows($visszateresi_ertek) < 1) return;

	  	//lekérdezés megjelenítése,kiíratása --> asszoc tömb
	  	while ($sor = mysql_fetch_assoc($visszateresi_ertek) ) {
	  		echo "<pre>";
	  		print_r($sor);
	  		echo "</pre>";
	  	}
	  	$conn->close();


	?>
	
</body>
</html>