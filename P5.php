<?php

        $nome = $_POST['nome'];
        $nota1 = $_POST['nota1'];
        $nota2= $_POST['nota2'];
        
        $media = ($nota1 + $nota2)/2;
        echo "nome:  $nome";
        echo " nota1:  $nota1";
        echo " nota2: $nota2 ";
        echo "media:  $media";
        
    ?>