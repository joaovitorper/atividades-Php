<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo Com PHP</title>
</head>
<body>
    <h1>Dia e noite</h1>
    <?php
    date_default_timezone_set("America/Sao_Paulo");
    $hoje =date ("d/m/Y");
    $agora =date("H:i");
    $hora =date("H");
    if ($hora <6 or $hora>18){
    echo "<img src='img/lua.png'>";
    }else{
    echo "<img src='img/sol.png'>";
    }
    echo "Hoje é dia ". $hoje." e agora são".$agora. "horas.";
    ?>
</body>
</html>