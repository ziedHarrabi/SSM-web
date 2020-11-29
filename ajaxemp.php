<!doctype html>

<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
   
</head>
<body>
    

    <div id="right-panel" class="right-panel">


  

        <div class="content mt-3">

 <br>
 <?php
 $c=$_GET["cin"];
$con=mysqli_connect("localhost","root","","steg_app");
$res=mysqli_query($con,"select * from agent where cin='$c'");
if($r=mysqli_fetch_array($res,MYSQLI_NUM))
{
	?>
									   <form action="majemp.php" method="get">
                                     <input type="hidden" id="mat" name="mat" value="<?php echo $_GET["cin"]; ?>" />
									
                                      <div class="form-group">
                                          <label for="cc-payment" class="control-label mb-1">Nom Employé</label>
                                          <input id="nom" name="nom" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $r[1]; ?>" >
                                      </div>
									   <div class="form-group">
                                          <label for="cc-payment" class="control-label mb-1">Gsm Employé</label>
                                          <input id="gsm" name="gsm" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $r[2]; ?>"  >
                                      </div>
									   <div class="form-group">
                                          <label for="cc-payment" class="control-label mb-1">Login Employé</label>
                                          <input id="login" name="login" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $r[3]; ?>"  >
                                      </div>
									   <div class="form-group">
                                          <label for="cc-payment" class="control-label mb-1">Mot de passe Employé</label>
                                          <input id="pwd" name="pwd" type="text" class="form-control" aria-required="true" aria-invalid="false" value="<?php echo $r[4]; ?>"  >
                                      </div>
						   <input  id="ok" type="submit" name="MODIFIER" class="btn btn-lg btn-info btn-block" value="MODIFIER" />
                            <input  id="ok" type="submit" name="SUPPRIMER" class="btn btn-lg btn-info btn-block" value="SUPPRIMER" />
							</form>
							<?php
}
?>
									  
            </div>




    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
