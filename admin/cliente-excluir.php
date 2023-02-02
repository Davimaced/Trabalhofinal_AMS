<?php 

$idcliente = $_GET['idcliente'];

require "Cliente.class.php";

$cliente = new Cliente();
$cliente->idcliente = $idcliente;
$cliente->excluir();
$msg = "Excluido com sucesso!";

?>

<?php $title = "Excluir Cliente"; ?>
<?php include "includes/header.php"; ?>

<section class="container">
    <?php echo $msg; ?>
</section>

<?php include "includes/footer.php"; ?>