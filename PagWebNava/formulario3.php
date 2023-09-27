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

      <h1>Formulario de Productos</h1>
        <form>
        <div class="form-group">
                <label for="id_producto">id_Producto:</label>
                <input type="text" id="id_producto" name="id_producto" required>
            </div>

            <div class="form-group">
                <label for="NombreProducto">Nombre Producto:</label>
                <input type="text" id="NombreProducto" name="NombreProducto" required>
            </div>

            <div class="form-group">
                <label for="Descripcion">Descripcion:</label>
                <input type="text" id="Descripcion" name="Descripcion" required>
            </div>
            
            <div class="form-group">
                <label for="Costo">Costo:</label>
                <input type="text" id="Costo" name="Costo" required>
            </div>

            <div class="form-group">
                <label for="stock">Stock disponible:</label>
                <input type="text" id="stock" name="stock" required>
            </div>

            <div class="form-group">
                <label for="UnidadDeMedida">Unidad De Medida:</label>
                <input type="text" id="UnidadDeMedida" name="UnidadDeMedida" required>
            </div>

            <div class="form-group">
                <label for="FehcaDeIngreso">Fehca De Ingreso:</label>
                <input type="text" id="FehcaDeIngreso" name="FehcaDeIngreso" required>
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
            <img src="img/base3.png" alt="Imagen Superpuesta">
            <span id="cerrar-imagen" class="cerrar-imagen">×</span>
        </div>
    </div>

     <script src="js/imagen.js"></script>
</body>
</html>
