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

      <h1>Formulario de Empleados</h1>
        <form>
        <div class="form-group">
                <label for="ID_Empleados">ID_Empleados:</label>
                <input type="text" id="ID_Empleados" name="ID_Empleados" required>
            </div>

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" required>
            </div>
            
            <div class="form-group">
                <label for="direccion">Direccion:</label>
                <input type="text" id="direccion" name="direccion" required>
            </div>

            <div class="form-group">
                <label for="telefono">Telefono:</label>
                <input type="text" id="telefono" name="telefono" required>
            </div>

            <div class="form-group">
                <label for="email">Correo Electrónico:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="INE">Fine:</label>
                <input type="text" id="INE" name="INE" required>
            </div>

            <div class="form-group">
                <label for="rfc">rfc:</label>
                <input type="text" id="rfc" name="rfc" required>
            </div>

    

            <button type="submit">Enviar</button>
        </form>

        </div>
    </header>

    <a href="#" id="mostrar-imagen">BASE DE DATOS</a>
    
    <div id="overlay" class="overlay">
        <div class="imagen-popup">
            <img src="img/base4.png" alt="Imagen Superpuesta">
            <span id="cerrar-imagen" class="cerrar-imagen">×</span>
        </div>
    </div>

     <script src="js/imagen.js"></script>
</body>
</html>
