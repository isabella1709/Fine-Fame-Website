<?php

    $con = mysqli_connect("localhost:3306", "root", "@1234", "fineFame");

    $resultado = mysqli_query($con, "SELECT * FROM fineFame.quadro");

    $dados = array();

    while($registro = mysqli_fetch_assoc($resultado)){

        array_push($dados, $registro);
    }

    $json = json_encode($dados);
    echo $json;
?>