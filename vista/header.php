<header>
    <div class="container-fluid back-top" >
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-xs-60 col-sm-60 col-md-60 col-lg-60 text-center">
                        <div class="square-top"></div>

                        <strong class=" transmicion-01 text-uppercase">transmición en vivo</strong>
                    </div> 

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid back-top-02" >
        <div class="row">
            <div class="container">
                <div class="row">

                    <div class="col-xs-60 col-sm-30 col-md-20 col-lg-20"> 
                        <?php
                        date_default_timezone_set("America/Lima");
//                        $fechaactual = date();
//                        print_r($fechaactual);
                        $dias = array("Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sábado");
                        $mes = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");

                        echo "<span class='get-date'>" . $dias[date('w')] . " " . date("d") . " de " . $mes[date('m') - 1] . " del " . date("Y") . "</span>";
                        ?>
                    </div>
                    <div class="col-xs-60 col-sm-30 col-md-20 col-lg-20 social-top"> 
                        <span>Siguenos en: </span>
                        <a href="#"><span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span></a>
                        <a href="#"><span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </span></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-60 col-sm-30 col-md-30 col-lg-30 ">
                <img class="img-responsive" src="img/noticia-educa.jpg" alt="noticia-educa"/>

            </div>
            <div class="col-xs-60 col-sm-30 col-md-30 col-lg-30 ">

                <div class="reportaje">
                    <div class="row">
                        <div class="col-xs-60 col-sm-30 col-md-30 col-lg-30 repor-01">
                            <span >Reportajes</span>
                            <ul>
                                <li>Profesores</li>
                                <li>Alumnos</li>
                                <li>Clases de Éxito</li>

                            </ul>
                        </div>

                        <div class="col-xs-60 col-sm-30 col-md-30 col-lg-30 forma-01">
                            <span>Formación</span>
                            <ul>
                                <li>Libros y materiales de estudio</li>
                                <li>Consejos</li>
                                <li>Guías prácticas</li>

                            </ul>
                        </div>

                    </div>




                </div>


            </div>


        </div>

    </div>

    <div class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="#">Brand</a>-->
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="#">vida universitaria</a></li>
                    <li><a href="#">carreras técnicas</a></li>
                    <li><a href="#">internacional</a></li>
                    <li><a href="#">ideas</a></li>
                    <li><a href="noticia.php">tecnología</a></li>
                    <li><a href="#">biblioteca</a></li>
                    <li><a href="#">cultura</a></li>
                    <li><a href="#">becas</a></li>
                    <li><a href="#">oportunidades</a></li>

                </ul>
            </div>

        </div>

    </div>
    <div class="menu-sec col-xs-60 col-sm-60 col-md-60 col-lg-60">
        <button class="btn btn-default">Tu Opinión importa</button>
        <button class="btn btn-default">ADN del estudios</button>
        <button class="btn btn-default">El rincón del maestro</button>
        <button class="btn btn-default">YouTube</button>
        <button class="btn btn-default">Facebook</button>

    </div>

</header>



