<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SUPERVISION STEG</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
<script>
function afficher(x)
{
	
}
</script>
</head>
<body>
        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Accueil </a>
                    </li>
                    <h3 class="menu-title">Taches</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Gestion Employé</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="AjoutEmploye.php">Ajout Emplyé</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="MajEmploye.php">Maj Employé</a></li>
                            <li><i class="fa fa-bars"></i><a href="ListeEmploye.php">Liste Employés</a></li>
                        </ul>
                    </li>
					 <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Gestion Client</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="AjoutClient.php">Ajout Client</a></li>
                            <li><i class="fa fa-bars"></i><a href="ListeClient.php">Liste Clients</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Gestion Missions</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-table"></i><a href="AffecterMission.php">Affecter Mission</a></li>
                            <li><i class="fa fa-table"></i><a href="Missions.php">Liste Missions</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Factures</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="AjoutFacture.php">Ajout Facture</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="Factures.php">Liste des Factures</a></li>
                        </ul>
                    </li>
  <li class="menu-item-has-children active dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Réclamations</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="menu-icon fa fa-th"></i><a href="ReclamationClient.php">Réclamations Client</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="ReclamationEmploye.php">Réclamations Employé</a></li>
                        </ul>
                    </li>
                    <h3 class="menu-title">Administration</h3><!-- /.menu-title -->

                      <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Vie Privée</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="Login.php">Se déconnecter</a></li>
                        </ul>
                    </li>
                    

                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">


        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>STEG</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Administration </a></li>
                            <li><a href="#"> / </a></li>
                            <li class="active">Staff</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">


                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Espace Staff</strong>
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <div class="card-title">
                                      <h3 class="text-center">EMPLACEMENT EMPLOYES</h3>
                                  </div>
                                  <hr>
                                     
                                      <div class="form-group">
                                       
<div id="map" style="width:100%;height:500px;"></div>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter=new google.maps.LatLng(34.73,10.71);
  var mapOptions = {center: myCenter, zoom: 9};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  google.maps.event.addListener(map, 'click', function(event) {
    placeMarker(map, event.latLng);
  });
}

function placeMarker(map, location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  var infowindow = new google.maps.InfoWindow({
    content: 'Latitude: ' + location.lat() + '<br>Longitude: ' + location.lng()
  });
  infowindow.open(map,marker);
  document.getElementById("lat").value= location.lat();
  document.getElementById("lon").value= location.lng();
}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAO3jhh46uGF36_QI1OuiSEig1Wfwwhn0Y&callback=myMap"></script>



                                      </div>
									  <br>
									   <form action="addmission.php" method="post">
                                     <input type="hidden" id="compt" name="compt" />
									  <input type="hidden" id="agent" name="agent" />
                                      <div class="form-group">
                                          <label for="cc-payment" class="control-label mb-1">Latitude Choisie</label>
                                          <input id="lat" name="lat" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                      </div>
                                      <div class="form-group">
                                          <label for="cc-payment" class="control-label mb-1">Longitude Choisie</label>
                                          <input id="lon" name="lon" type="text" class="form-control" aria-required="true" aria-invalid="false" >
                                      </div>
									  <div class="form-group">
<select onchange="document.getElementById('compt').value=this.options[this.selectedIndex].text">
<option>Sélectionner un compteur</option>
<?php
										$con=mysqli_connect("localhost","root","","steg_app");
										$res=mysqli_query($con,"select * from client");
										while($r=mysqli_fetch_array($res,MYSQLI_NUM))
										{
											?>
											<option><?php echo $r[0]; ?></option>
										<?php
										}
										?>
</select>                                         
										 </div>
										 
										 <div class="form-group">
<select onchange="document.getElementById('agent').value=this.options[this.selectedIndex].text">
<option>Sélectionner un agent</option>
<?php
										$con=mysqli_connect("localhost","root","","steg_app");
										$res=mysqli_query($con,"select * from agent");
										while($r=mysqli_fetch_array($res,MYSQLI_NUM))
										{
											?>
											<option><?php echo $r[0]; ?></option>
										<?php
										}
										?>
</select>                                         
										 </div>
										  <button id="ok" type="submit" class="btn btn-lg btn-info btn-block">
                                              <i class="fa fa-lock fa-lg"></i>&nbsp;
                                              <span id="payment-button-amount">Validation</span>
                                              <span id="payment-button-sending" style="display:none;">Envoi ...</span>
                                          </button>
											</form>
									
                              </div>
                          </div>

                        </div>
                    </div> <!-- .card -->

                  </div><!--/.col-->
  
                     </div>

            </div>




    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
