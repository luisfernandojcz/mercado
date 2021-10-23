<html>
<link rel="stylesheet" href="carrito.css">
<body>
  <?php 
     session_start(); //Inicio sesion 
     if(isset($_POST['nombre'])){ 
     $nombre = $_POST['nombre']; 
     $_SESSION['usuario'] = $nombre; //Guardo el nombre del usuario en sesion 
     session_register('pedido'); 
}
    if(isset($_POST['agregar'])){ //Si se envió el primer formulario 
    $claves = array_keys($_POST); 
    $producto = $claves[1]; 
    if(!is_array($_SESSION['pedido'])) //Si no es un array 
{
    $_SESSION['pedido'] = array();
}
    if(array_key_exists("$producto",$_SESSION['pedido'])){ 
    $cantidad = $_SESSION['pedido']["$producto"]; 
    $_SESSION['pedido']["$producto"] = ++$cantidad; 
} 
else { 
    $_SESSION['pedido']["$producto"] = 1; 
} 
} 
if(isset($_GET['quitar'])){ //Si se envió el segundo formulario 
    $claves = array_keys($_GET); 
    $producto = $claves[1]; 
   unset($_SESSION['pedido'][$producto]); //Eliminar la posicion del arreglo 
} echo "<font face='Arial' size='5'>"; 
echo "Bienvenido : cliente "
?> 
<html> 
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
</head> 
<body> 
<form action="productos.php" method="post"> 
<input type="hidden" name="agregar"> 
<table border="6"> 
<tr> 
<td width="169"> 
    PRODUCTO: <b>BLACK MAMUT Reloj de Pulsera para Hombre</b><br> 
    DESCRIPCION: <b>Digital, Deportivo, Militar, Moderno, Juvenil, Multifuncional, Impermeable</b><br> 
    PRECIO: <b>$329.00</b><br> 
<input type="submit" name="BlM reloj $329.00" id="button" value="Añadir al carrito">
</td> 
<td width="169"> 
   PRODUCTO: <b>STAR WARS Playera Expressions</b><br>
   DESCRIPCION: <b>Playera para hombre, solo talla CH</b><br> 
   PRECIO: <b>$400.00</b><br> 
<input type="submit" name="STW Playera $400.00" id="button2" value="Añadir al carrito">
</td> 
<td width="169"> 
   PRODUCTO: <b>Nike Tenis Flex Experience Run 8 para Hombre </b><br> 
   DESCRIPCION: <b>Tenis para correr, solo talla (26.5 cm)</b><br> 
   PRECIO: <b>$1,316.00</b><br> 
<input type="submit" name="Tenis Nike $1,316.00" id="button3" value="Añadir al carrito">
</td> 
</tr> 
<tr> 
<td> 
   PRODUCTO: <b>Laptop HP</b><br> 
   DESCRIPCION: <b>Procesador Ryzen 5 con grafios integrados</b><br> 
   PRECIO: <b>$12,000.00</b><br> 
<input type="submit" name="Laptop HP $12,000.00" id="button3" value="Añadir al carrito">
</td> <td> 
   PRODUCTO: <b>Funko - Avengers Endgame - Iron Spider</b><br> 
   DESCRIPCION: <b>Figura de colección</b><br> 
   PRECIO: <b>$305.00</b><br> 
<input type="submit" name="Funko $305.00" id="button3" value="Añadir al carrito">
</td> 
<td> 
   PRODUCTO: <b>Sony DSC-W830 Cámara Digital Compacta</b><br> 
   DESCRIPCION: <b>12Mpx</b><br> 
   PRECIO: <b>$3,299.00</b><br> 
<input type="submit" name="Sony $3,299.00" id="button3" value="Añadir al carrito">
</td> 
</tr> 
<tr> 
<td> 
    PRODUCTO: <b>Celular LG k61</b><br> 
    DESCRIPCION: <b>Negro</b><br> 
    PRECIO: <b>$6,500.00</b><br> 
<input type="submit" name="Celular $6,500.00" id="button3" value="Añadir al carrito">
</td> 
<td> 
    PRODUCTO: <b>Play Station 5 1tb</b><br> 
    DESCRIPCION: <b>Gris</b><br> 
    PRECIO: <b>$8,000.00</b><br> 
<input type="submit" name="PS5 $8,000.00" id="button3" value="Añadir al carrito">
</td> 
<td> 
    PRODUCTO: <b>Impresora HP Basica</b><br> 
    DESCRIPCION: <b>Multifuncional</b><br> 
    PRECIO: <b>$3,500.00</b><br> 
<input type="submit" name="Impresora HP $3,500.00" id="button3" value="Añadir al carrito">
</td> 
</tr> 
</table> 
</form> 
<form action="productos.php" method="get"> 
<h1>CARRITO DE COMPRAS</h1> 
<input type="hidden" name="quitar"> 
<?php 
if(!empty($_SESSION['pedido'])){ //Si hay productos en el carrito
foreach($_SESSION['pedido'] as $prod => $unidades) { 
echo "$unidades unidades del producto $prod"; 
echo "<input type='Submit' name='$prod' value='Quitar'><br>"; } 
?> 
</form> 
<form action="confirmar.php" method="post"> 
<input type='Submit' name='Comprar' value="Confirmar compra"> 
</form> 
<?php 
} 
?> 
</body> 
</html>