<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEDIDOS</title>
    <link rel="stylesheet" href="formularios.css">
</head>
<body>
    <header class="header">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

        <div class="menu container">
            <a href="#" class="logo">TBF</a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="img/menu.png" class="menu-icono" alt="Logo">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php" class="regresar-inicio"><i class="fas fa-arrow-up"></i></a></li></ul>
                </ul>
            </nav>
        </div>

        <div class="header-content container">
            <div class="header-txt">

      <h1>DETALLES DEL PEDIDO</h1>
        <form>
        <div class="form-group">
                <label for="id_Detalles">id_Detalles:</label>
                <input type="text" id="id_Detalles" name="id_Detalles" required>
            </div>

            <div class="form-group">
                <label for="id_pedido">ID_Pedido:</label>
                <input type="text" id="id_pedido" name="id_pedido" required>
            </div>

            <div class="form-group">
                <label for="id_producto">id_Producto:</label>
                <input type="text" id="id_producto" name="id_producto" required>
            </div>

            <div class="form-group">
                <label for="ID_Empleados">ID_Empleados:</label>
                <input type="text" id="ID_Empleados" name="ID_Empleados" required>
            </div>

            <div class="form-group">
                <label for="Cantidad">Cantidad disponible:</label>
                <input type="text" id="Cantidad" name="Cantidad" required>
            </div>

            <div class="form-group">
                <label for="Precio">Precio:</label>
                <input type="text" id="Precio" name="Precio" required>
            </div>

            <div class="form-group">
                <label for="SubTotal">subtotal:</label>
                <input type="text" id="SubTotal" name="SubTotal" required>
            </div>

            <div class="form-group">
                <label for="Descuentoa">Descuentoa:</label>
                <input type="text" id="Descuentoa" name="Descuentoa" required>
            </div>

    

            <button type="submit">Enviar</button>
        </form>

        </div>
    </header>

    <a href="#" id="mostrar-imagen">BASE DE DATOS</a>
    
    <div id="overlay" class="overlay">
        <div class="imagen-popup">
            <img src="img/base5.png" alt="Imagen Superpuesta">
            <span id="cerrar-imagen" class="cerrar-imagen">×</span>
        </div>
    </div>

     <script src="js/imagen.js"></script>
</body>
</html>
