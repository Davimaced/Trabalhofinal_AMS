<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>estrutura de repetição</title>
</head>
<body>
    <div class="container">
    <table border="1">
 <?php
            for ($i=1; $i<6; $i++)
        {
            echo '<tr>';
            $q=$i*$i*$i;
            echo "<td> $i </td>";
            echo "<td> $q </td>";
            echo '</tr>';
        }
    ?>
</table>   
</body>
</html>