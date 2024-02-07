<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Listado de Posts con Summernote y PHP</title>
    <link rel="shortcut icon" type="image/png" href="./assets/imgs/favicon.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="stylesheet" href="./assets/css/home.css" />
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center mi_container">
            <div class="col-md-12">
                <h1 class="text-center mb-5">
                    Listado de Posts con Summernote y PHP
                    <hr />
                </h1>
            </div>
            <?php
            ini_set('display_errors', 1);
            error_reporting(E_ALL);

            include 'config/config.php';
            $query = "SELECT * FROM tbl_posts ORDER BY id DESC;";
            $result = mysqli_query($con, $query);
            // Verifica si la consulta se ejecutó correctamente
            if ($result) {
                // Verifica si se encontró algún registro
                if (mysqli_num_rows($result) > 0) {
                    $posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach ($posts as $post) {
            ?>
                        <div class="col-md-12 mb-4" style="border-bottom: 1px solid #ccc">
                            <div class="media">
                                <i class="bi bi-person-circle px-2" style="font-size: 30px"></i>
                                <div class="media-body">
                                    <h5 class="mt-2">
                                        <?php echo $post['autor']; ?>
                                        <span class="text-muted" style="font-size: 12px; float: right">
                                            <?php
                                            $date = DateTime::createFromFormat('Y-m-d H:i:s.u', $post['created_at']);
                                            echo $date->format('d/m/Y H:i:s'); ?>
                                        </span>
                                    </h5>
                                    <h1><?php echo $post['title']; ?></h1>
                                    <p><?php echo $post['content']; ?></p>
                                </div>
                            </div>
                        </div>
            <?php
                    }
                }
            } else {
                echo "No se encontró ningún registro.";
            }
            ?>


        </div>
    </div>

    <a href="./index.php" id="bottomRightButton">
        <i class="bi bi-arrow-left"></i> Registrar Posts
    </a>
</body>

</html>