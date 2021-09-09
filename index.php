<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="gradient-background" style="background: rgb(240,135,227);
  background: linear-gradient(90deg, rgba(240,135,227,1) 0%, rgba(246,98,134,1) 100%);">
  <nav class="navbar sticky-top navbar-expand-lg navbar-light mt-3">
    <div class="container-fluid" style="max-width:1600px">
      <h1 class="navbar-brand d-none d-xl-block d-xxl-none" style="color:white;font-size:30px" href="#">
        <img src="./assets/images/logo.svg" width="60" alt="">
        STEM E-FORUM 2021
      </h1>
      <h1 class="navbar-brand d-xl-none d-xxl-block" style="color:white;font-size:20px" href="#">
        <img src="./assets/images/logo.svg" width="40" alt="">
        STEM E-FORUM 2021
      </h1>
      <ul class="navbar-nav flex-row flex-wrap ">
        <li class="nav-item col-4 col-md-auto p-2 align-self-center">
          <a class="nav-link" href="https://www.facebook.com/YRCSTEM" target="_blank" rel="noopener">
            <i class="fab fa-facebook d-none d-sm-block" style="font-size:30px;color:white"></i>
            <i class="fab fa-facebook d-block d-sm-none " style="font-size:20px;color:white"></i>
          </a>
        </li>
        <li class="nav-item col-4 col-md-auto p-2 align-self-center">
          <a class="nav-link" href="mailto:yrcstem@gmail.com" target="_blank" rel="noopener">
            <i class="fab fa-youtube d-none d-sm-block" style="font-size:30px;color:white"></i></a>
            <i class="fab fa-youtube d-block d-sm-none pb-3" style="font-size:20px;color:white"></i></a>
        </li>
        <li class="nav-item col-4 col-md-auto p-2 align-self-center">
          <a class="nav-link" href="mailto:yrcstem@gmail.com" target="_blank" rel="noopener">
            <i class="fas fa-envelope d-none d-sm-block" style="font-size:30px;color:white"></i> </a>
            <i class="fas fa-envelope d-block d-sm-none pb-3" style="font-size:20px;color:white"></i> </a>
        </li>

      </ul>
      
    </div>
    
  </nav>

  <div class="d-flex align-items-center justify-content-center " style="min-height:70vh">
    <div>
      <h1 class="d-none d-xs-block d-md-block" align="center" style="font-size:50px">The 1st National Basic STEM Innovation</h1>
      <h1 class="d-none d-sm-block d-md-none" align="center" style="font-size:30px">The 1st National Basic STEM Innovation</h1>
      <h1 class="d-block d-sm-none" align="center" style="font-size:25px;margin-top:40px">The 1st National Basic STEM Innovation</h1>
 
      <div class="container-fluid " style="max-width:1000px;">
      <div class="row">
          <div class="col-3  ">
            <h1 class="italic d-none d-xs-block d-md-block " align="center" style="font-size:160px;margin-top:-30px" id="days"></h1>
            <h1 class="italic d-none d-sm-block d-md-none " align="center" style="font-size:100px;margin-top:-30px" id="daysl"></h1>
            <h1 class="italic d-block d-sm-none" align="center" style="font-size:80px;margin-top:-20px" id="daysm"></h1>
            <h2 class="d-none d-xs-block d-md-block" align="center" style="font-size:50px;margin-top:-30px">Days</h2>
            <h2 class="d-none d-sm-block d-md-none" align="center" style="font-size:30px;margin-top:-30px">Days</h2>
            <h2 class="d-block d-sm-none" align="center" style="font-size:20px;margin-top:-20px">Days</h2>
          </div>
          <div class="col-3  ">
            <h1 class="italic d-none d-xs-block d-md-block " align="center" style="font-size:160px;margin-top:-30px" id="hours"></h1>
            <h1 class="italic d-none d-sm-block d-md-none " align="center" style="font-size:100px;margin-top:-30px" id="hoursl"></h1>
            <h1 class="italic d-block d-sm-none" align="center" style="font-size:80px;margin-top:-20px" id="hoursm"></h1>
            <h2 class="d-none d-xs-block d-md-block" align="center" style="font-size:50px;margin-top:-30px">Hours</h2>
            <h2 class="d-none d-sm-block d-md-none" align="center" style="font-size:30px;margin-top:-30px">Hours</h2>
            <h2 class="d-block d-sm-none" align="center" style="font-size:20px;margin-top:-20px">Hours</h2>
          </div>
          <div class="col-3  ">
            <h1 class="italic d-none d-xs-block d-md-block " align="center" style="font-size:160px;margin-top:-30px" id="minutes"></h1>
            <h1 class="italic d-none d-sm-block d-md-none " align="center" style="font-size:100px;margin-top:-30px" id="minutesl"></h1>
            <h1 class="italic d-block d-sm-none" align="center" style="font-size:80px;margin-top:-20px" id="minutesm"></h1>
            <h2 class="d-none d-xs-block d-md-block" align="center" style="font-size:50px;margin-top:-30px">Minutes</h2>
            <h2 class="d-none d-sm-block d-md-none" align="center" style="font-size:30px;margin-top:-30px">Minutes</h2>
            <h2 class="d-block d-sm-none" align="center" style="font-size:20px;margin-top:-20px">Minutes</h2>
          </div>
          <div class="col-3  ">
            <h1 class="italic d-none d-xs-block d-md-block " align="center" style="font-size:160px;margin-top:-30px" id="seconds"></h1>
            <h1 class="italic d-none d-sm-block d-md-none " align="center" style="font-size:100px;margin-top:-30px" id="secondsl"></h1>
            <h1 class="italic d-block d-sm-none" align="center" style="font-size:80px;margin-top:-20px" id="secondsm"></h1>
            <h2 class="d-none d-xs-block d-md-block" align="center" style="font-size:50px;margin-top:-30px">Seconds</h2>
            <h2 class="d-none d-sm-block d-md-none" align="center" style="font-size:30px;margin-top:-30px">Seconds</h2>
            <h2 class="d-block d-sm-none" align="center" style="font-size:20px;margin-top:-20px">Seconds</h2>
          </div>
        </div>
        <div class="container-fluid" style="max-width:1000px">
          <p align="center">
            <button class="btn btn-outline-light btn-lg mt-5 d-none d-sm-block" type="button" style="border-radius:1000px">Coming soon @ stem2021.yupparaj.ac.th</button>
            <button class="btn btn-outline-light btn-sm mt-5 d-block d-sm-none" type="button" style="border-radius:1000px">Coming soon @ stem2021.yupparaj.ac.th</button>
          </p>
        </div>
      </div>
    </div>
  </div>


  <nav class="fixed-bottom navbar-expand-lg navbar-light pb-3 d-none d-sm-block ">
    <h4 style="color:white" align="center"><span style="font-family:sans-serif">©</span> 2021 Yupparaj Wittayalai School</h4>
  </nav>

  <h4 class="d-block d-sm-none pt-5 pb-3" style="color:white" align="center"><span style="font-family:sans-serif;">©</span> 2021 Yupparaj Wittayalai School</h4>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script>
    // Set the date we're counting down to
    var countDownDate = new Date("Sep 18, 2021 08:0:0").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();

      // Find the distance between now and the count down date
      var distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
      document.getElementById("days").innerHTML = days;
      document.getElementById("daysl").innerHTML = days;
      document.getElementById("daysm").innerHTML = days;
      document.getElementById("hours").innerHTML = hours;
      document.getElementById("hoursl").innerHTML = hours;
      document.getElementById("hoursm").innerHTML = hours;
      document.getElementById("minutes").innerHTML = minutes;
      document.getElementById("minutesl").innerHTML = minutes;
      document.getElementById("minutesm").innerHTML = minutes;
      document.getElementById("seconds").innerHTML = seconds;
      document.getElementById("secondsl").innerHTML = seconds;
      document.getElementById("secondsm").innerHTML = seconds;

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
  </script>
</body>

</html>