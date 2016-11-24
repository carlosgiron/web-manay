
<?php
include '../util/ConexionBD.php';
$con = new ConexionBD();
$cn = $con->getConexionDB();

$action = (isset($_REQUEST['action']) && $_REQUEST['action'] != NULL) ? $_REQUEST['action'] : '';
if ($action == 'ajax') {
    include 'pagination.php'; //incluir el archivo de paginación
    //las variables de paginación
    $page = (isset($_REQUEST['page']) && !empty($_REQUEST['page'])) ? $_REQUEST['page'] : 1;
    $per_page = 5; //la cantidad de registros que desea mostrar
    $adjacents = 4; //brecha entre páginas después de varios adyacentes
    $offset = ($page - 1) * $per_page;
    //Cuenta el número total de filas de la tabla*/
    $count_query = "SELECT count(*) AS numrows FROM t_noticia;";
    $result = mysql_query($count_query, $cn);
    if ($row = mysql_fetch_array($result)) {
        $numrows = $row['numrows'];
    }
    $total_pages = ceil($numrows / $per_page);
    $reload = 'index.php';
    //consulta principal para recuperar los datos
//    $query = "call 'Sp_SelectServiciosCategoriaBienes'($per_page),$offset";
    $query = "select Id,Nombre_Noticia,Descripcion_Noticia,Imagen,Fecha_Publicacion from t_noticia limit $offset,$per_page ";
    $result2 = mysql_query($query, $cn);
    if ($numrows > 0) {

        while ($row = mysql_fetch_array($result2)) {
            ?>
            <div class="row">
                <article class="post-content">
                    <div class="col-xs-60 col-sm-30 col-md-30 col-lg-30">
                        <a class="thumb" href="detalle-noticia.php?$varIdNoticia=<?php echo $row['Id']; ?>" >   <img class="img-responsive" src="<?php echo $row["Imagen"]; ?>"></a>
                    </div>
                    <div class="col-xs-60 col-sm-30 col-md-30 col-lg-30">
                        <h3><a href="detalle-noticia.php?$varIdNoticia=<?php echo $row['Id']; ?>"> <?php echo $row["Nombre_Noticia"]; ?></a></h3>
                        <p class="hidden"> <?php echo '<i class="fa fa-calendar"></i><strong>  ' . $row["Fecha_Publicacion"].'</strong>'; ?> </p>
                        <p class="post-contenido text-justify"><?php
                            $cadena = $row["Descripcion_Noticia"];

                            if (str_word_count($cadena, 0) > 50) {
                                echo substr($row["Descripcion_Noticia"], 0, 500) . ' ';
                                ?> <a class="btn btn-info" href="detalle-noticia.php?$varIdNoticia=<?php echo $row['Id']; ?>">ver mas</a>
                                <?php
                            } else {
                                echo ($row["Descripcion_Noticia"]);
                            }
                            ?>      
                        </p>

                       

                    </div>
                </article>
            </div>
            <?php
        }
        ?>


        <div class="table-pagination pull-right">
            <?php echo paginate($reload, $page, $total_pages, $adjacents); ?>
        </div>

        <?php
    } else {
        ?>
        <div class="alert alert-warning alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <h4>Aviso!!!</h4> No hay datos para mostrar
        </div>
        <?php
    }
}
?>
