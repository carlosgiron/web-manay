<?php
include '../controlador/NoticiaControlador.php';
$noticiacontrolador = new NoticiaControlador();
$idnoticia = ($_GET['$varIdNoticia']);
//$idRegistro =2;
//variable para el correo destinatario

$listaNoticia = $noticiacontrolador->ListaNoticiaXId($idnoticia);
$i = 0;
while ($i < (count($listaNoticia))) {
    ?>
    <!DOCTYPE html>
    <html lang="en">

        <head>
            <meta charset="UTF-8">
            <title><?php echo $listaNoticia[$i]["Nombre_Noticia"]; ?></title>
            <?php include './head.php' ?>
        </head>

        <body>

            <section class="container">
                <div class="row">

                    <div class="col-xs-60 col-sm-45 col-md-45 col-lg-45 detalle-servicio">

                        <h1 id="name_product"><?php echo $listaNoticia[$i]["Nombre_Noticia"]; ?></h1>
                        <img class="img-thumbnail img-responsive" src="<?php echo $listaNoticia[$i]["Imagen"]; ?>">

                        <p> <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $listaNoticia[$i]["Fecha_Publicacion"]; ?></p>
                        <p class="post-contenido text-justify"><?php
                            echo $listaNoticia[$i]["Descripcion_Noticia"];
                            ?>      
                        </p>

                        <?php
                        $i++;
                    }
                    ?>


                </div>
                    
                <?php include './anside.php'; ?>




            </div>

        </section>

    </body>

</html>
