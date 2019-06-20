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
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/swiper.min.css')); ?>">
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
<?php echo $__env->make('includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>



<section id="arrival">
    <h2 style="text-align: left;margin-bottom: 2em;"><i class="fas fa-motorcycle"></i> Bajaj</h2>
 
    <div class="row">
    <!-- card view -->
 
         <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-sm-2">
 
            <div class="card">
 
              <div class="card-img">
                  <img class="card-img-top" src="<?php echo e(asset('img/bike1.jpg')); ?>" alt="image">
 
                  <div class="overlay">
                          <div class="text">
                             
                              <table>
                                  <tr>
                             
                                    <td>Info</td>
                                  </tr>
                                
                                  <tr>
                                   
                                   <td><?php echo e($data->brand); ?></td>
                                  </tr>
                                  <tr>
                                   
                                    <td><?php echo e($data->edisplacement); ?></td>
                                  </tr>
                                  
                                </table>
 
                          </div>
                  </div>
 
              </div>
 
                <div class="card-body">
                  <h4 class="card-title"><?php echo e($data->name); ?></h4>
                  <p class="card-text"><?php echo e($data->price); ?></p>
                  <a href="/bikearena/specification/<?php echo e($data->name); ?>" class="btn btn-primary btn1">See Profile</a>    
                </div>
 
            </div>
 
        </div>
 
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
 
  </section>





</body>
</html>