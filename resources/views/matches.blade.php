@extends('layouts.app')

@section('content')


    <div class="hero overlay" style="background-image: url('images/bg_3.jpg');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 mx-auto text-center">
            <h1 class="text-white">Matches</h1>
            <p>{{-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, 
                molestias repudiandae pariatur.--}}</p>
          </div>
        </div>
      </div>
    </div>

    
    
    <div class="container">
      

      <div class="row">
        <div class="col-lg-12">
          
          <div class="d-flex team-vs">
            <span class="score">2-1</span>
            <div class="team-1 w-50">
              <div class="team-details w-100 text-center">
                <img src="images/logo_tr1.png" alt="Image" class="img-fluid">
                <h3>FETazmalt <span>(gagner)</span></h3>
                <ul class="list-unstyled">
                  <li>Zidane polo (7)</li>
                  <li>Zidane polo(10)</li>
                </ul>
              </div>
            </div>
            <div class="team-2 w-50">
              <div class="team-details w-100 text-center">
                <img src="images/logo_MOB.png" alt="Image" class="img-fluid">
                <h3>MOBéjaia <span>(perte)</span></h3>
                <ul class="list-unstyled">
                  <li>Heddadi Yaya (3)</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

    
    <div class="site-section bg-dark">
      <div class="container">
        
        <div class="row mb-5">
          <div class="col-lg-12">
            <div class="widget-next-match">
              <div class="widget-title">
                <h3>Prochain match</h3>
              </div>
              <div class="widget-body mb-3">
                <div class="widget-vs">
                  <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                    <div class="team-1 text-center">
                      <img src="images/logo_tr1.png" alt="Image" height="100px">
                      <h3>FETazmalt</h3>
                    </div>
                    <div>
                      <span class="vs"><span>VS</span></span>
                    </div>
                    <div class="team-2 text-center">
                      <img src="images/logo_MOB.png" alt="Image" height="100px">
                      <h3>MOBéjaia</h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="text-center widget-vs-contents mb-4">
                <h4>Championnat Régionale</h4>
                <p class="mb-5">
                  <span class="d-block">18 Octobre 2020</span>
                  <span class="d-block">9:30 AM GMT+0</span>
                  <strong class="text-primary">Tazmalt Stadium</strong>
                </p>

                <div id="date-countdown2" class="pb-1"></div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-12 title-section">
            <h2 class="heading">Match à venir</h2>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="images/logo_MOB.png" alt="Image">
                        <h3>MOBéjaia</h3>
                      </div>
                      <div>
                        <span class="vs"><span>VS</span></span>
                      </div>
                      <div class="team-2 text-center">
                        <img src="images/logo_tr1.png" alt="Image">
                        <h3>FETazmalt</h3>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-center widget-vs-contents mb-4">
                  <h4>Championnat Régionale</h4>
                  <p class="mb-5">
                    <span class="d-block">18 Octobre 2020</span>
                    <span class="d-block">9:30 AM GMT+0</span>
                    <strong class="text-primary">Tazmalt Stadium</strong>
                  </p>
                </div>
              
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="images/logo_tr1.png" alt="Image">
                        <h3>FETazmalt</h3>
                      </div>
                      <div>
                        <span class="vs"><span>VS</span></span>
                      </div>
                      <div class="team-2 text-center">
                        <img src="images/logo_MOB.png" alt="Image">
                        <h3>MOBéjaia</h3>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-center widget-vs-contents mb-4">
                  <h4>Championnat Régionale</h4>
                  <p class="mb-5">
                    <span class="d-block">18 Octobre 2020</span>
                    <span class="d-block">9:30 AM GMT+0</span>
                    <strong class="text-primary">Tazmalt Stadium</strong>
                  </p>

                </div>
              
            </div>
          </div>

          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="images/logo_MOB.png" alt="Image">
                        <h3>MOBéjaia</h3>
                      </div>
                      <div>
                        <span class="vs"><span>VS</span></span>
                      </div>
                      <div class="team-2 text-center">
                        <img src="images/logo_tr1.png" alt="Image">
                        <h3>FETazmalt</h3>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-center widget-vs-contents mb-4">
                  <h4>Championnat Régionale</h4>
                  <p class="mb-5">
                    <span class="d-block">18 Octobre 2020</span>
                    <span class="d-block">9:30 AM GMT+0</span>
                    <strong class="text-primary">Tazmalt Stadium</strong>
                  </p>

                </div>
              
            </div>
          </div>
          <div class="col-lg-6 mb-4">
            <div class="bg-light p-4 rounded">
              <div class="widget-body">
                  <div class="widget-vs">
                    <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                      <div class="team-1 text-center">
                        <img src="images/logo_tr1.png" alt="Image">
                        <h3>FETazmalt</h3>
                      </div>
                      <div>
                        <span class="vs"><span>VS</span></span>
                      </div>
                      <div class="team-2 text-center">
                        <img src="images/logo_MOB.png" alt="Image">
                        <h3>MOBéjaia</h3>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="text-center widget-vs-contents mb-4">
                  <h4>Championnat Régionale</h4>
                  <p class="mb-5">
                    <span class="d-block">18 Octobre 2020</span>
                    <span class="d-block">9:30 AM GMT+0</span>
                    <strong class="text-primary">Tazmalt Stadium</strong>
                  </p>

                </div>
              
            </div>
          </div>
          
        </div>
      </div>
    </div> <!-- .site-section -->

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-6 title-section">
            <h2 class="heading">Videos</h2>
          </div>
          <div class="col-6 text-right">
            <div class="custom-nav">
            <a href="#" class="js-custom-prev-v2"><span class="icon-keyboard_arrow_left"></span></a>
            <span></span>
            <a href="#" class="js-custom-next-v2"><span class="icon-keyboard_arrow_right"></span></a>
            </div>
          </div>
        </div>


        <div class="owl-4-slider owl-carousel">
          <div class="item">
            <div class="video-media">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Zidane pour rester au Real Madrid?</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Zidane double pour assurer une victoire confortable à l'extérieur</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Zidane double pour assurer une victoire confortable à l'extérieur</h3>
                </div>
              </a>
            </div>
          </div>

          <div class="item">
            <div class="video-media">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Zidane pour rester au Real Madrid?</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Zidane pour rester au Real Madrid?</h3>
                </div>
              </a>
            </div>
          </div>
          <div class="item">
            <div class="video-media">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              <a href="https://vimeo.com/139714818" class="d-flex play-button align-items-center" data-fancybox>
                <span class="icon mr-3">
                  <span class="icon-play"></span>
                </span>
                <div class="caption">
                  <h3 class="m-0">Zidane pour rester au Real Madrid?</h3>
                </div>
              </a>
            </div>
          </div>

        </div>

      </div>
    </div>

    <div class="container site-section">
      <div class="row">
        <div class="col-6 title-section">
          <h2 class="heading">Notre blog</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta">22 Sept 2020</span>
              <h3 class="mb-4"><a href="#">Zidane pour rester au Real Madrid?</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
              <p><a href="#">Voir Plus</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta">22 Sept 2020</span>
              <h3 class="mb-4"><a href="#">Zidane pour rester au Real Madrid?</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
              <p><a href="#">Voir Plus</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

@endsection