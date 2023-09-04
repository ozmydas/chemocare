<!-- PROJECTS-1
    ============================================= -->
<section id="edukasi-jeniskanker" class="bg-lightgrey wide-60 projects-section division" style="background-color: #ffffff;"\>
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title wow fadeInUp" data-wow-delay="0.2s">

                <!-- Title 	-->
                <h3 class="h3-lg">Jenis Kanker</h3>

                <!-- Text -->
                <p class="p-lg">Ada banyak jenis kanker yang dapat mempengaruhi berbagai bagian tubuh.
                    Berikut adalah beberapa contoh jenis kanker yang umum terjadi pada data tahun 2020
                </p>

            </div>
        </div>


        <!-- PROJECTS IMAGES HOLDER -->
        <div class="row">


            <!-- IMAGE #1 -->
            @foreach ($jenisKanker as $item)
                <div class="col-md-6 col-lg-4">
                    <div class="project-1 wow fadeInUp" data-wow-delay="0.4s">
                        <a href="project-details.html">

                            <!-- Category -->
                            <p><b>{{ $item['name'] }}</b></p>

                            <!-- Brand Logo -->
                            <!-- <img class="img-fluid" src="{{ url('template/images/brand-1.') }}png" alt="project-logo" />									 -->

                            <!-- Project Data -->
                            <div class="project-data">
                                <p>{{ $item['description'] }}</p>
                            </div>

                        </a>
                    </div>
                </div> <!-- END IMAGE #1 -->
            @endforeach


        </div> <!-- END PROJECTS IMAGES HOLDER -->


        <!-- ALL PROJECTS BUTTON -->
        <div class="row">
            <div class="col-md-12 text-center all-projects-btn wow fadeInUp" data-wow-delay="2.2s">
                {{-- <a href="case-studies-2.html" class="btn btn-md btn-primary tra-black-hover">Lihat Semua Kasus
                    Pengidap Kanker</a> --}}
            </div>
        </div>


    </div> <!-- End container -->
</section> <!-- END PROJECTS-1 -->
