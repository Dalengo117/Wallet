<?php
    require 'modelo_grafico.php';

    $MG = new Modelo_Grafico();
    $consulta = $MG ->TraerDatosGraficosPie();
    echo json_encode($consulta);
?>
