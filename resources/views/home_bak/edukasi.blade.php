@extends('layouts.master')

@section('title', 'Terapi')

@section('content')

<!--? About-2 Area Start -->
<div class="about-area2 section-padding40">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-7 col-md-12">
          <!-- about-img -->
          <div class="about-img">
            <img src="{{ url('healthcouch/assets/img/gallery/about.png')}}" alt="" />
          </div>
        </div>
        <div class="col-lg-5 col-md-12">
          <div class="about-caption">
            <!-- Section Tittle -->
            <div class="section-tittle mb-35">
              <h2>Definisi Kemoterapi</h2>
            </div>
            <p class="pera-top mb-40">
              Almost before we knew it, we had left the ground
            </p>
            <p class="pera-bottom mb-30">
              Praesent porttitor, nulla vitae posuere iaculis, arcu nisl
              dignissim dolor, a pretium mi sem ut ipsum. Fusce fermentum.
              Pellentesque libero tortor, tincidunt et.
            </p>
            <div class="icon-about">
              <img src="{{ url('healthcouch/assets/img/icon/about1.svg')}}" alt="" class="mr-20" />
              <img src="{{ url('healthcouch/assets/img/icon/about2.svg')}}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- About-2 Area End -->

  <!--? Blog Area Start -->
  <section class="home-blog-area section-padding30">
    <div class="container">
      <!-- Section Tittle -->
      <div class="row justify-content-center">
        <div class="col-lg-7 col-md-9 col-sm-10">
          <div class="section-tittle text-center mb-100">
            <h2>Efek Samping Kemoterapi</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="home-blog-single mb-40">
            <div class="blog-img-cap">
              <div class="blog-img">
                <img src="{{ url('healthcouch/assets/img/gallery/blog1.png')}}" alt="" />
              </div>
              <div class="blog-cap">
                <h3>
                  <a href="blog_details.html">Your daily meal plan</a>
                </h3>
                <p>
                  Praesent porttitor, nulla vitae posuere iaculis, arcu nisl
                  dignissim dolor, a pretium mi sem ut ipsum.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="home-blog-single mb-40">
            <div class="blog-img-cap">
              <div class="blog-img">
                <img src="{{ url('healthcouch/assets/img/gallery/blog2.png')}}" alt="" />
              </div>
              <div class="blog-cap">
                <h3>
                  <a href="blog_details.html"
                    >Food is a great source of medicine</a
                  >
                </h3>
                <p>
                  Praesent porttitor, nulla vitae posuere iaculis, arcu nisl
                  dignissim dolor, a pretium mi sem ut ipsum.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="home-blog-single mb-40">
            <div class="blog-img-cap">
              <div class="blog-img">
                <img src="{{ url('healthcouch/assets/img/gallery/blog3.png')}}" alt="" />
              </div>
              <div class="blog-cap">
                <h3><a href="blog_details.html">Everyday diet plan</a></h3>
                <p>
                  Praesent porttitor, nulla vitae posuere iaculis, arcu nisl
                  dignissim dolor, a pretium mi sem ut ipsum.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog Area End -->
  

@endsection
