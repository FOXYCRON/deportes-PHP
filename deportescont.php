<html>
<head>
<title> Deportes </title>
</head>
<body background="imagenes/deportes">

<?php
$contador=0;
if (isset($_REQUEST['check1'])) {
$contador=$contador+1;
}

if (isset($_REQUEST['check2'])) {
$contador=$contador+1;
}

if (isset($_REQUEST['check3'])) {
$contador=$contador+1;
}

if (isset($_REQUEST['check4'])) {
$contador=$contador+1;
}
echo "$nom practica $contador deportes";
?>
</body>
</html>