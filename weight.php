<?php
$con = new mysqli("localhost","root","","fitness hub");

// Check connection
if ($con->connect_error) {
  die("Failed to connect to MySQL: " .$con->connect_error);
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
    <style>
        /* * {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
} */

/* navbar */
.navbar-brand{
    margin-top: 4px;
    margin-left: 7px;
    font-family: "Copperplate", "Papyrus", fantasy;
}
.nav-img{
    border: 10px;
}

.tag{
  padding-left: 30px;
  padding-right: 30px;
}

hr.rounded {
  margin: auto;
  border-top: 8px solid rgb(0, 0, 0);
  border-radius: 5px;
  width: 100px;
}

/* grids */
#grid1{
    margin-top: 30px;
    display: grid;
    grid-template-columns: 1fr 2fr 1fr 1fr;
    /* grid-template-rows: 200px 200px 200px; */
    grid-auto-rows: minmax(100px, auto);
      grid-template-areas:
      "head head main main"
      "head head main main";
  }
  .item6 {
    padding: 30px;
    grid-area: head;
    background: rgb(215, 219, 226);
    border-radius: 15px;
    font-family: Georgia, serif;
    box-shadow:0 0 5px 10px rgb(215, 219, 226);
    text-align: justify;
    text-justify: inter-word;
  }
  .item7 {
    padding: 20px;
    grid-area: main;
    
  }
#bb{
    width: 90%;
    height: 250px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    border-radius: 20px;
    margin-bottom: 10px;
    box-shadow: 5px 5px 10px;
}

/* blur area */
#contain {
    height: 300x;
    /* display: grid;
    justify-items: center;
    grid-row-gap: 3rem; */
    position: relative;
    text-align: center;
}

.video_container {
    width: 100%;
    align-self: end;
    position: relative;
}

.video {
    width: 100%;
    animation-play-state:running;
}
.boxed{
    text-align: center;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 50px;
    height: 250px;
    width: 90%;
    margin: 0 auto;
    background: transparent;
    /* background-color: thistle; */
    padding: 20px;
    border-radius: 20px;
    -webkit-box-shadow: 0 5px 15px rgb(0 0 0 / 10%);
    box-shadow: 20px 15px 15px rgba(0, 0, 0, 0.205); 
    backdrop-filter: blur(5px);
  }
  .btn {
    background-color: transparent; 
    color: black; /* black text */
    margin-top: 80px;
    /* padding: 120px 16px; Some padding */
    cursor: pointer; /* Mouse pointer on hover */
  }
  #bld{
    font-size: 22px;  /*Set a font size */
    background-color: rgba(182, 139, 139, 0.445);
    border-radius: 10px;
    padding: 10px;
  }

#sectionvideo{
    display: flex;
    justify-content: center;
}
</style>

</head>
<body>
    
 <!-- NAVBAR -->
 <nav class="navbar navbar-expand-lg navbar-dark sticky-top " style="background-color: black;">
    <div class="container-fluid">
      <img class=" nav-img rounded-pill" src="logo.png" alt="logo" style="width:4%;">
      <a class="navbar-brand" href="#"><b>Fitness Hub</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/project/login.php/" target="_self"><b> About</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/project/login.php/#blog" target="_self"><b>Blogs</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/project/login.php/#faq" target="_self"><b>FAQs</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/project/login%20form/index.php" target="_self"><b>Login</b></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/project/login.php/#contact" target="_self"><b>Contact Me</b></a>
          </li>
        </ul>
      </div>
    </div>
    </nav>


    <!-- daescription -->
        
<section class="container">
  <div class="grid-container" id="grid1">
      <div class="item6">
          <h1 class="d-flex justify-content-center"><b>Weight Loss Program</b> </h1>
          <h5 class="mt-4 tag">Weight loss is a decrease in body weight resulting from either voluntary (diet, exercise)
               or involuntary (illness) circumstances.Most instances of weight loss arise due to the loss of body fat.</h5>
          <h5 class="mt-2 tag">Weight Loss program mentored by <b>John Doe</b>. You can have access to exerciss of this program and 
            diet plan provided by our trainer that help in achieving your goal.</h5>
      </div>
      <div class="item7">
          <img id="bb" src="download.jpg">
      </div>
  </div>
</section>
        

      <!-- divider -->
    <div>
      <hr class="rounded mt-5">
    </div>


      <!-- Exercises -->
  <section class="container mt-5" id="sectionvideo">
      <div class="container"id="contain">
          <div class="video_container">
              <video height="300px" width="300px" loop muted autoplay >
                  <source src="loss1.mp4"/>
              </video> 

            
          </div>
          <div class="cardz">
              <div class="boxed border-start border-top border-2 border-secondary">
                      <button class="btn"><b id="bld">Login / Register </b></button>
              </div>
          </div>
      </div>
      <div class="container" id="contain">
          <div class="video_container">
              <video height="300px" width="300px" loop muted autoplay >
                  <source src="loss2.mp4"/>
              </video> 

            
          </div>
          <div class="cardz">
              <div class="boxed border-start border-top border-2 border-secondary">
                      <button class="btn"><b id="bld">Login / Register </b></button>
              </div>
          </div>
      </div>
      <div class="container" id="contain">
          <div class="video_container">
              <video height="300px" width="300px" loop muted autoplay >
                  <source src="loss3.mp4"/>
              </video> 

            
          </div>
          <div class="cardz">
              <div class="boxed border-start border-top border-2 border-secondary">
                      <button class="btn"><b id="bld">Login / Register </b></button>
              </div>
          </div>
      </div>
  </section>

    <!-- <script src= "script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" 
        crossorigin="anonymous">
    </script> -->
</body>
</html>