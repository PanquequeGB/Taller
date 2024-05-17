document.addEventListener('DOMContentLoaded', function() {
    const agregarEquipoBtn = document.getElementById('agregarEquipo');
    const equiposDiv = document.getElementById('equipos');

    function agregarEquipo() {
        const nuevoEquipoDiv = document.createElement('div');
        nuevoEquipoDiv.classList.add('equipo');

        nuevoEquipoDiv.innerHTML = `
            <label for="categoria">Categoría del Equipo:</label>
            <select name="categoria[]">
                <option value="portatil">Portátil</option>
                <option value="desktop">Desktop</option>
                <option value="celular">Celular</option>
                <option value="tablet">Tablet</option>
                <option value="otro">Otro</option>
            </select>

            <label for="modelo">Modelo:</label>
            <input type="text" name="modelo[]" required>

            <label for="numero_serie">Número de Serie:</label>
            <input type="text" name="numero_serie[]" required>

            <label for="contrasena">Contraseña del Equipo:</label>
            <input type="text" name="contrasena[]" required>

            <label for="nombre_equipo">Nombre del Equipo:</label>
            <input type="text" name="nombre_equipo[]" required>

            <label for="estado_inicial">Estado Inicial:</label>
            <input type="text" name="estado_inicial[]" required>

            <label for="comentarios">Comentarios Adicionales:</label>
            <textarea name="comentarios[]" rows="4"></textarea>
        `;

        const botonEliminar = document.createElement('button');
        botonEliminar.type = 'button';
        botonEliminar.textContent = 'Eliminar';
        botonEliminar.classList.add('eliminarEquipo');
        botonEliminar.addEventListener('click', function() {
            equiposDiv.removeChild(nuevoEquipoDiv);
        });

        nuevoEquipoDiv.appendChild(botonEliminar);
        equiposDiv.appendChild(nuevoEquipoDiv);
        equiposDiv.appendChild(agregarEquipoBtn); // Agregar el botón "Agregar Equipo" después de los equipos
    }

    agregarEquipoBtn.addEventListener('click', agregarEquipo);
});