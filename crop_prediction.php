

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

<div class="container ">
    
    	 <div class="row">
          <div class="col-md-8 mx-auto text-center">
            <span class="badge badge-danger badge-pill mb-3">Prediction</span>
          </div>
        </div>
		
          <div class="row row-content">
            <div class="col-md-12 mb-3">

				<div class="card text-white bg-gradient-success mb-3">
				  <div class="card-header">
				  <span class=" text-success display-4" > Crop Prediction  </span>					
				  </div>

				  <div class="card-body text-dark">
				     <form role="form" action="#" method="post" >     
					 
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

    <thead>
					<tr class="font-weight-bold text-default">
					<th><center> State</center></th>
					<th><center>District</center></th>
					<th><center>Season</center></th>
					<th><center>Prediction</center></th>
					
        </tr>
    </thead>
 <tbody>
                                 <tr class="text-center">

                                    <td>
                                    	<div class="form-group">
											<select onchange="print_city('state', this.selectedIndex);" id="sts" name ="stt" class="form-control" required></select>
											<script language="javascript">print_state("sts");</script>
											
										</div>
                                    </td>

									<td>
										<div class="form-group ">
											<select id ="state" name="district" class="form-control" required>
											<option value="">Select District</option>
											</select>
											<script language="javascript">print_state("sts");</script>
										</div>
                                    </td>
									
									<td>
										<div class="form-group ">
									
													<select name="Season" class="form-control">
													<option value="">Select Season ...</option>
													<option name="Kharif" value="Kharif">Kharif</option>
													<option name="Whole Year" value="Whole Year">Whole Year</option>
													<option name="Autumn" value="Autumn">Autumn</option>
													<option name="Rabi" value="Rabi">Rabi</option>
													<option name="Summer" value="Summer">Summer</option>
													<option name="Winter" value="Winter">Winter</option>
												
													</select>
										</div>

									</td>

									<td>
                                    <center>
										<div class="form-group ">
											<button type="submit" name="Crop_Predict" class="btn btn-success btn-submit">Predict</button>
										</div>
                                    
                                    </center>
                                    </td>

                                </tr>
                            </tbody>
	</table>
	</form>
</div>
</div>



<div class="card text-white bg-gradient-success mb-3">
				  <div class="card-header">
				  <span class=" text-success display-4" > Result  </span>					
				  </div>

					<h4>
					<?php 
					if(isset($_POST['Crop_Predict'])){
					$state=trim($_POST['stt']);
					$district=trim($_POST['district']);
					$season=trim($_POST['Season']);


					echo "Crops grown in ".$district." during the ".$season." season are :- ";

					$JsonState=json_encode($state);
					$JsonDistrict=json_encode($district);
					$JsonSeason=json_encode($season);
					
					$command = escapeshellcmd("python ML/crop_prediction/ZDecision_Tree_Model_Call.py $JsonState $JsonDistrict $JsonSeason");
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

