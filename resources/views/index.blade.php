@extends('layout')
@section('container')
<!--Slider-Start-->
<section id="slider">
  <div id="home-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active" style="background-image:url(images/Slider/it-dept-header.jpg)">
        <div class="carousel-caption container">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
              <h1>{{$header->nama}}</h1>
              <h2>{{$header->judul}}</h2>
              <p>{{$header->desc}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="item" style="background-image:url(images/Slider/it-dept-header2.jpg)">
        <div class="carousel-caption container">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
              <h1>{{$header->nama}}</h1>
              <h2>{{$header->judul}}</h2>
              <p>{{$header->desc}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="item" style="background-image:url(images/Slider/it-dept-header3.jpg)">
        <div class="carousel-caption container">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
              <h1>{{$header->nama}}</h1>
              <h2>{{$header->judul}}</h2>
              <p>{{$header->desc}}</p>
            </div>
          </div>
        </div>
      </div>
      <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a> <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a> </div>
  </div>
  <!--/#home-carousel-->
</section>
<!--About-Section-Start-->
<section id="about">
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h2>TENTANG <span>KAMI</span></h2>
        <div class="line"></div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 ab-sec">
        <div class="col-md-6">
          <h3 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">{{$tentang->judul}}</h3>
          <p>{{$tentang->tentang}}</p>
        </div>
        <div class="col-md-6 ab-sec-img wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms"><img src="images/Aboutus/01.jpg" alt=""> </div>
      </div>
    </div>
  </div>
</section>
<!--Service-Section-Start-->
<section id="service">
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h2><span>LAYANAN</span> KAMI</h2>
        <div class="line"></div>
        
      </div>
    </div>
    <div class="row">
      <div class="features-sec">
        @foreach($layanan as $i)
          <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
            <div class="media service-box">
              <div class="pull-left"> <i class="fa fa-language"></i> </div>
              <div class="media-body">
                <h5 class="media-heading">{{$i->nama_layanan}}</h5>
                <p>{{$i->keterangan}}</p>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
</section>

@endsection