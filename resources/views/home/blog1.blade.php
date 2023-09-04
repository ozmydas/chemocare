<!-- BLOG-1
    ============================================= -->
<section id="edukasi-terapi" class="wide-60 blog-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1 section-title wow fadeInUp" data-wow-delay="0.2s">

                <!-- Title 	-->
                <h3 class="h3-lg">Pulihkan Diri dengan Terapi</h3>

                <!-- Text -->
                <p class="p-lg">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis libero
                    tempus, blandit posuere and ligula varius magna a porta elementum massa risus
                </p>

            </div>
        </div> <!-- END SECTION TITLE -->


        <!-- BLOG POSTS -->
        <div class="row">


            <!-- BLOG POST #1 -->
            @foreach ($konten as $item)
            <div id="blog_post-1" class="col-md-6 col-lg-4">
                <div class="blog-post wow fadeInUp" data-wow-delay="0.4s">

                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img">
                        <img class="img-fluid" src="{{ url('template/images/blog/pos') }}t-1-img.jpg"
                            alt="blog-post-image" />
                    </div>

                    <!-- BLOG POST TEXT -->
                    <div class="blog-post-txt">

                        <!-- Post Tag -->
                        <p class="post-read"><i class="far fa-clock"></i> - 12 min read</p>

                        <!-- Post Link -->
                        <h5 class="h5-md">
                            <a href="single-post.html">Lorem</a>
                        </h5>

                        <!-- Text -->
                        <p class="grey-color">Fringilla risus luctus mauris auctor purus euismod and pretium
                            purus pretium...</p>

                        <!-- Post Data -->
                        <p class="post-data">by <a href="#">Sean McMarthy</a> - 24 minutes ago</p>
                        <p class="post-tag"><a href="#">#SocialMedia</a>, <a href="#">#Marketing</a></p>

                    </div> <!-- END BLOG POST TEXT -->

                </div>
            </div> <!-- END  BLOG POST #1 -->
            @endforeach


        </div> <!-- END BLOG POSTS -->


        <!-- MORE POSTS BUTTON -->
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="more-posts">
                    {{-- <a href="blog-listing.html" class="btn btn-md btn-primary tra-black-hover">Read More
                        Posts</a> --}}
                </div>
            </div>
        </div>


    </div> <!-- End container -->
</section> <!-- END BLOG-1 -->
