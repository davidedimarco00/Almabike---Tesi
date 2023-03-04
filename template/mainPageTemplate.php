  <?php if(isSet($_GET["formmsg"])): ?>
    <div class="error">
        <h5 class="text-center">Attenzione!</h5>
        <p class="text-center"><?php echo $_GET["formmsg"]; ?></p>
    </div>
  <?php endif; ?>

  



  <div class="myContainer">
    <div id="map"></div>
  </div>
  
  <div class="containerr">
  

    <div class="row justify-content-end" >
        <div class="col-md-3" >

          <div class="card text-center">
            <form class="sensorsSelection" id = "formSensor" action="POST">

                <select class="form-select" aria-label="Sensor selection" id="selectSensor" name="sensorName" >
                  <option value="" selected> Scegli sensore...</option>
                  <option value=""> Sensori disponibili: <? echo count($templateParams["devices"]) ?></option>
                    <?php foreach($templateParams["devices"] as $current): ?>
                      
                      <option value="<?php echo $current['Name']?>" name="<?php echo $current['Name']?>">Sensore <?php echo $current['Name']?></option>
                    <?php endforeach; ?>
                </select>
              </form>
          </div>












      

        <div class="card text-center">
          
        <form id="chartForm" class="row align-items-start">
          
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs justify-content-center">

                <li class="nav-item">
                  <a class="nav-link active" id="daily">Giornaliero</a>
                </li>


                <li class="nav-item">
                  <a class="nav-link" id="weekly">Settimanale</a>
                </li>


                <li class="nav-item">
                <input type="hidden" class="link"><a class="nav-link"  id="monthly">Mensile</a></input>
                </li>
                <li class="nav-item">
                  <input type="hidden" id="inputAnnual" value="annual" name="typeofdate"><a class="nav-link"  id="annual">Annuale</a></input>
                </li>
              </ul>
            </div>

            

            <div class="card-body">
                  <div class="col-12 justify-content-start">
                    <input type="date" placeholder="Seleziona anno" class="form-control" id="datepicker" name="datepicker" min-value="<?php echo $templateParams["initialYear"][0]['initialYear']?>" required></input>
                    <button id="searchChart" class="btn btn-primary">Cerca</button>
                  </div>
	            </form>

                  <div class = "chartContainer">
                    <canvas id="myChart"></canvas>
                  </div>
              </div>   
        </div>  
  </div>



  


  




 






