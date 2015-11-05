  <title>FLmail</title>
 <link rel="stylesheet" type="text/css" href="<?php echo base_url('lib/css/bootstrap.min.css'); ?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('lib/css/prettify.css'); ?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('src/bootstrap-wysihtml5.css'); ?>"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div id="cont">

    <div class="container">
      <h1>Correo Nuevo <br></h1>  
<div class="jumbotron">
    <form action="/CodeIgniter/usuario/guardarcorreo" method="post" accept-charset="utf-8">
          <label id="des" for="destino">Destino:</label>
          <input type="email" size="20" id="email" name="email" placeholder="ejemplo@ejemplo.com" required/>
          <br/>
          <label for="asunto">Asunto</label>
          <input type="text" size="20" id="asunto" name="asunto" required>
          <label for="contenido">Contenido:</label>
          <input class="textarea" type="text" size="20" id="contenido" name="contenido" style="width:100%;height:300px;" required>
          <br/>
          <input id = "btncrear" type="submit" value="Crear Mensaje" id = "crear" class="btn btn-primary"/>
        </form>
</div>
    
    </div>
</div>
  <script src="<?php echo base_url('lib/js/wysihtml5-0.3.0.js'); ?>"></script>
  <script src="<?php echo base_url('lib/js/jquery-1.7.2.min.js'); ?>"></script>
  <script src="<?php echo base_url('lib/js/prettify.js'); ?>"></script>
  <script src="<?php echo base_url('lib/js/bootstrap.min.js'); ?>"></script>
  <script src="<?php echo base_url('src/bootstrap-wysihtml5.js'); ?>"></script>

  <script>
    $('.textarea').wysihtml5();
  </script>

  <script type="text/javascript" charset="utf-8">
    $(prettyPrint);
  </script>
  </body>
</html>
