<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include './config/config.php';
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $autor = $_POST['autor'];
    $title = $_POST['title'];
    $is_active = $_POST['is_active'];
    // Obtener el contenido del editor Summernote
    $post = $_POST['content'];

    // Preparar la consulta con una sentencia preparada
    $queryInsertUser = "INSERT INTO tbl_posts (autor, title, is_active, content) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($con, $queryInsertUser);

    // Vincular parámetros (usar "sss" ya que todos son cadenas en este ejemplo)
    mysqli_stmt_bind_param($stmt, "ssss", $autor, $title, $is_active, $post);

    // Ejecutar la sentencia preparada
    $resultInsertUser = mysqli_stmt_execute($stmt);


    if ($resultInsertUser) {
        //echo "Post creado exitosamente. ID: " . $last_id = mysqli_insert_id($con);
        header("Location: lista_posts.php");
    } else {
        echo "Error al crear el post: " . mysqli_error($con);
    }

    // Cerrar la sentencia preparada y la conexión
    mysqli_stmt_close($stmt);
    mysqli_close($con);
}
