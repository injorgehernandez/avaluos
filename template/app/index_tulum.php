<?php

//include("backend/seguridad.php");

$usuario = $_SESSION["usuario"];

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Bracket">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/bracket">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>AVALUOS</title>

    <!-- vendor css -->
    <link href="../lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="../lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="../lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="../lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">

    <link href="../lib/highlightjs/github.css" rel="stylesheet">
    <link href="../lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">


    <link href="../lib/jquery.steps/jquery.steps.css" rel="stylesheet">
    <link href="../lib/rickshaw/rickshaw.min.css" rel="stylesheet">


    <link href="../lib/jt.timepicker/jquery.timepicker.css" rel="stylesheet">
    <link href="../lib/spectrum/spectrum.css" rel="stylesheet">
    <link href="../lib/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="../lib/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../lib/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

    <!-- Bracket CSS -->
    <link rel="stylesheet" href="../css/bracket.css">
    <link rel="stylesheet" href="../css/style.css">
  </head>

  <body>

     <!-- ########## START: LEFT PANEL ########## -->
    <div class="br-logo"><img src="https://tulumcircula.com/assets/img/Logo_TulumCircula.jpg" class="logo-main" style="width: 70%"></a></div>
    <div class="br-sideleft overflow-y-auto">
      <label class="sidebar-label pd-x-15 mg-t-20">Tulum Circula</label>
      <div class="br-sideleft-menu">
       
        
       

        <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon  icon ion-ios-list-outline tx-22"></i>
            <span class="menu-item-label">Contratos</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="#" class="nav-link" onclick="cargaContenido('contrato.php')">Contrato de servicios</a></li>
          <li class="nav-item"><a href="#" class="nav-link" onclick="cargaContenido('carta.php')">Carta de relación
laboral</a></li>
         
        </ul>


         <a href="#" class="br-menu-link">
          <div class="br-menu-item">
            <i class="menu-item-icon  icon ion-ios-list-outline tx-22"></i>
            <span class="menu-item-label">Recolección</span>
            <i class="menu-item-arrow fa fa-angle-down"></i>
          </div><!-- menu-item -->
        </a><!-- br-menu-link -->
        <ul class="br-menu-sub nav flex-column">
          <li class="nav-item"><a href="#" class="nav-link" onclick="cargaContenido('recoleccion.php')">Aviso de recolección</a></li>
          <li class="nav-item"><a href="#" class="nav-link" onclick="cargaContenido('estadisticos.php')">Registros estadisticos</a></li>
          <li class="nav-item"><a href="#" class="nav-link" onclick="cargaContenido('manifiestos.php')">Descarga de manifiestos</a></li>
          <li class="nav-item"><a href="#" class="nav-link" onclick="cargaContenido('chat.php')">Chat</a></li>
         
        </ul>


       

 


       
       
        
      </div><!-- br-sideleft-menu -->
      <br>
    </div><!-- br-sideleft -->
    <!-- ########## END: LEFT PANEL ########## -->

   <!-- ########## START: HEAD PANEL ########## -->
    <div class="br-header">
      <div class="br-header-left">
        <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>
        <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>
      
      </div><!-- br-header-left -->
      <div class="br-header-right">
        <nav class="nav">
         
         
          <div class="dropdown">
            <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
              <span class="logged-name hidden-md-down">Jorge Hernández</span>
              <img src="../img/user.png" class="wd-32 rounded-circle" alt="">
              <span class="square-10 bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-header wd-200">
              <ul class="list-unstyled user-profile-nav">
                <li><a href="backend/salir.php"><i class="icon ion-power"></i> Salir</a></li>
              </ul>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </nav>
        
      </div><!-- br-header-right -->
    </div><!-- br-header -->
    <!-- ########## END: HEAD PANEL ########## -->

   

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel" id="contenido">
      <div id="procesa"></div>
      

    </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


    
    <script src="../lib/jquery/jquery.js"></script>
    <script src="../lib/popper.js/popper.js"></script>
    <script src="../lib/bootstrap/bootstrap.js"></script>
    <script src="../lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="../lib/moment/moment.js"></script>
    <script src="../lib/jquery-ui/jquery-ui.js"></script>
    <script src="../lib/jquery-switchbutton/jquery.switchButton.js"></script>
    <script src="../lib/peity/jquery.peity.js"></script>

    <script src="../js/bracket.js"></script>




    <script src="../lib/highlightjs/highlight.pack.js"></script>
    <script src="../lib/datatables/jquery.dataTables.js"></script>
    <script src="../lib/datatables-responsive/dataTables.responsive.js"></script>
    <script src="../lib/select2/js/select2.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


    <script src="../lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script src="../lib/d3/d3.js"></script>




    <script src="../lib/highlightjs/highlight.pack.js"></script>
    <script src="../lib/jquery.steps/jquery.steps.js"></script>
    <script src="../lib/parsleyjs/parsley.js"></script>


    <link href="../lib/jt.timepicker/jquery.timepicker.css" rel="stylesheet">
    <link href="../lib/spectrum/spectrum.css" rel="stylesheet">
    <link href="../lib/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
    <link href="../lib/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
    <link href="../lib/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">

    




    <script type="text/javascript">

      $(document).ready(function(){
          
        //cargaContenido("dashboard.php");

      });

      function cargaContenido(pagina) {
        $.ajax({
            type: "POST",
            url: pagina,
            data: "",
            dataType: "html",
            beforeSend: function(){

                
                  //imagen de carga
                  $("#contenido").html("<p align='center'><img src='../img/ajax-loader.gif' /></p>");
            },
            error: function(){
                  alert("Error en Consulta");
            },
            success: function(data){                                                 
                  $("#contenido").empty();
                  $("#contenido").append(data);                                          
            }
        });
      }
    </script>


    
  </body>
</html>


