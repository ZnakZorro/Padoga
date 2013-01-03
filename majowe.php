<html lang=pl> 
<head> 
	<meta http-equiv="X-UA-Compatible" content="chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<meta charset="ISO-8859-2"> 
<meta content="text/html; charset=ISO-8859-2" http-equiv="content-type">
<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
	
	<title>Pogoda na majowym</title> 
	<meta http-equiv="Content-Language" content="pl"/> 
	<meta name="description" content="rwd">
	<meta name="content" content="rwd">
	<meta name="author" content="rwd">
<style>@import url(http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700&subset=latin,latin-ext);
body{font-family:"PT Sans Narrow"}

		.well {padding:5px;}
		table {font-size:16px;}
		/*td {border-right:1px solid gray;}*/
	</style>
	<!--[if IE]>
		<link href=ie.css rel=stylesheet />
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]--> 
</head> 

<body> 
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12 well">
			<a href="http://xrsrvweb.wios.szczecin.pl/iseo/aktualne_parametr2.php?parametr=54&date_input=<?php echo date('Y-m-d'); ?>">Stacja</a>
			<?php
$dzis=date('Y-m-d');
$majowe='http://xrsrvweb.wios.szczecin.pl/iseo/aktualne_parametr2.php?parametr=54&date_input='.$dzis;
//print $majowe;

$plik=file_get_contents($majowe);
//preg_match('/<td>Szczecin ul\. Andrzejewskiego<\/td>(.*?)<\/tr>/',$plik,$m);
preg_match('/<table(.*?)>(.*?)<\/table>/is',$plik,$m);

$arr=explode('</tr>',$m[2]);

echo '<table>';
	//echo $arr[0].'</tr>';
	echo $arr[1]."</tr>\n";
	echo $arr[2]."</tr>\n";
	echo $arr[3]."</tr>\n";
echo '</table>';

/*
print "<textarea style='width:90%; height:60%;'>";
print_r($arr);
print "</textarea>";
print "<textarea style='width:90%; height:60%;'>";
print_r($plik);
print "</textarea>";
*/


?>
			</div>
		</div><!--//row -->
	</div><!--//container -->
</body>
</html>	