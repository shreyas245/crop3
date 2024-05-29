<!DOCTYPE html>
<html>
<html lang="en">

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Your CSS styles */
    </style>
</head>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 120%;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 100px; /* Adjust the gap between profiles */
        }

        .profile {
            width: 250px; /* Adjust the width of each profile */
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0);
            text-align: center;
        }

        .profile img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            margin-bottom: 20px;
            border: 5px solid #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .profile h2 {
            font-size: 24px;
            margin: 0 0 10px;
            color: #fff;
        }

        .profile p {
            margin: 0 0 10px;
            font-size: 16px;
            color: #666;
        }

        .profile .icon {
            color: #55acee;
            font-size: 24px;
            margin-right: 10px;
        }
        .fertilizer-info {
            display: none;
            transition: all 0.3s ease; /* Smooth transition */
        }

        .fertilizer-image {
            cursor: pointer;
            transition: transform 0.3s ease; /* Smooth transition */
        }

        .fertilizer-image:hover {
            transform: scale(1.1); /* Scale up image on hover */
        }
        .topnav a {
  border-bottom: 3px solid transparent;
}

.topnav a:hover {
  border-bottom: 3px solid red;
}

.topnav a.activa {
  border-bottom: 3px solid red;
}
.navbar-brand img {
  max-width: 200px;
  height: auto;
}
img {
        border-radius: 50%;
    }
       

</style>
</head>
<?php include ('header.php');  ?>

<body class="bg-white" id="top">


<nav id="navbar-main" class="navbar navbar-main navbar-expand-lg bg-default navbar-light position-sticky top-0 shadow py-0">
    <div class="container-fluid">
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item dropdown">
                <a href="index.php" class="navbar-brand mr-lg-5 text-white">
                    <img src="assets/img/FYP logo2.png" />
                </a>
            </li>
        </ul>

        <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="navbar-collapse collapse bg-default" id="navbar_global">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-10 collapse-brand">
                        <a href="index.html">
                            <img src="assets/img/FYP logo2.png" />
                        </a>
                    </div>
                    <div class="col-2 collapse-close bg-danger">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            

            <ul class="navbar-nav align-items-lg-center ml-auto topnav" id="nav">
            
            



            <li class="nav-item" >
			   <div class="dropdown show ">
		  <a class="nav-link dropdown-toggle text-white " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		                  <span class="text-white nav-link-inner--text"
                  ><i class="text-white fas fa-magic"></i> Guide</span
                >
		  </a>

		   <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">

       
		   <a class="dropdown-item" href="#Fertilizers">Fertilizers</a>
       <a class="dropdown-item" href="#Seasons">Seasons</a>

		
		  </div>
		</div>
			</li>

               
            

            




            
            <li class="nav-item">
                    <a class="nav-link text-white" href="#features">
                        <span class="text-white nav-link-inner--text"><i class="text-white fas fa-magic"></i> Features</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#about-us">
                        <span class="text-white nav-link-inner--text"><i class="text-white fas fa-info-circle"></i> About</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#FAQs">
                        <span class="text-white nav-link-inner--text"><i class="text-white fas fa-info-circle"></i> FAQs</span>
                    </a>
                </li>
            </ul>
        </div>
    </div> 
</nav>

<!-- Get Started Section -->
<section id="get-started" class="py-5 bg-light" >
            <div class="row justify-content-center">
                <div class="col-sm-6 text-center ">
                    <h2 class="mb-4">Get Started</h2>
                    <p class="lead">Ready to join us? Sign in to your account and start exploring!</p>
                    <a href="http://localhost:3000/" class="btn btn-primary btn-lg">Sign In</a>
                </div>
                <div class="col-sm-6  text-center">
                    <h2 class="mb-4">New to EcoHarvesters</h2>  
                    <p class="lead">Ready to join us? Sign in to your account and start exploring!</p>
                    <a href="registrationForm.php" class="btn btn-primary btn-lg">Sign In</a>
                </div>
            </div>
        </section>
        <!-- End Get Started Section -->
    </div>






    

<!-- Page Content
<div class="wrapper" >

    <div class="wrapper">
      <header class="jumbotron bg-gradient-warning">
        <div class="container">
          <div class="row row-header">
            <div class="col-12 col-sm-7">
              <h1 class="text-white">EcoHarvestors</h1>
              <p class="text-white">
               A True Farmer's Friend.
              </p>
              <div class="cg">
                <div class="card card-body bg-gradient-success">
                  <blockquote cite="blockquote">
                    <h6 class="mb-0 text-dark">
                      <em
                        ><b
                          > “Farming looks mighty easy when your plow is a pencil, and you're a thousand miles from the corn field..”</b
                        ></em
                      >
                    </h6>
                    <br />

                    <footer class="blockquote-footer vg text-dark">
                      DWIGHT D. EISENHOWER
                    </footer>
                  </blockquote>
                </div>
              </div>
            </div>
            <div class="col-12 col-sm-3 offset-sm-2 align-self-center">
              <img src="assets/img/123.png" class="img-fluid" alt="" />
            </div>
          </div>
        </div>
      </header>
 -->


<!-- ======================================================================================================================================== -->

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
    <body>

    <!-- FAQs -->
    
    <div class="section FAQs" id="FAQs">





<div class="section features-6 text-dark bg-white" id="services">
      <div class="container ">
      <div class="section features-6 text-dark bg-white" id="faqs">

        <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <span class="badge badge-primary badge-pill mb-3">Insight</span>
                    <h3 class="display-3 ">FAQs</h3>
                </div>
            </div>
			<br>
			
        <div class="row align-items-center">
		
              <div class="description pl-4">
                
              <h3>General Questions:</h3>
        <p><strong>Q: What is EcoHarvestors?</strong><br>
           A: EcoHarvestors is an innovative platform designed to assist farmers and agricultural enthusiasts in optimizing their farming practices using data-driven insights and predictive analytics.</p>
        
        <p><strong>Q: How does EcoHarvestors work?</strong><br>
           A: EcoHarvestors utilizes advanced algorithms and data analysis techniques to provide users with accurate predictions and recommendations related to crop selection, yield optimization, rainfall forecasts, fertilizer recommendations, and more.</p>

        <p><strong>Q: Is EcoHarvestors suitable for all types of farming?</strong><br>
           A: Yes, EcoHarvestors is designed to cater to a wide range of farming practices, including small-scale farming, large-scale agriculture, greenhouse cultivation, and more.</p>

        <!-- Usage and Features -->
        <h3>Usage and Features:</h3>
        <p><strong>Q: What features does EcoHarvestors offer?</strong><br>
           A: EcoHarvestors offers a variety of features, including crop prediction, yield prediction, rainfall prediction, fertilizer recommendation, crop recommendation, and more.</p>
        
        <p><strong>Q: How accurate are the predictions provided by EcoHarvestors?</strong><br>
           A: EcoHarvestors utilizes advanced algorithms and continuously updated datasets to provide highly accurate predictions. However, users should also consider local conditions and expert advice when making farming decisions.</p>

        
        <!-- Support and Assistance -->
        <h3>Support and Assistance:</h3>
        <p><strong>Q: How can I get help if I encounter issues or have questions?</strong><br>
           A: If you have any questions or encounter any issues while using EcoHarvestors, you can reach out to our customer support team via email or through the contact form on our website. Our support team is available to assist you.</p>
        
        <p><strong>Q: Does EcoHarvestors offer training or tutorials for new users?</strong><br>
           A: Yes, EcoHarvestors provides comprehensive training materials, tutorials, and user guides to help new users get started with the platform. You can access these resources through our website or contact our support team for assistance.</p>

        <!-- Additional Questions -->
        <h3>Additional Questions:</h3>
        <p><strong>Q: Can I access EcoHarvestors on mobile devices?</strong><br>
           A: Yes, EcoHarvestors is optimized for mobile devices, allowing users to access the platform conveniently from smartphones and tablets.</p>
        
        <p><strong>Q: How often are the data and predictions updated on EcoHarvestors?</strong><br>
           A: We update our data and predictions regularly to ensure accuracy and relevance. Our algorithms incorporate the latest data from reliable sources to provide up-to-date insights.</p>

        
        <p><strong>Q: What are the system requirements to use EcoHarvestors?</strong><br>
           A: EcoHarvestors is a web-based platform and can be accessed using any modern web browser on desktop and mobile devices. No additional software installation is required.</p>
        
        <p><strong>Q: Does EcoHarvestors offer a free trial for the premium subscription?</strong><br>
           A: Yes, we offer a free trial period for our premium subscription plan. You can sign up for a free trial to explore all the advanced features before committing to a subscription.</p>

        <p><strong>Q: Can I use EcoHarvestors for organic farming?</strong><br>
           A: Yes, EcoHarvestors is suitable for both conventional and organic farming practices. Our platform provides recommendations tailored to your specific farming methods.</p>
        
        <p><strong>Q: Is EcoHarvestors available in multiple languages?</strong><br>
           A: Currently, EcoHarvestors is available in English. However, we are working on adding support for additional languages in the future.</p>
        
              </div>
            </div>

          </div>
          </div>




    <!-- Fertilizer info -->

    <div class="container">
    <div class="section about-us" id="Fertilizers">

           
    <div class="row">
                <div class="col-md-12 mx-auto text-center">
                    <h3 class="display-3 ">Fertilizers</h3>
                </div>
            </div>
			

            <div class="container">
            <div class="fertilizer">
        <img src="assets/img/urea.jpeg" width="70" alt="Urea" class="fertilizer-image" onclick="toggleInfo('urea-info')">
        <div id="urea-info" title="Urea" class="fertilizer-info">
            <h2>Urea (46-0-0)</h2>
            <p><strong>Composition:</strong> Urea is a nitrogenous fertilizer containing 46% nitrogen in the form of urea.</p>
            <p><strong>Usage:</strong> It's commonly used as a nitrogen fertilizer for crops requiring a quick nitrogen boost. Urea needs to be incorporated into the soil or watered in to prevent nitrogen loss through volatilization.</p>
        </div>
    </div>

    <div class="fertilizer">
        <img src="assets/img/DA{.jpeg" width="70" alt="DAP" class="fertilizer-image" onclick="toggleInfo('dap-info')">
        <div id="dap-info" class="fertilizer-info">
            <h2>DAP (18-46-0)</h2>
            <p><strong>Composition:</strong> DAP contains 18% nitrogen and 46% phosphorus (as P2O5).</p>
            <p><strong>Usage:</strong> DAP is widely used as a starter fertilizer due to its high phosphorus content, which promotes root development and early plant growth. It's suitable for a variety of crops, especially those with high phosphorus requirements.</p>
        </div>
    </div>

    <div class="fertilizer">
        <img src="assets/img/14-35-14.jpeg" width="70" alt="14-35-14" class="fertilizer-image" onclick="toggleInfo('143514-info')">
        <div id="143514-info" class="fertilizer-info">
            <h2>14-35-14</h2>
            <p><strong>Composition:</strong> This fertilizer contains 14% nitrogen, 35% phosphorus (as P2O5), and 14% potassium (as K2O).</p>
            <p><strong>Usage:</strong> It's often used for crops during the flowering and fruiting stages when phosphorus demand is high. Suitable for crops like tomatoes, peppers, and fruit trees.</p>
        </div>
    </div>

    <div class="fertilizer">
        <img src="assets/img/28-28.jpeg" alt="28-28" width="70" class="fertilizer-image" onclick="toggleInfo('2828-info')">
        <div id="2828-info" class="fertilizer-info">
            <h2>28-28</h2>
            <p><strong>Composition:</strong> This fertilizer has an equal ratio of 28% nitrogen and 28% potassium (as K2O).</p>
            <p><strong>Usage:</strong> It's used to provide balanced nutrition to crops requiring both nitrogen and potassium. It's suitable for various crops, including grains, vegetables, and fruits.</p>
        </div>
    </div>

    <div class="fertilizer">
        <img src="assets/img/17-17-17.jpeg" width="70" alt="17-17-17" class="fertilizer-image" onclick="toggleInfo('171717-info')">
        <div id="171717-info" class="fertilizer-info">
            <h2>17-17-17</h2>
            <p><strong>Composition:</strong> This fertilizer contains 17% nitrogen, 17% phosphorus (as P2O5), and 17% potassium (as K2O).</p>
            <p><strong>Usage:</strong> It's a balanced fertilizer suitable for crops needing equal amounts of nitrogen, phosphorus, and potassium. It's often used for general fertilization purposes in agriculture and horticulture.</p>
        </div>
    </div>

    <div class="fertilizer">
        <img src="assets/img/20-20.jpeg" alt="20-20-20" width="70" class="fertilizer-image" onclick="toggleInfo('202020-info')">
        <div id="202020-info" class="fertilizer-info">
            <h2>20-20-20</h2>
            <p><strong>Composition:</strong> This fertilizer contains 20% nitrogen, 20% phosphorus (as P2O5), and 20% potassium (as K2O).</p>
            <p><strong>Usage:</strong> It provides balanced nutrition to various crops throughout their growth stages. It's commonly used in greenhouse production and hydroponic systems.</p>
        </div>
    </div>

    <!-- Add more fertilizer sections as needed -->

</div>
</div>
</div>

</body>











<div class="container">
    <div class="section about-us" id="Seasons">

           
    <div class="row">
                <div class="col-md-12 mx-auto text-center">
                    <h3 class="display-3 ">Seasons</h3>
                </div>
            </div>



<div id="seasons-guide" class="guide-section">

    <div class="season-info" id="kharif-info">
        <h3>Kharif Season:</h3>
        <p><strong>Timing:</strong> The Kharif season typically begins with the onset of the southwest monsoon in June and lasts until September.</p>
        <p><strong>Crops:</strong> This season is suitable for cultivating crops that thrive in the monsoon rains, such as rice, maize, millets, cotton, soybeans, and groundnuts.</p>
        <p><strong>Preparation:</strong> Farmers prepare the fields during the pre-monsoon period by plowing and leveling the land. Adequate soil moisture is essential for Kharif crops.</p>
        <p><strong>Irrigation:</strong> The primary source of irrigation is rainfall. However, supplemental irrigation may be required during dry spells.</p>
        <p><strong>Challenges:</strong> Excessive or deficient rainfall can affect crop yields. Pests and diseases, such as stem borers and blast, are common during this season.</p>
    </div>

    <div class="season-info" id="rabi-info">
        <h3>Rabi Season:</h3>
        <p><strong>Timing:</strong> The Rabi season follows the Kharif season, starting in October and extending until March.</p>
        <p><strong>Crops:</strong> Rabi crops are sown in winter and harvested in spring. Wheat, barley, oats, mustard, chickpeas, and lentils are commonly cultivated during this season.</p>
        <p><strong>Preparation:</strong> Farmers prepare the soil during the post-monsoon period by plowing and adding fertilizers. Soil moisture management is crucial for Rabi crops.</p>
        <p><strong>Irrigation:</strong> Irrigation becomes more critical during the Rabi season as rainfall decreases. Proper water management is essential for crop growth.</p>
        <p><strong>Challenges:</strong> Cold waves and frost during winter can damage crops. Pests like aphids and diseases such as powdery mildew pose threats to Rabi crops.</p>
    </div>

    <div class="season-info" id="zaid-info">
        <h3>Zaid Season:</h3>
        <p><strong>Timing:</strong> The Zaid season falls between the Kharif and Rabi seasons, usually from March to June.</p>
        <p><strong>Crops:</strong> Zaid crops are short-duration crops grown during the summer months. Vegetables like cucumbers, bitter gourd, pumpkin, and fodder crops are cultivated during this season.</p>
        <p><strong>Preparation:</strong> Fields are prepared for Zaid crops during the early spring months. Adequate drainage is essential to prevent waterlogging.</p>
        <p><strong>Irrigation:</strong> Irrigation management is critical due to high evapotranspiration rates during the summer season. Drip irrigation and sprinkler systems are often used.</p>
        <p><strong>Challenges:</strong> Heat stress and water scarcity are significant challenges during the Zaid season. Pests like mites and diseases such as viral infections are common.</p>
    </div>
</div>
</div>
</div>









    <!-- ABOUT US -->
    <div class="container">
    <div class="section about-us" id="about-us">

           
    <div class="row">
                <div class="col-md-12 mx-auto text-center">
                    <h3 class="display-3 ">About Us</h3>
                </div>
            </div>
			
	
        <div class="row align-items-center">


        <div class="profile">
            <img src="assets/img/AP_PP.JPG" alt="Profile 1">
            <div class="details">
                <h2>John Doe</h2>
                <p>Co-founder & CEO</p>
                <p>John is a visionary leader with a passion for sustainable agriculture.</p>
                <a href="#" class="icon"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="icon"><i class="fab fa-facebook"></i></a>
            </div>
        </div>

        <div class="profile">
            <img src="profile2.jpg" alt="Profile 2">
            <div class="details">
                <h2>Jane Smith</h2>
                <p>Co-founder & COO</p>
                <p>Jane is an experienced operations manager with a background in environmental science.</p>
                <a href="#" class="icon"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="icon"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <div class="profile">
            <img src="assets/img/AP_PP.J" alt="Profile 3">
            <div class="details">
                <h2>Michael Johnson</h2>
                <p>Lead Developer</p>
                <p>Michael is a skilled developer with a passion for creating user-friendly applications.</p>
                <a href="#" class="icon"><i class="fab fa-github"></i></a>
                <a href="#" class="icon"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="icon"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

        <div class="profile">
            <img src="profile4.jpg" alt="Profile 4">
            <div class="details">
                <h2>Susan Davis</h2>
                <p>Marketing Manager</p>
                <p>Susan specializes in creating impactful marketing campaigns that resonate with audiences.</p>
                <a href="#" class="icon"><i class="fab fa-linkedin"></i></a>
                <a href="#" class="icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="icon"><i class="fab fa-facebook"></i></a>
            </div>
        </div>

        
    </div>
</body>

     
<!-- ======================================================================================================================================== -->
<!--
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
 </div> -->
			
			
          </div>
        </div>
        <span > </span>
      </div>
     
	<!-- ======================================================================================================================================== -->
 
	 

 <!--<div class="section features-6 text-dark bg-white" id="tech">
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
    </div> -->

    
 </div>

 <script>
  
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();

                const target = document.querySelector(this.getAttribute('href'));
                target.scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

      
    </script>

<script>
    function toggleInfo(infoId) {
        var info = document.getElementById(infoId);
        if (info.style.display === "none") {
            info.style.display = "block";
        } else {
            info.style.display = "none";
        }
    }
</script>
<script>
$("#nav li a").each(function() {   
    if (this.href == window.location.href) {
        $(this).addClass("activaa");
    }
});
  </script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>


</html>