<?php
include('verificar_sesion.php');
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="description" content="Reseña para videojuego">
    <meta name="author" content="Ian Seijas">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style3.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>What's Next: Biblioteca de Videojuegos</title>
</head>
<body>
       <section>
        <div class="resena">
            <h2>Dinos tu opinión. Crea tu reseña</h2>
            <form id="formresena" action="conexion.php" method="post">
                <div class="opinion">
                    <label for="nombre_game">Nombre del Videojuego</label>
                    <input type="text" id="nombre_game" name="nombre_game" required />
                </div>
                <div class="star-seleccion">
                    <div class="rating">
                        <input type="number" name="rating" required hidden>
                        <i class="bi bi-star star"></i>
                        <i class="bi bi-star star"></i>
                        <i class="bi bi-star star"></i>
                        <i class="bi bi-star star"></i>
                        <i class="bi bi-star star"></i>
                    </div>
                    <div class="seleccion">
                        <select name="categoria" id="categoria" required>
                            <option value="" disabled selected="">Seleccione una categoría</option>
                            <option value="1">Acción</option>
                            <option value="2">Aventura</option>
                            <option value="3">Lucha</option>
                            <option value="4">Deportivo</option>
                            <option value="5">Estrategia</option>
                            <option value="6">Simulación</option>
                            <option value="7">Supervivencia</option>
                            <option value="8">Juegos musicales</option>
                            <option value="9">RPG</option>
                        </select>
                    </div>
                </div>
		<div class="contenedor-texto">
                    <textarea name="virtudes" cols="10" rows="5" placeholder="Escribe sus virtudes..." required></textarea>
                    <textarea name="carencias" cols="10" rows="5" placeholder="Escribe sus carencias..." required></textarea>
                </div>
                <div class="btn-entrada">
                    <button type="submit" name="enviar" class="btn-enviar">Enviar</button>
                    <button type="reset" class="btn-cancelar">Cancelar</button>
                </div>
            </form>
        </div>
    </section>
        <script src="scripts/script1.js"></script>
</body>
</html>
