@extends('layout.pagelayout')

@section('title', 'Tibia Maracay')
	@section('budy')
            <div class="featured"> <img style="margin: auto; width: 100%; height:100%;" src="{{ asset('PanelStyle/images/banner_bg1.jpg') }}" alt="">
                <div id="texto" class="section">
                    <h2 class="autoText">!</h2>
                        <h4 style="padding: 10px; font-size:25px; color: white; font-family: 'UnifrakturCook';">Juega y gana dinero con Tibia.. registrate para saber como! al registrate, Participas por premios y mas!!</h4>
                        <a href="{{ route('register') }}""><button class="btn btn-primary">Registrate</button></a>
                </div>
                <span>&nbsp;</span> 
            </div>
            <div id="content">
                <a href="https://www.youtube.com/watch?v=OpAaLT_PTCU" target="_blank"><img style="margin: auto; width: 100%; height:100%;"  src="{{ asset('PanelStyle/images/videobg.jpg') }}"></a> 
            </div>
            <div id="sidebar"> 
                <img style="margin: auto; width: 100%; height:100%; opacity: 1;"  src="{{ asset('PanelStyle/images/banner.jpg') }}">
            </div>
            <div id="content">
              <!--Carousel Wrapper-->
              <div id="carousel-with-lb" class="carousel slide carousel-multi-item" data-ride="carousel">
                <!--Controls-->
                <div class="controls-top">
                  <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="prev"><i
                      class="fas fa-chevron-left"></i></a>
                  <a class="btn-floating btn-secondary" href="#carousel-with-lb" data-slide="next"><i
                      class="fas fa-chevron-right"></i></a>
                </div>
                <!--/.Controls-->
                <!--Indicators-->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-with-lb" data-slide-to="0" class="active secondary-color"></li>
                  <li data-target="#carousel-with-lb" data-slide-to="1" class="secondary-color"></li>
                </ol>
                <!--/.Indicators-->
                <!--Slides and lightbox-->
                <div class="carousel-inner mdb-lightbox" role="listbox">
                  <div id="mdb-lightbox-ui"></div>
                  <!--First slide-->
                  <div class=" carousel-item active text-center">

                    <figure class="col-md-4 d-md-inline-block">
                      <a href="{{ asset('PanelStyle/images/1.png') }}"
                        data-size="1600x1067">
                        <img src="{{ asset('PanelStyle/images/1.png') }}"
                          class="img-fluid">
                      </a>
                    </figure>

                    <figure class="col-md-4 d-md-inline-block">
                      <a href="{{ asset('PanelStyle/images/2.png') }}"
                        data-size="1600x1067">
                        <img src="{{ asset('PanelStyle/images/2.png') }}"
                          class="img-fluid">
                      </a>
                    </figure>

                    <figure class="col-md-4 d-md-inline-block">
                      <a href="{{ asset('PanelStyle/images/1.png') }}"
                        data-size="1600x1067">
                        <img src="{{ asset('PanelStyle/images/1.png') }}"
                          class="img-fluid">
                      </a>
                    </figure>

                    <figure class="col-md-4 d-md-inline-block">
                      <a href="{{ asset('PanelStyle/images/2.png') }}"
                        data-size="1600x1067">
                        <img src="{{ asset('PanelStyle/images/2.png') }}"
                          class="img-fluid">
                      </a>
                    </figure>
                  </div>
                  <!--/.First slide-->

                  <!--Second slide-->
                  <div class="carousel-item text-center">
                    <figure class="col-md-4 d-md-inline-block">
                      <a href="{{ asset('PanelStyle/images/1.png') }}"
                        data-size="1600x1067">
                        <img src="{{ asset('PanelStyle/images/1.png') }}"
                          class="img-fluid">
                      </a>
                    </figure>

                    <figure class="col-md-4 d-md-inline-block">
                      <a href="{{ asset('PanelStyle/images/2.png') }}"
                        data-size="1600x1067">
                        <img src="{{ asset('PanelStyle/images/2.png') }}"
                          class="img-fluid">
                      </a>
                    </figure>

                    <figure class="col-md-4 d-md-inline-block">
                      <a href="{{ asset('PanelStyle/images/1.png') }}"
                        data-size="1600x1067">
                        <img src="{{ asset('PanelStyle/images/1.png') }}"
                          class="img-fluid">
                      </a>
                    </figure>

                    <figure class="col-md-4 d-md-inline-block">
                      <a href="{{ asset('PanelStyle/images/2.png') }}"
                        data-size="1600x1067">
                        <img src="{{ asset('PanelStyle/images/2.png') }}"
                          class="img-fluid">
                      </a>
                    </figure>
                  </div>
                  <!--/.Second slide-->
                </div>
                <!--/.Slides-->
              </div>
              <!--/.Carousel Wrapper-->
            </div>
            <div id="sidebar"> <a class="readmore" href="archives.html">&nbsp;</a>
                <ul class="connect">
                    <li>
                        Follow Us Here:
                    </li>
                    <li>
                        <a class="twitter" href="http://www.freewebsitetemplates.com/go/twitter/">&nbsp;</a>
                    </li>
                    <li>
                        <a class="facebook" href="http://www.freewebsitetemplates.com/go/facebook/">&nbsp;</a>
                    </li>
                    <li>
                        <a class="googleplus" href="http://freewebsitetemplates.com/go/googleplus/">&nbsp;</a>
                    </li>
                </ul>
            </div>
	@endsection