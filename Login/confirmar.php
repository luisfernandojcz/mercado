<html>
<link rel="stylesheet" href="finalizar.css">
<?php 
session_start(); 
echo "<font face='Arial' size='6'>";
echo "<h1 align='center'>FELICIDADES</h1> <h2 align='center'>acaba de comprar</h2>"; 
foreach($_SESSION['pedido'] as $prod => $unidades) { 
echo "<p align='center'>$unidades $prod</p>"; 
} 
?>
<h2 align='center'>Gracias por su compra</h2> 
<h2>Vuelva pronto</h2> 
<a href="index.php">TERMINAR</a>
</html>