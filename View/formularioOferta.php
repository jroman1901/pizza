<!DOCTYPE html>
<html>
<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" <meta charset="UTF-8">
    <title></title>
    
    <style>
         body {
            text-align: center;
            background-color: antiquewhite;
            display: table-cell;
            display: inline-block;
            margin-left: 30%;
        }
    </style>
</head>

<body>

    <h2>Registro de datos </h2>
    <div class="row">
        <form class="col 8" action="../Controller/grabaOferta.php" enctype="multipart/form-data" method="POST">
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Ingrese el titulo" name="titulo" id="titulo" type="text" class="validate">
                    <label for="titulo">titulo</label>
                </div>
                <div class="input-imagen col s12">
                    <input type="file" id="imagen" name="imagen">
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input placeholder="Descripcion" name ="descripcion" id="descripcion" type="text" class="validate">
                    <label for="descripcion">Descripcion</label>
                </div>
            </div>
            <input type="submit" value="Aceptar">
        </form>
    </div>
    <a href="../Controller/index.php" class="waves-effect waves-light btn">Ver ofertas</a>
</body>

</html>