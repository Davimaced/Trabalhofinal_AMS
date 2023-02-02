<?php 

$id = $_GET['id'];

require_once "cliente.class.php";

$cliente = new cliente();
$cliente->id = $id;
$cliente->excluir();
$msg = "Excluido com sucesso!";

?>

<?php $title = "Excluir Usuario"; ?>
<?php include "includes/header.php"; ?>

<section class="container">
    <?php echo $msg; ?>
</section>

<?php include "includes/footer.php"; ?>