@extends('layouts.home')

@section('title', 'Beranda')

@section('content')

    @include('home.hero8')

    <!-- CONTENT-5 ============================================= -->
    <section id="content-5" class="wide-60 content-section division"
        style="background-color: rgba(201, 233, 255, 1); color: black;">
        <div class="container"
            style="background: #fff; border-radius: 40px 0 40px 0; box-shadow: 2px 2px 8px rgba(0,0,0,.3); position:relative">

            <img src="{{ url('images/logo.png') }}" style="position: absolute; right: -60px; top: -70px; width: 200px; height: auto; transform:rotate(20deg)" />

            <div class="row d-flex align-items-center">


                <!-- TEXT BLOCK -->
                <div class="col-md-7 col-lg-6">
                    <div class="txt-block pc-25 mb-40 wow fadeInLeft" data-wow-delay="0.4s">

                        <!-- Section SubTitle -->
                        <span class="section-subtitle bluestone-color">Selamat Datang di CHEMOCARE</span>

                        <!-- Title -->
                        <h4 class="h4-xl">
                            {!! $konten[0]['title'] !!}
                        </h4>



                        <!-- Text -->
                        <div class="cbox-1" style="line-height: 2em; font-size: 1.5em">
                            <div class="cbox-1-txt text-justify">
                                {!! $konten[0]['content'] !!}

                            </div>
                        </div>

                        <!-- END SMALL STATISTIC -->

                    </div>
                </div> <!-- END TEXT BLOCK -->


                <!-- IMAGE BLOCK -->
                <div class="col-md-5 col-lg-6">
                    <div class="content-5-img mb-40 wow fadeInRight" data-wow-delay="0.6s">
                        <img class="img-fluid" src="{{ url('images/doctor.png') }}" alt="content-image">
                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END CONTENT-5 -->


@endsection
