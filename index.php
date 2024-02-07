<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cómo utilizar el editor Summernote en PHP</title>
    <link rel="shortcut icon" type="image/png" href="./assets/imgs/favicon.png" />

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/home.css" />

    <!-- summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>

<body>
    <div class="container mt-3 custom_container">
        <div class="row justify-content-md-center">
            <h1 class="text-center mb-5">
                Crea Contenidos Increibles con el Editor Summernote y PHP, la Combinación Perfecta para Tu Proyecto.
                <hr />
            </h1>

            <form id="form" action="recibir_post.php" method="POST">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="autor" class="form-label">Autor</label>
                                    <input type="text" class="form-control" name="autor" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="title" class="form-label">Título</label>
                                    <input type="text" class="form-control" name="title" required />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Contenido</label>
                    <textarea class="form-control summernote" name="content" id="content" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="Status Post">Estatus</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" id="is_active1" value="1" checked />
                        <label class="form-check-label" for="is_active1">
                            Post Activo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" id="is_active0" value="0" />
                        <label class="form-check-label" for="is_active0">
                            Post Inactivo
                        </label>
                    </div>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary btn-lg btn-block btn-sm">
                            Registrar Post
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <a href="./lista_posts.php" id="bottomRightButton">
        Lista de Posts
        <i class="bi bi-journal-richtext"></i>
    </a>

    <script src="./assets/js/script_summernote.js"></script>
</body>

</html>