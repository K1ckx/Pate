<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<h1>
    Poner numeros del 1 al 10
</h1>
<div class="num">
    
<?php

/*Para poner numeros del 1 al 10*/
for ($i=0; $i<=10 ; $i++) {
echo $i;
}

?>
</div>
<br><br><br>
<h1>
    Poner datos de personas con array
</h1>
<?php

$personas = array(
    [   "nombre"=>"Lucas",
        "edad"=>"20",
        "ciudad"=>"mra",
    ],
    [
        "nombre"=>"Milena",
        "edad"=>"15",
        "ciudad"=>"la chaca",
    ],
);

foreach ($personas as $persona) {
    echo "Nombre:".$persona['nombre']."<br>";
    echo "edad:".$persona['edad']."<br>";
    echo "ciudad:".$persona['ciudad']."<br>";
}

?>
<br><br><br>
<h1>
    hacer una tabla con un array y un foreach con datos
</h1>
<div class="table" >
<?php

$am=array('nombre'=>' Giuliano','apellido'=>' Ibarrola');
$mult=array('paloma',
array('mra','central','paraguay')
);

echo "<table border='4px'>";
foreach ($am as $x) {
echo "<tr><td>".$x."</td></tr>";
}

?>
</div>




</body>
</html>