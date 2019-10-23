<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="wtf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Item Name </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ URL::asset('css/specification.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/fixed.css') }}">
  <link rel="script" href="{{ URL::asset('js/script.js') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Script Source Files -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  <!-- End of Script Source Files -->
</head>
<body data-spy="scroll" data-target="#navbarResponsive">
  <!-- Start Home Section-->
  <div id="home">
  <?php include "includes/navbar.blade.php" ?>

  <div class="row">
    <div class="col-sm-12">
      <img src="img/bike1.jpg" alt="Specification" style="width:99.3vw;height: 100vh;margin-left:-1vw;">
      <div class="header-overlay">
    		<div class="header-content">
    			<h1>KTM Duke 125</h1>
    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit hic eaque rerum cupiditate officiis recusandae iusto quaerat architecto odio illum.

          </p>

    		</div>
    	</div>
    </div>
  </div>
  <div class="row" style="margin-top:-2%">
    <div class="col-sm-12">
      <img src="img/Insurance.jpg" alt="Specification" style="width:99.3vw;height: 50vh;margin-left:-1vw;">
      <div class="spec-overlay">
    		<div class="spec-content">
    			<h1>KTM Duke 125</h1>
    			<p>KTM 125 Duke price starts at Rs.1.18 lakh (Ex-Showroom, Delhi). The 125 Duke is powered by a 124.7cc, single-cylinder, liquid-cooled engine. It generates 15PS of power and 12Nm of peak torque

          </p>

    		</div>
    	</div>
    </div>
  </div>
  <div class="row" style="margin-top:-2%">
    <div class="col-sm-12">
      <img src="img/Insurance.jpg" alt="Specification" style="width:99.3vw;height: 50vh;margin-left:-1vw;">
      <div class="spec2-overlay">
        <div class="spec2-content">
          <h1>KTM Duke 125</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit hic eaque rerum cupiditate officiis recusandae iusto quaerat architecto odio illum.

          </p>

        </div>
      </div>
    </div>
  </div>
  <div class="footer" style="height:200px">

  </div>
  </div>
</body>
