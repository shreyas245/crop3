<!DOCTYPE html>
<html>
<?php include ('header.php');  ?>

  <body class="bg-white" id="top">
  
<!-- NAV BAR STARTS -->

<nav
      id="navbar-main"
      class="
        navbar navbar-main navbar-expand-lg
        bg-default
        navbar-light
        position-sticky
        top-0
        shadow
        py-0
      "
    >
      <div class="container-fluid">
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
          <li class="nav-item dropdown">
            <a href="index.php" class="navbar-brand mr-lg-5 text-white">
                               <img src="assets/img/FYP logo1.png"   />
            </a>
          </li>
        </ul>

        <button
          class="navbar-toggler bg-white"
          type="button"
          data-toggle="collapse"
          data-target="#navbar_global"
          aria-controls="navbar_global"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="navbar-collapse collapse bg-default" id="navbar_global">
          <div class="navbar-collapse-header">
            <div class="row">
              <div class="col-10 collapse-brand">
                <a href="index.html">
                  <img src="assets/img/FYP logo (4).png"  />
                </a>
              </div>
              <div class="col-2 collapse-close bg-danger">
                <button
                  type="button"
                  class="navbar-toggler"
                  data-toggle="collapse"
                  data-target="#navbar_global"
                  aria-controls="navbar_global"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>

          <ul class="navbar-nav align-items-lg-center ml-auto topnav" id="nav">
          
             
          
     <li class="nav-item" id="prediction">
               <div class="dropdown show ">
          <a class="nav-link dropdown-toggle text-white " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-magic"></i> Prediction</span
                >
          </a>

           <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
           <a class="dropdown-item" href="crop_prediction.php">Crop Prediction​</a>
           <a class="dropdown-item" href="yield_prediction.php">Yield Prediction​</a>
            <a class="dropdown-item" href="rainfall_prediction.php">Rainfall Prediction​</a>
          </div>
        </div>
            </li>
            
            
            
             <li class="nav-item" id="recommendation">
               <div class="dropdown show ">
          <a class="nav-link dropdown-toggle text-white " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-gavel"></i> Recommendation</span
                >
          </a>

           <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="crop_recommendation.php">Crop Recommendation​</a>
            <a class="dropdown-item" href="fertilizer_recommendation.php">Fertilizer Recommendation​</a>
          </div>
        </div>
            </li>
            <li class="nav-item">
                    <a class="nav-link text-white" href="home.php">
                        <span class="text-white nav-link-inner--text"><i class="text-white fas fa-info-circle"></i> HOME</span>
                    </a>
                </li>
            


          </ul>
        </div>
      </div>
    </nav>
    
<!-- NAV BAR ENDS -->

 
  <section class="section section-shaped section-lg">
    <div class="shape shape-style-1 shape-primary">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
<!-- ======================================================================================================================================== -->

<div class="container-fluid ">
    
    	 <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-danger badge-pill mb-3">Recommendation</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">

				<div class="card text-white bg-gradient-success mb-3">
				<form role="form" action="#" method="post" >  
				  <div class="card-header">
				  <span class=" text-info display-4" > Fertilizer Recommendation  </span>	
						<span class="pull-right">
							<button type="submit" value="Recommend" name="Fert_Recommend" class="btn btn-warning btn-submit">SUBMIT</button>
						</span>		
				  
				  </div>

				  <div class="card-body text-dark">
					 
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

    <thead>
					<tr class="font-weight-bold text-default">
					<th><center> Nitrogen</center></th>
					<th><center>Phosporous</center></th>
					<th><center>Potasioum</center></th>
					<th><center>Temparature</center></th>
					<th><center>Humidity</center></th>
					<th><center>Soil Moisture</center></th>
					<th><center>Soil Type</center></th>
					<th><center>Crop</center></th>
        </tr>
    </thead>
 <tbody>
                                 <tr class="text-center">
                                    <td>
                                    	<div class="form-group">
											<input type = 'number' name = 'n' placeholder="Nitrogen Eg:37" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'p' placeholder="Phosphorus Eg:0" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'k' placeholder="Pottasium Eg:0" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 't'  placeholder="Temperature Eg:26" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name = 'h'  placeholder="Humidity Eg:52" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    	<div class="form-group">
											<input type = 'number' name='soilMoisture' placeholder="Soil Moisture Eg:38" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
										<div class="form-group ">
													<select name="soil" class="form-control">
													<option  value="">Select Soil Type</option>
													<option  value="Sandy">Sandy</option>
													<option  value="Loamy">Loamy</option>
													<option  value="Black">Black</option>
													<option  value="Red">Red</option>
													<option  value="Clayey">Clayey</option>											
													</select>
										</div>
									</td>
									
									<td>
										<div class="form-group ">
									<select name="crop" class="form-control">
													<option  value="">Select Crop</option>
													<option  value="Maize">Maize</option>
													<option  value="Sugarcane">Sugarcane</option>
													<option  value="Cotton">Cotton</option>
													<option  value="Tobacco">Tobacco</option>
													<option  value="Paddy">Paddy</option>	
													<option  value="Barley">Barley</option>	
													<option  value="Wheat">Wheat</option>	
													<option  value="Millets">Millets</option>	
													<option  value="Oil seeds">Oil seeds</option>	
													<option  value="Pulses">Pulses</option>	
													<option  value="Ground Nuts">Ground Nuts</option>													
													</select>
										</div>

									</td>
                                </tr>
                            </tbody>
							
					
	</table>
	</div>
	</form>

</div>



<div class="card text-white bg-gradient-success mb-3">
				  <div class="card-header">
				  <span class=" text-success display-4" > Result  </span>					
				  </div>

					<h4>
					<?php 
					if(isset($_POST['Fert_Recommend'])){
					$n=trim($_POST['n']);
					$p=trim($_POST['p']);
					$k=trim($_POST['k']);
					$t=trim($_POST['t']);
					$h=trim($_POST['h']);
					$sm=trim($_POST['soilMoisture']);
					$soil=trim($_POST['soil']);
					$crop=trim($_POST['crop']);


					echo "Recommended Fertilizer is : ";

					$Jsonn=json_encode($n);
					$Jsonp=json_encode($p);
					$Jsonk=json_encode($k);
					$Jsont=json_encode($t);
					$Jsonh=json_encode($h);
					$Jsonsm=json_encode($sm);
					$Jsonsoil=json_encode($soil);
					$Jsoncrop=json_encode($crop);

					$command = escapeshellcmd("python ML/fertilizer_recommendation/fertilizer_recommendation.py $Jsonn $Jsonp $Jsonk $Jsont $Jsonh $Jsonsm $Jsonsoil $Jsoncrop ");
                    $output = passthru($command);
					echo $output;					
					}
                    ?>
					</h4>
            </div>
 
	
	
            </div>
          </div>  
       </div>
		 
</section>

    <?php require("footer.php");?>

</body>
</html>

