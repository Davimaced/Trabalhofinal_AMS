<?php

    echo "Nome: ".$_GET ['nome']. " idade: " .$_GET['idade'].  "veiculo: " .$_GET['marca'] ;
        echo "<br>";
    if( $_GET['idade']  >= 21 ){
        echo "<br>";
        echo "maior idade total";
    }else if ( $_GET ['idade']>=18){
        echo "maior idade parcial";
    }else {
        echo "menor idade total ";
    } 

 ?>