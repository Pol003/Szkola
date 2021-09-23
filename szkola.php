<!DOCTYPE>
<html lang="pl">
<head>
<meta charset="utf-8">
<title> Zstio</title>
<style>
*{padding:0;margin:0;}
#lewo{
	margin-top:25px;
	flot:left;
	border-right:2px solid black;
	width:20%;
	height:200px;
}
#prawo{
	margin-top:25px;
	flot:left;
	width:80%;
	position:absolute;
	left:350px;
	top:150px;
}
#dol{
	background-color:red;
	width:700px;
	text-align:center;
	padding:5px;
}
</style>

</head>
<body>
<img src="baner.jpg">
<div id="lewo">
<h1>Menu</h1>
<li>
<ul><a href="dodaj.php">Dodaj ucznia</a><br/></ul>
<ul><a href="usun.php">Usuń ucznia</a></ul>
</li>
</div>
<div id="prawo">
<h1>Spis uczniów:</h1>

</div>
<div id="dol">
Autor: Kamil &copy2021
</div>
</body>
</html>
