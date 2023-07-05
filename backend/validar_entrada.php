<?
$id = $_GET['id'];

// Consulta para verificar si el ID existe en la base de datos
$query = "SELECT COUNT(*) AS total FROM blog WHERE blog_id = $id";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$total = $row['total'];

$sql = "SELECT * from blog WHERE blog_id = $id";
$entradas = $conn->query($sql);
$row = $entradas->fetch_assoc();
$blog_nom = $row['blog_nom'];



if ($total > 0) {
} else {
    // El ID no existe en la base de datos, redireccionar a blog.php
    header("Location: /blog");
    exit;
}

?>