<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Registrar Noticia</title>
        <?php include './head.php'; ?>

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-60 col-sm-60 col-md-60 col-lg-60">
                    <form class="form-horizontal" enctype="multipart/form-data" action="insertar-noticia.php" method="POST">
                        <fieldset>
                            <legend>Registra Noticia</legend>
                            <div class="form-group">
                                <label for="nombre_noticia" class="col-xs-60 col-sm-15 col-md-12 col-lg-10 control-label">Nombre Noticia</label>
                                <div class="col-xs-60 col-sm-45 col-md-48 col-lg-50">
                                    <input type="text" class="form-control" id="nombre_noticia" name="nombre_noticia" placeholder="Nombre Noticia">

                                </div>
                            </div>
                            <div class="form-group"> 
                                <label for="urlImagen" class="col-xs-60 col-sm-15 col-md-12 col-lg-10 control-label">Imagen</label>
                                <div class="col-xs-60 col-sm-45 col-md-48 col-lg-50">
                                    <input id="urlImagen" class="file form-control" type="file" name="imagen[]" multiple accept="image/jpeg,image/jpg,image/png">

                                </div>
                            </div>
                            <div class="form-group"> 
                                <label for="descripcion_noticia" class="col-xs-60 col-sm-15 col-md-12 col-lg-10 control-label">Descripción de Noticia</label>
                                <div class="col-xs-60 col-sm-45 col-md-48 col-lg-50">
                                    <textarea class="form-control" rows="5" name="descripcion_noticia" id="descripcion_noticia"> </textarea>

                                </div>
                            </div>
                            <div class="form-group"> 
                                <div class="col-xs-60 col-sm-45 col-md-48 col-lg-50 col-sm-offset-15 col-md-offset-12 col-lg-offset-10">
                                  <button type="submit" class="btn btn-primary">Registrar</button>
                                </div>
                            </div>
                        </fieldset>


                    </form> 
                </div> 

            </div>
            <div class="row">
                <div class="col-xs-60 col-sm-60 col-md-60 col-lg-60">
                    <div class="table-reponsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Nombre</th>
<!--                                    <th>Descripción</th>-->
                                    <!--<th>Imagen</th>-->
                                    <th>Fecha</th>
                                     <th><i class="fa fa-eye"></i></th>
                                    <th><i class="fa fa-pencil"></i></th>
                                    <th><i class="fa fa-trash"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include '../controlador/NoticiaControlador.php';
                            $noticiaCont= new NoticiaControlador();
                            $listaAllNoticias=$noticiaCont->ListaNoticiaAll();
                            $i = 0;
                            $j=1;
                            while ($i < ( count($listaAllNoticias))){
                                echo '<tr>';
                                echo '<td>'.$j.'</td>';
                                echo '<td>'.$listaAllNoticias[$i]["Nombre_Noticia"].'</td>';
                               
//                                echo '<td>'.$listaAllNoticias[$i]["Imagen"].'</td>';
                                 echo '<td>'.$listaAllNoticias[$i]["Fecha_Publicacion"].'</td>';
                                 echo '<td><a href="detalle-noticia.php?$varIdNoticia='.$listaAllNoticias[$i]["Id"].'"><i class="fa fa-eye"></i></a></td>';
                                 echo '<td><i class="fa fa-pencil"></i></td>';
                                 echo '<td><i class="fa fa-trash"></i></td>';
                                echo '</tr>';
                                 $i++;
                                 $j++;
                            }
                            ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>
        <script>
            $("#urlImagen").fileinput({
                showCaption: false,
                fileType: "any"
            });
        </script>
    </body>
</html>