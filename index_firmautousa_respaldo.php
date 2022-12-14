<?php
/**
 * Creado por: Alfonso Ramírez
 * Fecha: 12 de Agosto del 2022
 */
require './controllers/index/funciones_index.php';
require './controllers/index/datos_index.php';


if ($_SESSION["name"]) { ?>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="assets/img/icon.ico">
    <link rel ="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel ="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel ="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script src="assets/js/function_home.js" language="javascript" type="text/javascript"></script>
    <script src="assets/js/function_index.js" language="javascript" type="text/javascript"></script>
    <script src="assets/js/Concurrent.Thread.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <title><?echo $empresa;?></title>
  </head>
<!--verificar_notificacion();-->

      <body id="body_principal" class="fondo" onload="Concurrent.Thread.create(verificar_sesion);val_img(9);" onresize="val_img(9)">
        <div id="loader3" class="loader_index"></div>
          <header class="header">
            <div class="container-fluid bg-white">
              <div class="row">
                <div class="col-6 text-left">
                  <br>
                  <img onclick="mostrar_ventana('')" id ="logo_inicio" style="width: 170px;" class="cursor" src="assets/img/logo.png">
                  
                </div>
                
                <div class="col-6 text-right">
                  <label class="text-center">
                    <br>
                    <img id="img_ing" title="Mi perfil" onmouseover="ing()" onclick="mostrar_perfil()" class="cursor ing" src="assets/img/user5.png">

                    <img style="display: none;" id="img_ing2" title="Mi perfil" onmouseout="ing2()" onclick="mostrar_perfil()" class="cursor ing" src="assets/img/ing_user2.png">
                    <br>
                    <!--Mi Perfil-->
                    <b>
                    <label id="label_minutos" class="text-center text-info" style="font-size: small; margin-bottom: auto;"> Session time: <span id="hora">25</span>:<span id="min">00</span></label>
                    <br> Welcome <span class="text-primary"><?php echo $_SESSION["name"]; ?></span> </b>
                    <br>
                    <b>
                    <span class="cursor text-danger" onclick="cerrar_sesion()"> Logout <img src="assets/img/logout.png"></span>
                    </b>
                    <br>
                  </label>
                </div>
              </div>
            </div>

            <nav class="navbar navbar-expand navbar-dark bg-dark2 lighten-4">
              <ul class="navbar-nav cursor">
                <li class="nav-item active">
                  <a class="nav-link">
                    <input class="input_search" list="opciones" id="valorOpciones" name="opciones" placeholder="Search Module" onchange="buscar_mod()">
                    <datalist id="opciones">
                      <?echo $option_modulo;?>
                    </datalist>  
                  </a>
                </li>
                <?
                foreach ($menu as $label) {
                  $label = $label;
                  $ventana_for = borrar_acentos($label);
                  $icono = str_replace('/', '_', ucfirst(strtolower(borrar_acentos($label))));
                  ?>

                  <li class="nav-item active" onclick="mostrar_ventana('<?echo strtolower($ventana_for) ?>')" onmouseout="img_sm('i<?echo $cont ?>')" onmouseover="img_bg('i<?echo $cont ?>')">
                    <a class="nav-link"><span> <img title="<?echo $label ?>" class="img_index" id="i<?echo $cont ?>" style="margin-right: 5px" src="assets/img/iconos/<?echo $icono ?>.png"></span><span id="t<?echo $cont ?>"> <?echo '' . $label ?></span></span></a>
                  </li>
                  <?
                  $cont++;
                } ?>
              </ul>
            </nav>
          </header>
          
          <br><br><br><br><br><br><br><br><br>
          
          <div class="container-fluid  pr-0 pl-0 pt-0 pb-0 mt-4">
            <iframe id="ifrm" class="frameborder" width="100%" height="1500px" src="index_<?echo $ventana; ?>.php"  scrolling="yes" frameborder="no" onload="window.top.scrollTo(0,0); window.parent.scrollTo(0,0);"></iframe>
          </div>

        </div>
      </body>

      <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>

      <script type="text/javascript">
        $(window).load(function()
        {
          loading_index();
        });
      </script>
    </form>
  </div>
</html>
<?} else {
    header('Location: ./index.php');
}
?>
<style type="text/css">
  .fra{
    height: -webkit-fill-available;
    width: 350px;
    max-height: 500px;
    font-family: avenir;
  }
</style>
