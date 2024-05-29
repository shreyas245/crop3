<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<style>
  body{
    background:url('https://previews.123rf.com/images/echiechi/echiechi1805/echiechi180500002/102495369-smart-farming-and-internet-of-thing-concept-vector-illustration.jpg');
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    
  }
  .container{
    opacity:0.92;
  }
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 600px;
        margin: 20px auto;
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0,0,0,0.1);
    }
    h2 {
        text-align: center;
        margin-bottom: 30px;
        color: #007bff;
    }
    .form-group {
        margin-bottom: 30px;
    }
    label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
    }
    input[type="text"],
    input[type="tel"],
    input[type="email"],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
        font-size: 16px;
    }
    input[type="checkbox"] {
        margin-right: 5px;
        vertical-align: middle;
    }
    .btn {
        background-color: #007bff;
        color: #fff;
        padding: 12px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
    }
    .btn:hover {
        background-color: #0056b3;
    }
</style>

</head>
<body>
    <div>
        <!-- <nav
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
    > -->
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
           <a class="dropdown-item" href="crop_prediction.php">Crop Prediction</a>
           <a class="dropdown-item" href="yield_prediction.php">Yield Prediction</a>
            <a class="dropdown-item" href="rainfall_prediction.php">Rainfall Prediction</a>
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
            <a class="dropdown-item" href="crop_recommendation.php">Crop Recommendation</a>
            <a class="dropdown-item" href="fertilizer_recommendation.php">Fertilizer Recommendation</a>
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
    </div>



    <div class="container">
    <h2>Registration Form</h2>
    <form action="#" method="post">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" >
        </div>
        <div class="form-group">
            <label for="mobile">Mobile Number</label>
            <input type="tel" id="mobile" name="mobile" >
        </div>
        <div class="form-group">
            <label for="email">Email (Optional)</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="state">State</label>
            <select id="state" name="state" >
                <option value="">Select State</option>
                <!-- Add state options here -->
            </select>
        </div>
        <div class="form-group">
            <label for="district">District/Region</label>
            <select id="district" name="district" >
                <option value="">Select District/Region</option>
                <!-- Add district options here -->
            </select>
        </div>
        <div class="form-group">
            <label for="village">Village/Pin Code</label>
            <input type="text" id="village" name="village" >
        </div>
        <div class="form-group">
            <label for="area">Total area under cultivation</label>
            <input type="text" id="area" name="area" >
        </div>
        <div class="form-group">
            <label>Types of ownership</label>
            <input type="checkbox" id="own_land" name="ownership" value="Own land">
            <label for="own_land">Own land</label>
            <input type="checkbox" id="leased_land" name="ownership" value="Leased land">
            <label for="leased_land">Leased land</label>
            <input type="checkbox" id="sharecropping" name="ownership" value="Sharecropping">
            <label for="sharecropping">Sharecropping</label>
        </div>
        <div class="form-group">
            <label for="crops">Primary crops grown</label>
            <input type="text" id="crops" name="crops" >
        </div>
        <div class="form-group">
            <label for="irrigation">Irrigation methods</label>
            <select id="irrigation" name="irrigation" >
                <option value="">Select Irrigation Method</option>
                <!-- Add irrigation options here -->
            </select>
        </div>
        <div class="form-group">
            <label for="fertilizer">Fertilizer use (Types and usual quantities)</label>
            <textarea id="fertilizer" name="fertilizer" rows="4" ></textarea>
        </div>
        <div class="form-group">
            <label for="pesticide">Pesticide use (Types and usual quantities)</label>
            <textarea id="pesticide" name="pesticide" rows="4" ></textarea>
        </div>
        <div class="form-group">
            <label for="experience">Farming Experience (Number of years)</label>
            <input type="text" id="experience" name="experience" >
        </div>
        <div class="form-group">
            <label for="soil">Soil Type</label>
            <select id="soil" name="soil" >
                <option value="">Select Soil Type</option>
                <!-- Add soil options here -->
            </select>
        </div>
        <div class="form-group">
            <label for="income">Income range</label>
            <select id="income" name="income" >
                <option value="">Select Income Range</option>
                <!-- Add income range options here -->
            </select>
        </div>
        <div class="form-group">
            <label for="markets">Access to Markets</label>
            <select id="markets" name="markets" >
                <option value="">Select Access to Markets</option>
                <!-- Add market access options here -->
            </select>
        </div>
        <div class="form-group">
            <label>Technology Adoption</label><br>
            <input type="checkbox" id="tech1" name="technology" value="Technology 1">
            <label for="tech1">Technology 1</label><br>
            <input type="checkbox" id="tech2" name="technology" value="Technology 2">
            <label for="tech2">Technology 2</label><br>
            <input type="checkbox" id="tech3" name="technology" value="Technology 3">
            <label for="tech3">Technology 3</label>
        </div>
        <div class="form-group" style="text-align: center;">
            <button type="submit" class="btn">Submit</button>
            <button type="reset" class="btn">Reset</button>
        </div>
    </form>
</div>



<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase-database.js"></script>

<script >
  // import { initializeApp } from "https://www.gstatic.com/firebasejs/9.19.1/firebase-app.js";
// import { getDatabase, ref, set, get, child } from "https://www.gstatic.com/firebasejs/9.19.1/firebase-database.js";
// // TODO: Add SDKs for Firebase products that you want to use
// // https://firebase.google.com/docs/web/setup#available-libraries

const firebaseConfig = {
    apiKey: "AIzaSyC000Qa_NiW2BMjlmjJ4ILkVtfcRTYsICg",
    authDomain: "otp-finalyear.firebaseapp.com",
    projectId: "otp-finalyear",
    storageBucket: "otp-finalyear.appspot.com",
    messagingSenderId: "431017777093",
    appId: "1:431017777093:web:b2c2ea807b7dfd890d1dac",
    measurementId: "G-D4GJHEK6MQ"
  };
firebase.initializeApp(firebaseConfig);
  var database  = firebase.database();




const form = document.querySelector('form');

form.addEventListener('submit',(e)=>{
    e.preventDefault();
    const fd = new FormData(form);
    const obj = Object.fromEntries(fd)
    console.log(obj)
    database.ref('users/').set(obj)
})


</script>
</body>
</html>
