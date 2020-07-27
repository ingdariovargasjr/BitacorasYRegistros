<!DOCTYPE html>
<html>


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - BITACORAS Y REGISTROS</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/smoothproducts.css">
</head>

<body>
    <main class="page login-page">
        <section class="clean-block clean-form dark"
            style="background-image: url('assets/img/background_polygon_white.jpg'); height: 779px; ">
            <div class="container">
                <div class="block-heading">
                    <a href="login.php"><img src="assets/img/logM.png" style="width: 110px; height: 80px;"
                            alt="image"></a>
                    <h1 class="text-info"><strong>SISTEMA DE BITACORAS Y REGISTROS</strong></h1>
                    <p>Inicia Sesión con tu usuario y contraseña.</p>
                </div>
                <form method="post" action="login_script.php">
                    <div class="form-group"><label for="usuario">Usuario</label><input type="text"
                            class="form-control item" id="usuario" name="usuario" /></div>
                    <div class="form-group"><label for="contraseña">Contraseña</label><input type="password"
                            class="form-control" id="contraseña" name="contraseña" /></div>
                    <div class="form-group">
                        <div class="form-check"><input type="checkbox" class="form-check-input" id="checkbox" /><label
                                class="form-check-label" for="checkbox">Recordarme</label></div>
                    </div><button class="btn btn-primary btn-block" type="submit">Entrar</button>
                </form>
            </div>
            <div class="footer-copyright" align="center">
                <br>
                <p>© 2020 Multimodal</p>
                </br>
            </div>
        </section>

    </main>

    <!-- <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script> -->
</body>

</html>