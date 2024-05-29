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
				<form role="form" action="#" method="post" >  
				  <div class="card-header">
				  <span class=" text-info display-4" > Yield Prediction  </span>	
				  
				  </div>

				  <div class="card-body text-dark">
					 
				<table class="table table-striped table-hover table-bordered bg-gradient-white text-center display" id="myTable">

    <thead>
					<tr class="font-weight-bold text-default">
					<th><center> State</center></th>
					<th><center>District</center></th>
					<th><center>Season</center></th>
					<th><center>Crop</center></th>
					<th><center>Area</center></th>
					<th><center>Prediction</center></th>
					
					
        </tr>
    </thead>
 <tbody>
                                    <tr class="text-center">

                                   <td>
                                    	<div class="form-group">
										<select  name="state" class="form-control" required>
											<option value="Karnataka">Karnataka</option>
										</select>
																				
										</div>
                                    </td>

									<td>
										<div class="form-group ">
										<select id="district" name="district" class="form-control" required>
										  <option value="">Select a district</option>
										  <option value="BAGALKOT">Bagalkot</option>
										  <option value="BANGALORE_RURAL">Bangalore Rural</option>
										  <option value="BELGAUM">Belgaum</option>
										  <option value="BELLARY">Bellary</option>
										  <option value="BENGALURU_URBAN">Bengaluru Urban</option>
										  <option value="BIDAR">Bidar</option>
										  <option value="BIJAPUR">Bijapur</option>
										  <option value="CHAMARAJANAGAR">Chamarajanagar</option>
										  <option value="CHIKBALLAPUR">Chikballapur</option>
										  <option value="CHIKMAGALUR">Chikmagalur</option>
										  <option value="CHITRADURGA">Chitradurga</option>
										  <option value="DAKSHIN_KANNAD">Dakshin Kannad</option>
										  <option value="DAVANGERE">Davangere</option>
										  <option value="DHARWAD">Dharwad</option>
										  <option value="GADAG">Gadag</option>
										  <option value="GULBARGA">Gulbarga</option>
										  <option value="HAVERI">Haveri</option>
										  <option value="HASSAN">Hassan</option>
										  <option value="KODAGU">Kodagu</option>
										  <option value="KOLAR">Kolar</option>
										  <option value="KOPPAL">Koppal</option>
										  <option value="MANDYA">Mandya</option>
										  <option value="MYSORE">Mysore</option>
										  <option value="RAMANAGARA">Ramanagara</option>
										  <option value="RAICHUR">Raichur</option>
										  <option value="SHIMOGA">Shimoga</option>
										  <option value="TUMKUR">Tumkur</option>
										  <option value="UDUPI">Udupi</option>
										  <option value="UTTAR_KANNAD">Uttar Kannad</option>
										  <option value="YADGIR">Yadgir</option>
										</select>

										</div>
                                    </td>
									
									<td>
										<div class="form-group ">
									
													<select name="Season" class="form-control" id="season" required>
													<option value="">Select Season ...</option>
													<option name="Kharif" value="Kharif">Kharif</option>
													<option name="Rabi" value="Rabi">Rabi</option>
													<option name="Summer" value="Summer">Summer</option>
													<option name="WholeYear" value="WholeYear">Whole Year</option>
											
													</select>
										</div>

									</td>
									
									<td>
                                    	<div class="form-group" >
										<select id="crop" class="form-control" name="crops" required>
									  <option value="">Select crop</option>
									</select>
											
										</div>
                                    </td>
									<script> 
document.getElementById("season").addEventListener("change", function() {  
 
const districtDropdown = document.getElementById('district');
const seasonDropdown = document.getElementById('season');
const cropDropdown = document.getElementById('crop');

 console.log(districtDropdown);
   console.log(seasonDropdown);
  console.log(cropDropdown);
  
  const selectedDistrict = districtDropdown.value;
  const selectedSeason = seasonDropdown.value;

  // Clear the current crop options
  cropDropdown.innerHTML = '<option value="">Select crop</option>';
  
  // If both district and season are selected, add the corresponding crop options to the dropdown
if (selectedDistrict && selectedSeason) {
  const options = cropOptions[selectedDistrict][selectedSeason];
  for (const option of options) {
    const optionElement = document.createElement('option');
    optionElement.value = option; // Set the value to the option text
    optionElement.text = option;
    cropDropdown.appendChild(optionElement);
  }
}
  
}); 
</script>  
									<td>
                                    	<div class="form-group">
											<input type = "number" step=0.01 name="area" placeholder="Area in Hectares" required class="form-control">
											
										</div>
                                    </td>
									
									<td>
                                    <center>
										<div class="form-group ">
											<button type="submit" value="Yield" name="Yield_Predict" class="btn btn-success btn-submit">Predict</button>
										</div>
                                    
                                    </center>
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
					
					
					if(isset($_POST['Yield_Predict'])){

					$state=trim($_POST['state']);
					$district=trim($_POST['district']);
					$season=trim($_POST['Season']);
					$crops=trim($_POST['crops']);
					$area=trim($_POST['area']);


					echo "Predicted crop yield (in Quintal) is: ";

					$Jstate=json_encode($state);
					$Jdistrict=json_encode($district);
					$Jseason=json_encode($season);
					$Jcrops=json_encode($crops);
					$Jarea=json_encode($area);

					$command = escapeshellcmd("python ML/yield_prediction/yield_prediction.py $Jstate $Jdistrict $Jseason $Jcrops $Jarea ");
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

