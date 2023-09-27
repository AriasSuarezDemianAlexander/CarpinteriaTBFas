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

      <h1>Formulario de Pedidos</h1>
        <form>
        <div class="form-group">
                <label for="id_pedido">ID_Pedido:</label>
                <input type="text" id="id_pedido" name="id_pedido" required>
            </div>

            <div class="form-group">
                <label for="id_cliente">ID_cliente:</label>
                <input type="text" id="id_cliente" name="id_cliente" required>
            </div>

            <div class="form-group">
                <label for="id_empleados">ID_Empleados:</label>
                <input type="text" id="id_empleados" name="id_empleados" required>
            </div>
            
            <div class="form-group">
                <label for="fechaEntrega">Fecha de Entrega:</label>
                <input type="text" id="fechaEntrega" name="fechaEntrega" required>
            </div>

            <div class="form-group">
                <label for="estadodelpedido">Estado del pedido:</label>
                <input type="text" id="estadodelpedido" name="estadodelpedido" required>
            </div>

            <div class="form-group">
                <label for="totaldelpedido">Total del Pedido:</label>
                <input type="text" id="totaldelpedido" name="totaldelpedido" required>
            </div>

            <div class="form-group">
                <label for="metododepago">Metodo de Pago:</label>
                <input type="text" id="metododepago" name="metododepago" required>
            </div>

            <div class="form-group">
                <label for="paqueteria">Paqueteria:</label>
                <input type="text" id="paqueteria" name="paqueteria" required>
            </div>

    

            <button type="submit">Enviar</button>
        </form>

        </div>
    </header>

    <a href="#" id="mostrar-imagen">BASE DE DATOS</a>
    
    <div id="overlay" class="overlay">
        <div class="imagen-popup">
            <img src="img/base2.png" alt="Imagen Superpuesta">
            <span id="cerrar-imagen" class="cerrar-imagen">×</span>
        </div>
    </div>

     <script src="js/imagen.js"></script>
</body>
</html>
