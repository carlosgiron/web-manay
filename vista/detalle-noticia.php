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
            <?php
            include './header.php';
            ?>
            <section class="container">

                <div class="row">

                    <div class="col-xs-60 col-sm-45 col-md-45 col-lg-45 detalle-noticia">
                        <div class="row">
                            <div class="col-xs-60 col-sm-60 col-md-60 col-lg-60"> 
                                <h1 id="name_product" ><?php echo $listaNoticia[$i]["Nombre_Noticia"]; ?></h1>
                                <p class="date-public"> <i class="fa fa-calendar" aria-hidden="true"></i> <?php echo'<strong>' . $listaNoticia[$i]["Fecha_Publicacion"] . '</strong>'; ?></p>
                                <img class=" img-responsive" src="<?php echo $listaNoticia[$i]["Imagen"]; ?>">


                                <p class="post-contenido text-justify"><?php
                                    echo $listaNoticia[$i]["Descripcion_Noticia"];
                                    ?>      
                                </p>

                                <?php
                                $i++;
                            }
                            ?>


                        </div>
                        <div class="col-xs-60 col-sm-60 col-md-60 col-lg-60">
                            <div id="fb-root"></div>

                            <script>
                                (function (d, s, id) {
                                    var js, fjs = d.getElementsByTagName(s)[0];
                                    if (d.getElementById(id))
                                        return;
                                    js = d.createElement(s);
                                    js.id = id;
                                    js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.8";
                                    fjs.parentNode.insertBefore(js, fjs);
                                }(document, 'script', 'facebook-jssdk'));

                            </script>
                            <div id="compartir_facebook" class="fb-share-button"  data-layout="button_count" data-size="small" data-mobile-iframe="true">
                                <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Compartir</a></div>
                            <div id="url_web" class="fb-comments"  data-width="100%" data-numposts="5"></div>
                        </div>

                        <!--Noticias recomendaas-->
                        <div class="col-xs-60 col-sm-60 col-md-60 col-lg-60 ult-notice">
                            <h4 class="text-center text-uppercase">No te pierdas</h4>

                            <div class="row">
                                <?php
                                //include '../controlador/NoticiaControlador.php';
                                $noticiaControla = new NoticiaControlador();
//                                var $id= $idnoticia;
                                $listaultimas = $noticiaControla->ListaUltimasNoticias($idnoticia);
                                $ro = 0;
                                $noti = 1;
                                while ($ro < (count($listaultimas))) {
                                    echo '<div class="col-xs-60 col-sm-30 col-md-30 col-lg-30 noti-0' . $noti . '">';
                                    echo ' <a href="detalle-noticia.php?$varIdNoticia='.$listaultimas[$ro]["Id"].'"> <img class="img-responsive" src="' . $listaultimas[$ro]["Imagen"] . '" alt="' . $listaultimas[$ro]["Imagen"] . '"/></a>';
                                    echo '  <h5><a href="detalle-noticia.php?$varIdNoticia=' . $listaultimas[$ro]["Id"] . '">' . $listaultimas[$ro]["Nombre_Noticia"] . '</a> </h5>';
                                    echo '</div>';
                                    if ($noti == 2) {
                                        echo '<div class=clearfix></div>';
                                    }
                                    $ro++;
                                    $noti++;
                                }
                                ?>


                            </div>

                        </div> 

                    </div>



                </div>


                <?php include './anside.php'; ?>




            </div>

        </section>
        <?php
        include './footer.php';
        ?>
        <script>
            $(document).ready(function () {
                var pathname = window.location;
                $("#url_web").attr("data-href", pathname);
                $("#compartir_facebook").attr("data-href", pathname);
            });

        </script>

    </body>

</html>
