document.addEventListener('DOMContentLoaded', function () {
    const mostrarImagen = document.getElementById('mostrar-imagen');
    const overlay = document.getElementById('overlay');
    const cerrarImagen = document.getElementById('cerrar-imagen');

    mostrarImagen.addEventListener('click', function () {
        overlay.style.display = 'block';
    });

    cerrarImagen.addEventListener('click', function () {
        overlay.style.display = 'none';
    });
});
