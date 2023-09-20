<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php for($i = 0; $i < count($templateParams["css"]); $i++): ?>
    <link href="<?php echo $templateParams["css"][$i] ?>" rel="stylesheet" type="text/css">
    <?php endfor; ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <!-- Leaflet CSS importa tutti i css di leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css"
        integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.4.1/MarkerCluster.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.5.0/MarkerCluster.Default.min.css" />
    <!-- Leaflet js script -->
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js"
        integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>


    <!-- Load Heatmap Feature Layer from CDN -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.markercluster/1.4.1/leaflet.markercluster.js"></script>
    <title><?php echo $templateParams["titolo"]; ?></title>
    <link rel="icon" type="image/x-icon" href="resources/images/favicon/favicon.ico">

    <!-- Chart.js script -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <!-- FONTAWESOME css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <!-- JQuery UI -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <!-- Leaflet point inside polygons-->  
    <script src="https://cdn.rawgit.com/hayeswise/Leaflet.PointInPolygon/v1.0.0/wise-leaflet-pip.js"></script>



   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    


  </head>
  <body>

		
  <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar" class="active">
      <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btnMenuToggle">
          <i class="fa fa-bars"  aria-hidden="true"></i>
          </button>
      </div>
      <div class="img bg-wrap text-center py-4">
          <div class="user-logo">
            <div class="img logo"></div>
            <?php if(isset($_SESSION["Nome"]) && $_SESSION["Cognome"]): ?>
              <?php echo "<h3>".$_SESSION["Nome"]." ".$_SESSION["Cognome"]."</h3>" ?>
              <?php else: ?>
              <?php endif; ?>
              


          </div>
      </div>
      <ul class="list-unstyled">
          <li class="active">
            <a href="index.php"><span class="fa fa-map mr-3"></span>Vai alla Mappa</a>
          </li>


          <li>
            <a href="https://site.unibo.it/multicampus-sostenibile/it/mobilita/almabike"><span class="fa fa-bicycle mr-3"></span>Vai al sito Almabike</a>
          </li>
          <li>
            <a href="#"><span class="fa fa-envelope mr-3 notif"></span>Contatti</a>
          </li>
          <li>

          <?php if(isset($_SESSION["Nome"]) && isset($_SESSION["Cognome"])): ?>
            <?php echo "<li><a href='#'><span class='fa fa-road mr-3'></span> I miei percorsi</a></li>"?>
              
              <?php else: ?>
                
                <?php echo "<li><a href='loginpage.php'><span class='fa fa-lock mr-3'></span>Area riservata</a></li>"?>
              <?php endif; ?>
           

            
          </li>
          <li>
            <a href="#"><span class="fa fa-cog mr-3"></span>Impostazioni</a>
          </li>
          <?php if(isset($_SESSION["Nome"]) && $_SESSION["Cognome"]): ?>
              <?php echo "<li><a href='index.php?action=logout'><span class='fa fa-sign-out mr-3'></span> Log out</a></li>"?>
              
              <?php else: ?>
              <?php endif; ?>

          
      </ul>
    </nav>



    <div id="content">
        <?php
              if(isset($templateParams["pagereq"])){
                require($templateParams["pagereq"]);
              }
        ?>
    </div>

</div>









































   <!--<div id="sidebarRight" class="order-last active">
   <div class="custom-menu">
      <button type="button" id="sidebarCollapseRight" class="btn btnMenuToggle">
      <i class="fa fa-bars white"></i>
      </button>
   </div>
   <div class="img bg-wrap text-center py-4">
      <div class="user-logo">
         <div class="img logo"></div>
         <?php if(isset($_SESSION["Nome"]) && $_SESSION["Cognome"]) ?>
         <div class="dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?php /*echo "<h2>"."Benvenuto ".$_SESSION["Nome"]." ".$_SESSION["Cognome"]."</h2>"*/ ?>
            </a>
            <ul class="dropdown-menu dropdown-menu-dark flex" aria-labelledby="navbarDarkDropdownMenuLink">
               <li><a class="dropdown-item" href="#">Action</a></li>
               <li><a class="dropdown-item" href="#">Another action</a></li>
               <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            <?php/* else: */?>
            <li class="nav-item"><a class="nav-link" href="./loginpage.php">Area riservata</a></li>
            <?php /* endif;  */?>
         </div>
      </div>
      <ul class="list-unstyled">
         <li class="active">
            <a href="#"><span class="fa fa-home mr-3"></span>Vai alla Mappa</a>
         </li>
      </ul>
   </div>
</div>-->

        <!-- Page Content  -->
     
        
  








		</div>


    <footer class="justify-content-center align-items-center py-3 border-top" id="myFooter">
      <div class="col">
          <p>©Copyright 2023 - ALMA MATER STUDIORUM - Università di Bologna - Via Zamboni, 33 - 40126 Bologna -
              Partita IVA: 01131710376</p>
      </div>
  </footer>



    
  </body>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
 

<script type="module" src="src/model/javascript/main.js"></script>

<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

  




    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <!-- JQuery e plugin -->
    <script src="plugin/jquery/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script  type="text/javascript" src="src/model/javascript/sidebar.js"></script>
    <script src="plugin/leaflet/leaflet-heat.js" type="text/javascript"></script>



    

<!--- <script>
let ctx = document.getElementById('myChart');

new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['09:00', '12:00', '15:00', '18:00', '21:00', '00:00'],
        datasets: [{
            label: 'Livelli del suono in dB',
            data: [60, 90, 85, 80, 55, 55],
            borderWidth: 1,
            tension: 0.2,
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true

            }
        }
    }
});
</script> ---->
    
</html>