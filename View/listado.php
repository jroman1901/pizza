<!DOCTYPE html>
<html>

<head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Listado de ofertas</title>
    <style>
          body{
            text-align: center;
            background-color: antiquewhite;
            display: table-cell;
            display: inline-block;
            margin-left: 30%;
        }
    </style>
 
</head>

<body>
    <h1>Pizzeria UMG </h1>



    <a href="../Controller/nuevaOferta.php" class="waves-effect waves-light btn">Nueva oferta</a>
    <?php
    foreach($data['ofertas'] as $oferta)  {
    ?>

 
    <div class="row " >
        <div class="col s12 m12">
            <div class="card">
                <div class="card-image">
                    <img src="../View/images/<?=$oferta->getImagen()?>" width="400">
                    <span class="card-title"><?=$oferta->getTitulo()?></span>
                    <a href="../Controller/nuevaOferta.php"
                        class="btn-floating halfway-fab waves-effect waves-light red"><i
                            class="material-icons">add</i></a>
                </div>
                <div class="card-content">
                    <p><?=$oferta->getDescripcion()?></p><br>
                    <a href="../Controller/borraOferta.php?id=<?=$oferta->getId()?>"><i
                            class="material-icons">deleted</i></a>
                </div>
            </div>
        </div>
    </div>

    <?php
    }
  ?>

  </div>
</body>

</html>