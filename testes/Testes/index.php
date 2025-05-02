<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $csgo = mysqli_connect("localhost","root","","db_base");

    $pesq = mysqli_query($csgo, "SELECT * FROM client");

    while($exibe = mysqli_fetch_array($pesq)){
        $nome = $exibe['id'];
        $endereco = $exibe['Endereco'];
        $cpf = $exibe['cpf'];
        
        echo $nome."<br>";
        echo $endereco. "<br>";
        echo $cpf. "<br>";
    }
    ?>


</body>
</html>