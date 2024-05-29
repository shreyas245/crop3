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


<div class="wrapper" >

    <div class="wrapper">
      <header class="jumbotron bg-gradient-warning">
        <div class="container">
          <div class="row row-header">
            <div class="col-12 col-sm-7">
              <h1 class="text-white">EcoHarvestors</h1>
              <p class="text-white">
              Maximize Harvests, Minimize Risks: EcoHarvestors Delivers Prosperous Fields.
              </p>
              <div class="cg">
                <div class="card card-body bg-gradient-success">
                  <blockquote cite="blockquote">
                    <h6 class="mb-0 text-dark">
                      <em
                        ><b
                          > “Welcome to EcoHarvestors, transforming farming in India. Facing weather unpredictability and market shifts, farmers struggle with low yields or surplus produce wastage. EcoHarvestors offers tailored solutions with precise predictions on rainfall, yield forecasts, and personalized crop and fertilizer recommendations. With us, farmers navigate uncertainties confidently, ensuring optimal yields and minimal wastage, shaping a prosperous farming future. Join us today!”</b
                        ></em
                      >
                    </h6>
                    <br />

                   
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-3 offset-sm-2 align-self-center">
              <img src="assets\img\farmer_happy.png" class="img-fluid" style="width: 1000px; height: 200px;" alt="" />
            </div>
          </div>
        </div>
        <link rel="stylesheet" href="css/swiper-bundle.min.css" />
        <link rel="stylesheet" type="text/css" href="style.css">

      </header>
<!-- Page Content -->

<!-- ======================================================================================================================================== -->
<div class="container text-center">
    <h1>Prediction and Recommendation Services</h1>
    <span><i class="zmdi zmdi-favorite red"></i> <strong>Optimizing harvests through precise agricultural insights and personalized recommendations.</strong>  <i><a class="wsk-btn"></a></i></span>
</div>

<div class="shell">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="wsk-cp-product">
                    <a href="yield_prediction.php">
                        <div class="wsk-cp-img">
                            <img src="assets\img\yeild_new.jpeg" alt="Product" class="img-responsive" />
                        </div>
                    </a>
                    <div class="wsk-cp-text">
                        <div class="category">
                            <span>Yeild Prediction</span>
                        </div>
                        
                        <div class="description-prod">
                            <p>Yield prediction offers farmers insights into expected crop production, aiding in planning and resource allocation for optimal harvests.                                    </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="wsk-cp-product">
                    <a href="rainfall_prediction.php">
                        <div class="wsk-cp-img">
                            <img src="assets\img\rainfall_new.jpeg" alt="Product" class="img-responsive" />
                        </div>
                    </a>
                    <div class="wsk-cp-text">
                        <div class="category">
                            <span>Rainfall Prediction</span>
                        </div>
                        
                        <div class="description-prod">
                            <p>Rainfall prediction helps farmers anticipate precipitation patterns, enabling effective irrigation for improved agricultural outcomes.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="wsk-cp-product">
                    <a href="fertilizer_recommendation.php">
                        <div class="wsk-cp-img">
                            <img src="assets\img\fettilizer_new.jpeg" alt="Product" class="img-responsive" />
                        </div>
                    </a>
                    <div class="wsk-cp-text">
                        <div class="category">
                            <span>Fertilizer Recommendation</span>
                        </div>
                        
                        <div class="description-prod">
                            <p>Fertilizer recommendation advises farmers on the types and amounts of fertilizers to apply, enhancing soil fertility and crop yield</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="wsk-cp-product">
                    <a href="crop_recommendation.php">
                        <div class="wsk-cp-img">
                            <img src="assets\img\crop recommendation_new.jpeg" alt="Product" class="img-responsive" />
                        </div>
                    </a>
                    <div class="wsk-cp-text">
                        <div class="category">
                            <span>Crop Recommendation</span>
                        </div>
                        
                        <div class="description-prod">
                            <p>Crop recommendation guides farmers in selecting suitable crops based on soil, climate, and market conditions, optimizing yield and profit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

   <!-- <div class="shell">
  <div class="container">
    <div class="row justify-content-center align-items-center"> 
      <div class="col-md-3">
        <div class="wsk-cp-product">
          <div class="wsk-cp-img">
            <img src="https://3.bp.blogspot.com/-eDeTttUjHxI/WVSvmI-552I/AAAAAAAAAKw/0T3LN6jABKMyEkTRUUQMFxpe6PLvtcMMwCPcBGAYYCw/s1600/001-culture-clash-matthew-gianoulis.jpg" alt="Product" class="img-responsive" />
          </div>
          <div class="wsk-cp-text">
            <div class="category">
              <span>Ethnic</span>
            </div>
            <div class="title-product">
              <h3>My face not my heart</h3>
            </div>
            <div class="description-prod">
              <p>Description Product tell me how to change playlist height size like 600px in html5 player. player good work now check this link</p>
            </div>
            <div class="card-footer">
              <div class="wcf-left"><span class="price">Rp500.000</span></div>
              <div class="wcf-right"><a href="#" class="buy-btn"><i class="zmdi zmdi-shopping-basket"></i></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>-->


    


















  
<div class="section features-6 text-dark bg-white" id="services">
      <div class="container ">
      <div class="section features-6 text-dark bg-white" id="features">

        <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <span class="badge badge-primary badge-pill mb-3">Insight</span>
                    <h3 class="display-3 ">Features</h3>
                </div>
            </div>
			<br>
			
        <div class="row align-items-center">
		
          <div class="col-lg-6">
            <div class="info info-horizontal info-hover-success">
              <div class="description pl-4">
                <h3 class="title" >Crop Prediction</h3>
           <p class=" ">Our innovative feature, Crop Prediction, revolutionizes the way you plan your agricultural endeavors. By simply inputting your state, district, and preferred season, our advanced algorithm harnesses the power of data analytics to forecast the most suitable crops for your region. </p>
                        
              </div>
            </div>

          </div>
		  
		  
          <div class="col-lg-6 col-10 mx-md-auto d-none d-md-block">
            <img class="ml-lg-5  pull-right" src="assets/img/agri.png" width="100%">
          </div>
        </div>
        

        <div class="row align-items-center">
          <div class="col-lg-6 col-10 mx-md-auto d-none d-md-block">
            <img class="ml-lg-5  pull-right" src="assets/img/yeild-removebg-preview.png" width="80%">
          </div>
		
          <div class="col-lg-6">
            <div class="info info-horizontal info-hover-success">
              <div class="description pl-4">
                <h3 class="title" >Yeild Prediction
</h3>
           <p class=" ">Yield Prediction feature empowers farmers with precise insights for optimized harvests. Simply input your state, district, season, chosen crop, and area, and our advanced algorithm will forecast the expected yield tailored to your specific conditions. Whether you're planning for a small garden or a vast farm, EcoHarvestors provides invaluable guidance to maximize your productivity and profitability. </p>
                        
              </div>
            </div>

          </div>
		  
		  
          
        </div>

        <div class="row align-items-center">
		
          <div class="col-lg-6">
            <div class="info info-horizontal info-hover-success">
              <div class="description pl-4">
                <h3 class="title" >Rainfall Prediction</h3>
           <p class=" ">With our innovative Rainfall Prediction feature, you can now anticipate precipitation with accuracy and confidence. Simply input your region and desired month, and our advanced algorithm will provide a precise forecast of rainfall in millimeters. Whether you're scheduling planting, irrigation, or harvest, knowing the expected rainfall can significantly enhance your decision-making process. </p>
                        
              </div>
            </div>

          </div>
		  
		  
          <div class="col-lg-6 col-10 mx-md-auto d-none d-md-block">
            <img class="ml-lg-5  pull-right" src="assets/img/rainfall_prediction.png" width="70%">
          </div>
        </div>
        

        <div class="row align-items-center">
          <div class="col-lg-6 col-10 mx-md-auto d-none d-md-block">
            <img class="ml-lg-5  pull-right" src="assets/img/Fertilizer Recommendation.png" width="70%" >
          </div>
		
          <div class="col-lg-6">
            <div class="info info-horizontal info-hover-success">
              <div class="description pl-4">
                <h3 class="title" >Fertilizer Recommendation
</h3>
           <p class=" ">Fertilizer Prediction feature brings precision to your agricultural practices. By inputting key factors such as nitrogen, phosphorus, potassium levels, temperature, humidity, soil moisture, soil type, and crop type, our algorithm generates tailored recommendations for the appropriate fertilizer blend needed for optimal plant growth. Whether you're cultivating vegetables, grains, or fruits, EcoHarvestors ensures that your crops receive the nutrients they need, precisely when they need them. </p>
                        
              </div>
            </div>

          </div>
		  
		  
          
        </div>

        <div class="row align-items-center">
		
          <div class="col-lg-6">
            <div class="info info-horizontal info-hover-success">
              <div class="description pl-4">
                <h3 class="title" >Crop Recommendation</h3>
           <p class=" ">Crop Recommendation feature revolutionizes agricultural planning. By inputting essential parameters such as nitrogen, phosphorus, potassium levels, temperature, humidity, pH, and rainfall, our advanced algorithm delivers tailored crop recommendations. Whether you're a seasoned farmer or a novice enthusiast, our platform guides you towards selecting the most suitable crops for your specific conditions.  </p>
                        
              </div>
            </div>

          </div>
		  
		  
          <div class="col-lg-6 col-10 mx-md-auto d-none d-md-block">
            <img class="ml-lg-5  pull-right" src="assets/img/Crop Recommendation.png" width="80%">
          </div>
        </div>
        

		
		

      </div>
    </div>

    

     
<!-- ======================================================================================================================================== -->

      <div class="section features-2 text-dark bg-white" id="features"> 
        <div class="container"> 
          <div class="row align-items-center"> 
            <div class="col-lg-5 col-md-8 mr-auto text-left"> 
              <div class="pr-md-5"> 
                <div class="icon icon-lg icon-shape icon-shape-primary shadow rounded-circle mb-5"> <i class="ni ni-favourite-28"> </i></div>
                <h3 class="display-3 text-justify">Features</h3>
                <p>The time is now for the next step in farming. We bring you the future of farming along with great tools for asisting the farmers.</p>
                <ul class="list-unstyled mt-5"> 
                  <li class="py-2"> 
                    <div class="d-flex align-items-center"> 
                      <div>
                        <div class="badge badge-circle badge-primary mr-3"> <i class="ni ni-settings-gear-65"> </i></div>
                      </div>
                      <div>
                        <h6 class="mb-0">Crop Prediction and Recommendation</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2"> 
                    <div class="d-flex align-items-center"> 
                      <div>
                        <div class="badge badge-circle badge-primary mr-3"> <i class="ni ni-html5"> </i></div>
                      </div>
                      <div>
                        <h6 class="mb-0">Fertilizer Recommendation</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2"> 
                    <div class="d-flex align-items-center"> 
                      <div>
                        <div class="badge badge-circle badge-primary mr-3"> <i class="ni ni-settings-gear-65"> </i></div>
                      </div>
                      <div>
                        <h6 class="mb-0">yield Prediction</h6>
                      </div>
                    </div>
                  </li>
                  <li class="py-2"> 
                    <div class="d-flex align-items-center"> 
                      <div>
                        <div class="badge badge-circle badge-primary mr-3"> <i class="ni ni-satisfied"> </i></div>
                      </div>
                      <div>
                        <h6 class="mb-0">Rainfall Prediction</h6>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
			

		  
            <div class="col-lg-7 col-md-12 pl-md-0"> 
 <img class="img-fluid ml-lg-5" src="assets/img/features.png" width="100%">
 </div>
			
			
          </div>
        </div>
        <span > </span>
      </div>
     
	<!-- ======================================================================================================================================== -->
 
	 

 <div class="section features-6 text-dark bg-white" id="tech">
        <div class="container-fluid shado">

            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <span class="badge badge-primary badge-pill mb-3">stack</span>
                    <h3 class="display-3 ">Technologies Used</h3>
                    <p class="" >Our Development Stack</p>
                </div>
            </div>

            <div class="row text-lg-center align-self-center">

                  <div class="col-md-4">
                    <div class="info">
                    <img class=" img-fluid" src="assets/img/html.png" alt="HTML5">                       
                        <h6 class="info-title text-uppercase text-primary">HTML5</h6>
                    </div>
                </div>

               <div class="col-md-4">
                    <div class="info">
                    <img class=" img-fluid" src="assets/img/css3.png" alt="CSS3">                       
                        <h6 class="info-title text-uppercase text-primary">CSS3</h6>
                    </div>
                </div>

               <div class="col-md-4">
                    <div class="info">
                    <img class=" img-fluid" src="assets/img/js.png" alt="JavaScript">                       
                        <h6 class="info-title text-uppercase text-primary">JavaScript</h6>
                    </div>
                </div>





</div>

<div class="row text-center ">            

                 <div class="col-md-4 d-none d-md-block">
                    <div class="info">
                    <img class=" img-fluid" src="assets/img/bootstrap.png" alt="BootStrap4">                       
                        <h6 class="info-title text-uppercase text-primary">BootStrap4</h6>
                    </div>
                </div>

                 <div class="col-md-4 d-none d-md-block">
                    <div class="info">
                    <img class=" img-fluid" src="assets/img/apache.png" alt="Apache">                       
                        <h6 class="info-title text-uppercase text-primary">Apache</h6>
                    </div>
                </div>
                
                 <div class="col-md-4 d-none d-md-block">
                    <div class="info">
                    <img class=" img-fluid" src="assets/img/mysql.png" alt="MySQL">                       
                        <h6 class="info-title text-uppercase text-primary">MySQL</h6>
                    </div>
                </div>

                
            </div>


        </div>
    </div>

<?php require("footer.php");?>


</body>

</html>