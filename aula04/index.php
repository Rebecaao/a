<?php

$valor =(int)0;
$cont = (int)0;
$resultado = (string) null;

if(isset($_POST['btnCalc'])){

    $valor = $_POST['txtNumero'];

    /*while($cont <= $valor) {

        echo($cont.'<br>');
        $cont++;
    }
}
*/

for($cont=0;$cont<=$valor;$cont++){
    //echo($cont.'<br>');
    $resultado.= $cont.'<br>'
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name="frRepeticao" method="post" action="index.php">
    Digite um numero: <input type="text" name="txtNumero">
    <input type="submit" name="btnCalc" value="Calcular">
    <?=$resultado?>
    </form>
</body>
</html>