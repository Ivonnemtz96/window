<?
include('backend/config.php');
// Obtener los artículos del blog desde la base de datos
$query = "SELECT * FROM blog ORDER BY blog_fecha DESC";
$resultado = mysqli_query($conn, $query);

// Mostrar los artículos en la página
while ($row = mysqli_fetch_assoc($resultado)) {
    echo '<h2>' . $row['blog_nom'] . '</h2>';
    echo '<p>' . $row['blog_desc'] . '</p>';
    echo '<p>Fecha de publicación: ' . $row['blog_fecha'] . '</p>';
    echo '<hr>';
}

// Cerrar conexión a la base de datos
mysqli_close($conn);
?>