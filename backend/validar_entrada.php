<?

$id = $_GET['id'];

// Consulta para verificar si el ID existe en la base de datos
$query = "SELECT COUNT(*) AS total FROM blog WHERE blog_id = $id";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$total = $row['total'];

if ($total > 0) {
    
} else {
    // El ID no existe en la base de datos, redireccionar a blogs.php
    header("Location: blog.php");
    exit;
}

?>