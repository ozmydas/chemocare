<!-- FAQs-1
    ============================================= -->
<section id="faqs-1" class="wide-100 faqs-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title wow fadeInUp" data-wow-delay="0.2s">

                <!-- Section SubTitle -->
                {{-- <span class="section-subtitle bluest{{$key}}-color">Have Questions? Look Here</span> --}}

                <!-- Title -->
                <h3 class="h3-lg">Penanganan Efek Samping Kemoterapi</h3>

                <!-- Text -->
                <p class="p-lg">Kemoterapi merupakan salah satu metode pengobatan kanker yang efektif, namun sering
                    kali membawa efek samping karena obat-obatan yang digunakan tidak hanya menyerang sel kanker, tetapi
                    juga sel-sel sehat di tubuh.
                </p>

            </div>
        </div> <!-- END SECTION TITLE -->


        <!-- QUESTIONS HOLDER -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div id="accordion" role="tablist">

                    <?php $vid = 0; ?>
                    @foreach ($konten as $key => $item)
                        <!-- QUESTION #1 -->
                        <div class="card wow fadeInUp" data-wow-delay="{{$vid * 0.2}}s">

                            <!-- Question -->
                            <div class="card-header" role="tab" id="heading{{ $key }}">
                                <h5 class="h5-sm" onclick="stopAll()">
                                    <a data-toggle="collapse" href="#collapse{{ $key }}" role="button"
                                        aria-expanded="true" aria-controls="collapse{{ $key }}" class="collapsed">
                                        {{ $item['title'] }}
                                    </a>
                                </h5>
                            </div>

                            <!-- Answer -->
                            <div id="collapse{{ $key }}" class="collapse <?= $key = 0 ? 'show' : '' ?>"
                                role="tabpanel" aria-labelledby="heading{{ $key }}" data-parent="#accordion">
                                <div class="card-body">

                                    <!-- Text -->

                                    {!! $item['content'] !!}
                                </div>

                                <div style="padding: 50px; border-radius: 20px; margin-top: -50px; overflow:hidden">

                                    <?php if( $item['video_url'] != ""): ?>
                                    <div id="player<?= $vid ?>"></div>

                                    <?php else: ?>
                                    <div class="alert alert-warning text-center">Tidak Ada Video</div>
                                    <?php endif; $vid++?>
                                </div>
                            </div>


                        </div> <!-- END QUESTION #1 -->
                    @endforeach


                </div> <!-- END ACCORDION -->
            </div> <!-- End col-x -->
        </div> <!-- END QUESTIONS HOLDER -->


    </div> <!-- End container -->
</section> <!-- END FAQs-1 -->


<script src="https://www.youtube.com/iframe_api"></script>

{{-- <button onclick="stopVideo()">STOP VIDEO</button> --}}

<script>
    @foreach ($konten as $key => $item)
        <?php if( $item['video_url'] != ""): ?>
        
        var player{{ $key }};

        <?php endif; ?>
    @endforeach


    function onYouTubeIframeAPIReady() {


        @foreach ($konten as $key => $item)
            <?php if( $item['video_url'] != ""): ?>

            player{{ $key }} = new YT.Player('player{{ $key }}', {
                height: '390',
                width: '100%',
                videoId: extractVideoID('<?= $item['video_url'] ?>'),
                host: 'https://www.youtube.com',
                playerVars: {
                    'playsinline': 1,
                    'origin': "https://www.youtube.com"
                },
                events: {
                    'onReady': onPlayerReady,
                    'onStateChange': onPlayerStateChange
                }
            });

            <?php endif; ?>
        @endforeach

    }

    function onPlayerReady(event) {
        // event.target.playVideo();
    }

    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
            setTimeout(stopVideo, 6000);
        }
    }

    function stopVideo() {
        player.stopVideo();
    }

    function stopAll() {
        @foreach ($konten as $key => $item)
            <?php if( $item['video_url'] != ""): ?>

            if (typeof player{{ $key }}.stopVideo === 'function') {
                player{{ $key }}.stopVideo();
            }

            <?php endif; ?>
        @endforeach
    }

    function extractVideoID(url) {
        // Mencocokkan format URL seperti: https://youtu.be/mk42E0lZbII atau https://youtu.be?v=mk42E0lZbII
        var match = url.match(/(?:youtu\.be\/|v=)([^&]+)/);
        return (match && match[1]) ? match[1] : null;
    }
</script>
