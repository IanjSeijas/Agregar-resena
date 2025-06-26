<?php
// Iniciar sesión
session_start();

// Parámetros de conexión
$server = "localhost";
$user   = "root";
$pass   = "";
$db     = "bdwhatsnext";

// Conexión a la base de datos
$conexion = new mysqli($server, $user, $pass, $db);

// Comprobar si hay errores de conexión
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

// Verificar si se ha enviado el formulario
if (isset($_POST['enviar'])) {

    // Comprobar si el usuario ha iniciado sesión
    if (isset($_SESSION['usuario'])) {
        $IdUsuario = $_SESSION['usuario'];

        // Recoger los datos del formulario
        $NombreGame = $_POST['nombre_game'];
        $Categoria  = $_POST['categoria'];
        $Rating     = $_POST['rating'];
        $Virtudes   = $_POST['virtudes'];
        $Carencias  = $_POST['carencias'];

        // Escapar los datos para prevenir inyección SQL
        $NombreGame = mysqli_real_escape_string($conexion, $NombreGame);
        $Categoria  = mysqli_real_escape_string($conexion, $Categoria);
        $Rating     = mysqli_real_escape_string($conexion, $Rating);
        $Virtudes   = mysqli_real_escape_string($conexion, $Virtudes);
        $Carencias  = mysqli_real_escape_string($conexion, $Carencias);

        // Query para insertar los datos en la tabla "rating"
        $insertarDatos = "INSERT INTO rating (IdUsuario, NombreGame, Categoria, Rating, Virtudes, Carencias) 
                          VALUES ('$IdUsuario', '$NombreGame', '$Categoria', '$Rating', '$Virtudes', '$Carencias')";

        // Ejecutar la consulta e informar del resultado
        if (mysqli_query($conexion, $insertarDatos)) {
            header("Location: introducir_reseña.php");
            exit();
        } else {
            echo "Error al ingresar reseña: " . mysqli_error($conexion);
        }

    } else {
        echo "Error: Debes iniciar sesión para dejar una reseña.";
    }
}

// Cerrar la conexión
$conexion->close();
?>