<!--
    Developed by - Zahid Hossain
    Date - 15/03/2019
 -->
 
 
<!doctype html>
<html>
<head>
  <meta charset="wtf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Bike Arena - Intro line goes here </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/bikearena.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/navbar.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/slide_image.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/fixed.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/app.css')); ?>">
  <link rel="script" href="<?php echo e(URL::to('js/script.js')); ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
  <!-- Script Source Files -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>
 
<body>
  <!--NAV BAR -->
<?php include "includes/navbar.blade.php" ?>
 
 
<!--Video Section-->
<div class="header" style="height:100vh">
  <div class="video-header wrap">
    <div class="fullscreen-video-wrap">
      <section class="section">
        <video class="bg-video" autoplay="autoplay" loop="loop" muted="muted" preload="auto">
          <source src="video/bg-video.mp4" type="video/mp4">
        </video>
      </section>
    </div>
    <!-- Video OverLay-->
    <div class="header-overlay">
        <div class="header-content">
            <h1 style="font-size: 47px;color: #faf00b;;text-shadow: 4px 2px 2px blue;">KTM Duke 125</h1>
            <p style="font-size: 27px;color: #fcf9f9;text-shadow: 4px 2px 2px blue;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit hic eaque rerum cupiditate officiis recusandae iusto quaerat architecto odio illum.
          <br>
        </p>
        <button class="btn btn-primary"><span>Know More </span></button>
        <p style="text-align: center;margin-top: 100px"><a href="#arrival"><i class='fas fa-arrow-alt-circle-down ' style='font-size:48px;color:#ffff'></i></a></p>
 
        </div>
    </div>
    <!--End of OverLay-->
  </div>
</div>
 
 
<!--End of Video Section-->
 
<div class="container">
 
  <section id="arrival">
    <h2 style="text-align: left;margin-bottom: 2em;"><i class="fas fa-fire-alt"></i> New Arrival</h2>
 
    <div class="row">
    <!-- card view -->
 
         
        <div class="col-sm-4">
 
            <div class="card">
 
              <div class="card-img">
                  <img class="card-img-top" src="<?php echo e(asset('img/bike1.jpg')); ?>" alt="image">
 
                  <div class="overlay">
                          <div class="text">
                             
                              <table>
                                  <tr>
                                    <td>Engine</td>
                                    <td>1200css</td>
                                  </tr>
                                  <tr>
                                    <td>Width</td>
                                    <td>500mm</td>
                                  </tr>
                                  <tr>
                                    <td>Giovanni Rovelli</td>
                                    <td>Italy</td>
                                  </tr>
                                  <tr>
                                    <td>Giovanni Rovelli</td>
                                    <td>Italy</td>
                                  </tr>
                                  <tr>
                                    <td>Giovanni Rovelli</td>
                                    <td>Italy</td>
                                  </tr>
                                </table>
 
                          </div>
                  </div>
 
              </div>
 
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">$500</p>
                  <a href="javascript:void(0)" class="btn btn-primary btn1">See Profile</a>    
                </div>
 
            </div>
 
        </div>
 
        <div class="col-sm-4">
 
            <div class="card">
 
              <div class="card-img">
                  <img class="card-img-top" src="<?php echo e(asset('img/bike1.jpg')); ?>" alt="image">
 
                  <div class="overlay">
                          <div class="text">
                             
                              <table>
                                  <tr>
                                    <th>Company</th>
                                    <th>Contact</th>
                                  </tr>
                                  <tr>
                                    <td>Yoshi Tannamuri</td>
                                    <td>Canada</td>
                                  </tr>
                                  <tr>
                                    <td>Giovanni Rovelli</td>
                                    <td>Italy</td>
                                  </tr>
                                  <tr>
                                    <td>Giovanni Rovelli</td>
                                    <td>Italy</td>
                                  </tr>
                                  <tr>
                                    <td>Giovanni Rovelli</td>
                                    <td>Italy</td>
                                  </tr>
                                </table>
 
                          </div>
                  </div>
 
              </div>
 
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">$500</p>
                  <a href="javascript:void(0)" class="btn btn-primary btn1">See Profile</a>    
                </div>
 
            </div>
 
        </div>
 
 
        <div class="col-sm-4">
 
            <div class="card">
 
              <div class="card-img">
                  <img class="card-img-top" src="<?php echo e(asset('img/bike1.jpg')); ?>" alt="image">
 
                  <div class="overlay">
                          <div class="text">
                             
                              <table>
                                  <tr>
                                    <th>Company</th>
                                    <th>Contact</th>
                                  </tr>
                                  <tr>
                                    <td>Yoshi Tannamuri</td>
                                    <td>Canada</td>
                                  </tr>
                                  <tr>
                                    <td>Giovanni Rovelli</td>
                                    <td>Italy</td>
                                  </tr>
                                  <tr>
                                    <td>Giovanni Rovelli</td>
                                    <td>Italy</td>
                                  </tr>
                                  <tr>
                                    <td>Giovanni Rovelli</td>
                                    <td>Italy</td>
                                  </tr>
                                </table>
 
                          </div>
                  </div>
 
              </div>
 
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">$500</p>
                  <a href="javascript:void(0)" class="btn btn-primary btn1">See Profile</a>    
                </div>
 
            </div>
 
        </div>
 
    </div>
 
  </section>
 
 
 
<!-- most popular -->
 
  <section id="arrival">
    <h2 style="text-align: left;margin-bottom: 2em;"><i class="fas fa-motorcycle"></i> Most Popular</h2>
 
    <div class="row">
    <!-- card view -->
 
         
        <div class="col-sm-4">
 
            <div class="card">
 
              <div class="card-img">
                  <img class="card-img-top" src="<?php echo e(asset('img/bike1.jpg')); ?>" alt="image">
 
                  <div class="overlay">
                          <div class="text">
                             
                              <table>
                                  <tr>
                                    <th>Company</th>
                                    <th>Contact</th>
                                  </tr>
                                  <tr>
                                    <td>Yoshi Tannamuri</td>
                                    <td>Canada</td>
                                  </tr>
                                  <tr>
                                    <td>Giovanni Rovelli</td>
                                    <td>Italy</td>
                                  </tr>
                                  <tr>
                                    <td>Giovanni Rovelli</td>
                                    <td>Italy</td>
                                  </tr>
                                  <tr>
                                    <td>Giovanni Rovelli</td>
                                    <td>Italy</td>
                                  </tr>
                                </table>
 
                          </div>
                  </div>
 
              </div>
 
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">$500</p>
                  <a href="javascript:void(0)" class="btn btn-primary btn1">See Profile</a>    
                </div>
 
            </div>
 
        </div>
 
 
    </div>
 
  </section>
 
 
  <!-- new arraival -->
 
    <section id="arrival">
    <h2 style="text-align: center;margin-bottom: 2em;"><i class="fas fa-motorcycle"></i> Most Popular</h2>
 
    <div class="row">
    <!-- card view -->
 
         
        <div class="col-sm-4">
 
            <div class="card">
 
              <div class="card-img">
                  <img class="card-img-top" src="<?php echo e(asset('img/bike1.jpg')); ?>" alt="image">
 
                  <div class="overlay">
                          <div class="text">
                             
                              <table>
                                  <tr>
                                    <th>Company</th>
                                    <th>Contact</th>
                                  </tr>
                                  <tr>
                                    <td>Yoshi Tannamuri</td>
                                    <td>Canada</td>
                                  </tr>
                                  <tr>
                                    <td>Giovanni Rovelli</td>
                                    <td>Italy</td>
                                  </tr>
                                  <tr>
                                    <td>Giovanni Rovelli</td>
                                    <td>Italy</td>
                                  </tr>
                                  <tr>
                                    <td>Giovanni Rovelli</td>
                                    <td>Italy</td>
                                  </tr>
                                </table>
 
                          </div>
                  </div>
 
              </div>
 
                <div class="card-body">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">$500</p>
                  <a href="javascript:void(0)" class="btn btn-primary btn1">See Profile</a>    
                </div>
 
            </div>
 
        </div>
 
 
    </div>
 
  </section>
 
</div>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script type="text/javascript">
 
</script>
</body>
</html>