<!DOCTYPE html>
<html lang="en">
<head>
	 
	<title>Noticias</title>
        <?php include './head.php'; ?>
       <script>
            $(document).ready(function () {
                load(1);
            });

            function load(page) {
                var parametros = {"action": "ajax", "page": page};
                $("#loader").fadeIn('slow');
                $.ajax({
                    url: 'lista-noticia.php',
                    data: parametros,
                    beforeSend: function (objeto) {
                        $("#loader").html("<img src='img/loader.gif'>");
                    },
                    success: function (data) {
                        $(".post").html(data).fadeIn('slow');
                        $("#loader").html("");
                    }
                })
            }
        </script>
</head>
<body>
    <?php 
        include './header.php';
        ?>
        <section  id="content" class="main container">
<!--            <div class="row">
                <div class="col-xs-60 col-sm-60 col-md-60 col-lg-60"> <h1>Noticias </h1> </div>
            </div>-->
            <div class="row">
                    <div id="loader" class="text-center"> <img src="img/loader.gif"></div>
                    <section class="post col-xs-60 col-sm-45  col-md-45 col-lg-45 "></section><!-- Datos ajax Final -->
                    <?php include './anside.php';?>
            </div>
        </section>
 
</body>
</html>