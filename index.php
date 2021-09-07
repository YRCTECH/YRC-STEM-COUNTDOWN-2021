<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="gradient-background ">
  <nav class="navbar sticky-top navbar-expand-lg navbar-light ">
    <div class="container-fluid" style="max-width:1600px">
      <h1 class="navbar-brand d-none d-xl-block d-xxl-none" style="color:white;font-size:30px" href="#">
        <img src="./assets/images/logo.svg" width="60" alt="">
        STEM E-FORUM 2021
      </h1>
      <h1 class="navbar-brand d-xl-none d-xxl-block" style="color:white;font-size:20px" href="#">
        <img src="./assets/images/logo.svg" width="40" alt="">
        STEM E-FORUM 2021
      </h1>
    </div>
  </nav>

  <div class="d-flex align-items-center justify-content-center " style="min-height:80vh">
    <div>
      <h1 class="d-none d-xl-block d-xxl-none" align="center" style="font-size:60px">The 1st National Basic STEM Innovation</h1>
      <h1 class="d-xl-none d-xxl-block " align="center" style="font-size:60px;margin-top:40px">The 1st National Basic STEM Innovation</h1>
 
      <div class="container-fluid " style="max-width:1000px;">
      <div class="row">
          <div class="col-xl-3 col-md-3 ">
            <h1 class="italic" align="center" style="font-size:160px;margin-top:-30px" id="days"></h1>
            <h2 class="d-none d-xl-block d-xxl-none" align="center" style="font-size:60px;margin-top:-30px">Days</h2>
            <h2 class="d-xl-none d-xxl-block" align="center" style="font-size:40px;margin-top:-30px">Days</h2>
          </div>
          <div class="col-xl-3 col-md-3">
            <h1 class="italic" align="center" style="font-size:160px;margin-top:-30px" id="hours"></h1>
            <h2 class="d-none d-xl-block d-xxl-none" align="center" style="font-size:60px;margin-top:-30px">Hours</h2>
            <h2 class="d-xl-none d-xxl-block" align="center" style="font-size:40px;margin-top:-30px">Hours</h2>
          </div>
          <div class="col-xl-3 col-md-3">
            <h1 class="italic" align="center" style="font-size:160px;margin-top:-30px" id="minutes"></h1>
            <h2 class="d-none d-xl-block d-xxl-none" align="center" style="font-size:60px;margin-top:-30px">Minutes</h2>
            <h2 class="d-xl-none d-xxl-block" align="center" style="font-size:40px;margin-top:-30px">Minutes</h2>
          </div>
          <div class="col-xl-3 col-md-3">
            <h1 class="italic" align="center" style="font-size:160px;margin-top:-30px" id="seconds"></h1>
            <h2 class="d-none d-xl-block d-xxl-none" align="center" style="font-size:60px;margin-top:-30px">Seconds</h2>
            <h2 class="d-xl-none d-xxl-block" align="center" style="font-size:40px;margin-top:-30px">Seconds</h2>
          </div>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
          <button class="btn btn-light btn-lg mt-5" type="button" style="border-radius:1000px">Coming soon...</button>
        </div>
      </div>
    </div>
  </div>


  <nav class="fixed-bottom navbar-expand-lg navbar-light pb-3 d-none d-sm-block ">
    <h4 style="color:white" align="center">Coming soon @ stem2021.yupparaj.ac.th</h4>
  </nav>

  <h4 class="d-xl-none d-sm-block d-md-none pt-5 pb-3" style="color:white" align="center">Coming soon @ stem2021.yupparaj.ac.th</h4>


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
      document.getElementById("hours").innerHTML = hours;
      document.getElementById("minutes").innerHTML = minutes;
      document.getElementById("seconds").innerHTML = seconds;

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
  </script>
</body>

</html>