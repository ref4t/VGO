<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="wtf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Bike Arena - Intro line goes here </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ URL::asset('css/bikearena.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/specification.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/navbar.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/slide_image.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/fixed.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/indexvgo.css') }}">
  <link rel="script" href="{{ URL::to('js/script.js') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.6.3/css/all.css' integrity='sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/' crossorigin='anonymous'>
  <!-- Script Source Files -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</head>

<body>
  <section class="top-nav">
        @include('includes.navbar')
  </section>


<section id="top-banner">
	<div class="top-banner">
		<div class="options">

			<div class="menus">
				<i class="fab fa-adn"></i>
				<p>NAme</p>
			</div>
			<div class="menus">
				<i class="fa fa-american-sign-language-interpreting"></i>
				<p>NAme</p>
			</div>
			<div class="menus">
				<i class="fas fa-ambulance"></i>
				<p>NAme</p>
			</div>
			<div class="menus">
				<i class="fab fa-amazon-pay"></i>
				<p>NAme</p>
			</div>
			<div class="menus">
				<i class="fab fa-apple"></i>
				<p>NAme</p>
			</div>
			<div class="menus">
				<i class="fab fa-app-store"></i>
				<p>NAme</p>
			</div>
			<div class="menus">
				<i class="fas fa-allergies"></i>
				<p>NAme</p>
			</div>
			<div class="menus">
				<i class="fab fa-adn"></i>
				<p>NAme</p>
			</div>

		</div>
	</div>
</section>

      
<!-- most popular -->

<section id="mostPopular">

    <div class="container">

        <section id="arrival">
           <!--  <h2 style="text-align: left;margin-bottom: 2em;"><i class="fas fa-motorcycle"></i> Most Popular</h2> -->

            <div class="row">
             <!-- card view -->


               <div class="swiper-container">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide row" data-swiper-autoplay="20">

                            <div class="col-sm-3">

                                <div class="card">

                                  <div class="card-img">
                                      <img class="card-img-top" src="{{asset('img/bike1.jpg')}}" alt="image">

                                  </div>

                                    <div class="card-body">
                                      <h4 class="card-title">John Doe</h4>
                                      <p class="card-text">$500</p>
                                      <a href="javascript:void(0)" class="btn btn-primary btn1">See Profile</a>    
                                    </div>

                                </div>

                            </div>

                            <div class="col-sm-3">

                                <div class="card">

                                  <div class="card-img">
                                      <img class="card-img-top" src="{{asset('img/bike1.jpg')}}" alt="image">

                                  </div>

                                    <div class="card-body">
                                      <h4 class="card-title">John Doe</h4>
                                      <p class="card-text">$500</p>
                                      <a href="javascript:void(0)" class="btn btn-primary btn1">See Profile</a>    
                                    </div>

                                </div>

                            </div>

 							<div class="col-sm-3">

                                <div class="card">

                                  <div class="card-img">
                                      <img class="card-img-top" src="{{asset('img/bike1.jpg')}}" alt="image">

                                  </div>

                                    <div class="card-body">
                                      <h4 class="card-title">John Doe</h4>
                                      <p class="card-text">$500</p>
                                      <a href="javascript:void(0)" class="btn btn-primary btn1">See Profile</a>    
                                    </div>

                                </div>

                            </div>

                            <div class="col-sm-3">

                                <div class="card">

                                  <div class="card-img">
                                      <img class="card-img-top" src="{{asset('img/bike1.jpg')}}" alt="image">

                                  </div>

                                    <div class="card-body">
                                      <h4 class="card-title">John Doe</h4>
                                      <p class="card-text">$500</p>
                                      <a href="javascript:void(0)" class="btn btn-primary btn1">See Profile</a>    
                                    </div>

                                </div>

                            </div>


                                    
                        </div>

                        <div class="swiper-slide row" data-swiper-autoplay="20">

                            <div class="col-sm-3">

                                <div class="card">

                                  <div class="card-img">
                                      <img class="card-img-top" src="{{asset('img/bike1.jpg')}}" alt="image">

                                  </div>

                                    <div class="card-body">
                                      <h4 class="card-title">John Doe</h4>
                                      <p class="card-text">$500</p>
                                      <a href="javascript:void(0)" class="btn btn-primary btn1">See Profile</a>    
                                    </div>

                                </div>

                            </div>

                            <div class="col-sm-3">

                                <div class="card">

                                  <div class="card-img">
                                      <img class="card-img-top" src="{{asset('img/bike1.jpg')}}" alt="image">

                                  </div>

                                    <div class="card-body">
                                      <h4 class="card-title">John Doe</h4>
                                      <p class="card-text">$500</p>
                                      <a href="javascript:void(0)" class="btn btn-primary btn1">See Profile</a>    
                                    </div>

                                </div>

                            </div>

                            <div class="col-sm-3">

                                <div class="card">

                                  <div class="card-img">
                                      <img class="card-img-top" src="{{asset('img/bike1.jpg')}}" alt="image">

                                  </div>

                                    <div class="card-body">
                                      <h4 class="card-title">John Doe</h4>
                                      <p class="card-text">$500</p>
                                      <a href="javascript:void(0)" class="btn btn-primary btn1">See Profile</a>    
                                    </div>

                                </div>

                            </div>

                            <div class="col-sm-3">

                                <div class="card">

                                  <div class="card-img">
                                      <img class="card-img-top" src="{{asset('img/bike1.jpg')}}" alt="image">

                                  </div>

                                    <div class="card-body">
                                      <h4 class="card-title">John Doe</h4>
                                      <p class="card-text">$500</p>
                                      <a href="javascript:void(0)" class="btn btn-primary btn1">See Profile</a>    
                                    </div>

                                </div>

                            </div>
                                    
                        </div>

                    </div>
                            <!-- swipper wrapper end-->
               </div>

            </div>

        </section>

       
    </div>
</section>

<!-- firstLater -->
<section id="firstLayer">

  <div class="container">
    <div class="row">



                <div class="col-sm-3">


                          <div class="info">

                                <div class="info-img">
                                    <img class="info-img-top" src="{{asset('img/road.jpg')}}" alt="image">
                                </div>

                                <div class="info-body">
                                  <a href="#" class="btn btn1 btn2">See Profile</a>    
                                </div>

                          </div>

                  
                </div>
                <div class="col-sm-3">


                          <div class="info">

                                <div class="info-img">
                                    <img class="info-img-top" src="{{asset('img/bike1.jpg')}}" alt="image">
                                </div>

                                <div class="info-body">
                                  <a href="#" class="btn btn1 btn2">See Profile</a>    
                                </div>

                          </div>

                  
                </div>


          <div class="col-sm-6">



                      <div class="info">

                        <div class="info-img">
                            <img class="info-img-top" src="{{asset('img/bike1.jpg')}}" alt="image">
                        </div>

                          <div class="info-body">
                            <a href="javascript:void(0)" class="btn  btn1">See Profile</a>    
                          </div>

                      </div>

              
          </div>

    </div>
    
  </div>

</section>

<!-- secondLater -->

<section id="secondLayer">

  <div class="container">
    <div class="row">

          <div class="col-sm-6">



                       <div class="info">

                                <div class="info-img">
                                    <img class="info-img-top" src="{{asset('img/bike1.jpg')}}" alt="image">
                                </div>

                                <div class="info-body">
                                  <a href="javascript:void(0)" class="btn btn-primary btn1">See Profile</a>    
                                </div>

                          </div>

              
          </div>

          <div class="col-sm-6 secondCard">





                          <div class="info" style="margin-bottom: 40px">

                            <div class="info-img" style="height: 180px">
                                <img class="info-img-top" style="height: 180px" src="{{asset('img/bike1.jpg')}}" alt="image">
                            </div>

                              <div class="info-body">
                                <a href="javascript:void(0)" class="btn btn-primary btn1">See Profile</a>    
                              </div>

                          </div>

                  




                          <div class="info">

                            <div class="info-img" style="height: 180px">
                                <img class="info-img-top" style="height: 180px" src="{{asset('img/insurance.jpg')}}" alt="image">
                            </div>

                              <div class="info-body">
                                <a href="javascript:void(0)" class="btn btn-primary btn1">See Profile</a>    
                              </div>



                  
                </div>



          </div>

          

    </div>
    
  </div>

</section>

<section id="thirdLayer">
	<div class="container">
		<div class="row">

			 <div class="col-sm-8">
                          <div class="info">

                                <div class="info-img">
                                    <img class="info-img-top" src="{{asset('img/road.jpg')}}" alt="image">
                                </div>

                                <div class="info-body">
                                  <a href="javascript:void(0)" class="btn btn-primary btn1">See Profile</a>    
                                </div>

                          </div>
                </div>

                 <div class="col-sm-4">


                          <div class="info">

                                <div class="info-img">
                                    <img class="info-img-top" src="{{asset('img/bike1.jpg')}}" alt="image">
                                </div>

                                <div class="info-body">
                                  <a href="javascript:void(0)" class="btn btn-primary btn1">See Profile</a>    
                                </div>

                          </div>

                  
                </div>

		</div>
	</div>
</section>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

<script type="text/javascript"></script>

    <script src="{{ URL::asset('js/swiper.min.js') }}"></script>
    <script src="{{ URL::asset('js/swiper.jquery.min.js') }}"></script>

<script>
        /*-----for swiper----*/
        var swiper = new Swiper('.swiper-container', {
            pagination: '.swiper-pagination'
            , paginationClickable: true
            , spaceBetween: 30
            , slidesPerView: 1
            , effect: ''
            , autoplay: true
            , speed: 7000
            , height: 20
        });
</script>



 </body>
</html>
