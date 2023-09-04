<!-- SERVICES-4
    ============================================= -->
<section id="edukasi-efeksamping" class="wide-60 services-section division" style="background-color: #ffffff3d;">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title wow fadeInUp" data-wow-delay="0.2s">

                <!-- Title 	-->
                <h3 class="h3-lg">Efek Samping / Dampak Kemoterapi </h3>

                <!-- Text -->
                <p class="p-lg">
                    Kemoterapi, meskipun efektif dalam mengatasi kanker, dapat menyebabkan berbagai efek samping
                    dan dampak pada pasien.
                    Berikut adalah beberapa efek samping yang umum terjadi selama atau setelah menjalani sesi
                    kemoterapi
                </p>

            </div>
        </div>


        <!-- SERVICE BOXES -->
        <div class="services-boxes">
            <div class="row">


                <!-- SERVICE BOX #1 -->
                <?php $number = 1; ?>
                @foreach ($edukasiEfekSamping as $item)
                    <div class="col-md-6">
                        <div class="sbox-4 icon-md wow fadeInUp" data-wow-delay="0.4s">

                            <!-- Icon -->
                            <img class="img-65" src="{{ url('template/images/icons/number-' . $number++ . '.png') }}"
                                alt="feature-icon" />

                            <!-- Text -->
                            <div class="sbox-4-txt">

                                <!-- Title -->
                                <h5 class="h5-lg">{{ $item['title'] }}</h5>

                                <!-- Text -->
                                <p class="grey-color">
                                    @php
                                        $originalString = $item['content'];
                                        $parts = explode('.', $originalString);
                                        $cutString = implode('.', array_slice($parts, 0, 1)) . '.';
                                    @endphp


                                    {!! $cutString !!}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div> <!-- End row -->
        </div> <!-- END SERVICE BOXES -->



        <!-- ALL PROJECTS BUTTON -->
        <div class="row">
            <div class="col-md-12 text-center all-projects-btn wow fadeInUp" data-wow-delay="2.8s">
                {{-- <a href="case-studies-2.html" class="btn btn-md btn-primary tra-black-hover">Lihat Semua Efek
                    Samping</a> --}}
            </div>
        </div>

        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title wow fadeInUp" data-wow-delay="2.8s">
                <p></p>
                <hr>
                <!-- Text -->
                <p class="p-lg">
                    Efek samping yang dialami oleh setiap pasien dapat berbeda-beda tergantung pada jenis
                    kanker, obat kemoterapi yang digunakan, dosis, serta faktor-faktor individu lainnya.
                    Penting untuk berbicara dengan tim medis untuk memahami dan mengelola efek samping yang
                    mungkin muncul selama perawatan kemoterapi.
                </p>

            </div>
        </div>
    </div> <!-- End container -->
</section> <!-- END SERVICES-4 -->
