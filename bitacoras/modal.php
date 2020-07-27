<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css"> -->
    <link rel="stylesheet" href="assets/bootstrap/css/smoothproducts.css">
</head>

<body>

    <!-- Trigger/Open The Modal -->
    <button class="btn btn-outline-primary" name="creacion" data-toggle="modal" data-target="#edit-modal"
        id="creacion"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i>Editar</button>
    <a name"borrado" id"borrado" class="btn btn-outline-danger" onclick="borrar()" href="#"><i class="fa fa-trash-o"
            aria-hidden="true"></i>Borrar</a>


    <!-- The Modal -->
    <div id="edit-modal" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="text-info">
                        <font face='Montserrat'><strong>EDITAR REGISTRO</font></strong>
                    </h1>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="block-heading">

                        <form class="container" font face='Montserrat' action="user_edit.php">
                            <div class="section">

                                <div class="form-group"><label for="correo_electronico">Email</label><input
                                        class="form-control item" type="text" name="correo_electronico"
                                        id="correo_electronico">
                                </div>
                                <div class="form-group"><label for="usuario">Usuario</label><input
                                        class="form-control item" type="text" name="usuario" id="usuario"></div>
                                <div class="form-group"><label for="contraseña">Contraseña</label><input
                                        class="form-control item" type="password" name="contraseña" id="contraseña">
                                </div>
                                <div class="form-group"><label for="area">Area</label><input class="form-control item"
                                        type="text" name="area" id="area"></div>



                        </form>


                    </div>
                    </section>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
                <button class="btn btn-outline-success" data-dismiss="modal" type="submit" name="insertar"
                    style="font-family: Montserrat, sans-serif;" value="Registrar">Editar registro</button>
            </div>
        </div>
    </div>
    </div>


    </div>

    </div>


</body>

</html>



</div>


</section>
</main>
</div>
</div>
</div>

</body>

</html>