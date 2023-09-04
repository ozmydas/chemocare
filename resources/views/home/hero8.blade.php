   <!-- HERO-8
       ============================================= -->
   <section id="hero-8" class="bg-scroll hero-section division">
       <div class="container">
           <div class="row">


               <!-- HERO TEXT -->
               <div class="col-xl-10 offset-xl-1">
                   <div class="hero-txt white-color text-center">

                       <!-- Small Title -->
                       <h4>SELAMAT DATANG DI</h4>

                       <!-- Title -->
                       <h2>SELF CARE PASIEN KEMOTERAPIs</h2>

                       <!-- Hero Form Button -->
                       <div class="col-lg-12 form-btn" id="myForm">
                           {{-- <button type="submit" class="btn btn-primary tra-white-hover submit" data-toggle="modal"
                           data-target="#iframeModal">Mulai
                               Sekarang</button> --}}
                           <!-- <a href="#">Open Iframe</a> -->

                           <div class="modal-overlay" id="modalOverlay">
                               <div class="modal-content">
                                   <iframe src="wizard/index.html" width="100%" height="900"
                                       frameborder="0"></iframe>
                                   <p></p>
                                   <button class="btn btn-danger" id="closeModalButton">Close</button>
                               </div>
                           </div>
                       </div>

                       <!-- Hero Form Message -->
                       <div class="col-lg-12 seo-form-msg"><span class="loading"></span></div>

                       <!-- HERO LINKS -->
                       <!-- <div class="hero-links">
     <span>No credit card required</span>
     <span>* <a href="#">See FAQ</a> for more details</span>
     <span><a href="#">Privacy Policy</a></span>
    </div> -->

                   </div>
               </div> <!-- END HERO TEXT -->


           </div> <!-- End row -->
       </div> <!-- End container -->


       <!-- HERO WAVES -->
       <div class="hero-waves">
           <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
               viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
               <defs>
                   <path id="gentle-wave"
                       d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
               </defs>
               <g class="parallax">
                   {{-- <!-- <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(168, 220, 255, 0.7)" /> --> --}}
                   <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(201, 233, 255, 0.5)" />
                   <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(201, 233, 255, 0.3)" />
                   <use xlink:href="#gentle-wave" x="48" y="7" fill="rgba(201, 233, 255, 1)" />
               </g>
           </svg>
       </div> <!-- END HERO WAVES -->


   </section> <!-- END HERO-8 -->


   <!-- Modal -->
   <div class="modal fade custom-modal" id="iframeModal" tabindex="-1" role="dialog"
       aria-labelledby="iframeModalLabel" aria-hidden="true">
       <div class="modal-dialog" role="document">
           <div class="modal-content">
               <div class="modal-header">
                   <h5 class="modal-title" id="iframeModalLabel">Submit Biodata Diri untuk Pendataan</h5>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                   </button>
               </div>
               <div class="modal-body">
                   <iframe src="{{ url('submit') }}" frameborder="0" allowfullscreen></iframe>
               </div>
               {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div> --}}
           </div>
       </div>
   </div>


   <style>
       body.modal-open {
           /* overflow: hidden !important; */
       }

       .sticky-bar {
           z-index: 999 !important;
       }

       .custom-modal .modal-content{
           width: 90vw;
           max-width: 100vw;
       }

       .custom-modal .modal-dialog {
           max-width: 90%;
           top: 600px !important;
           /* Atur lebar modal maksimal ke 90% dari viewport */
       }

       .custom-modal .modal-body {
           padding: 0;
           /* Menghilangkan padding dari body modal */
       }

       .custom-modal iframe {
           width: 100%;
           height: 90vh;
           /* Tinggi iframe adalah 60% dari tinggi viewport */
           border: none;
           /* Menghilangkan border standar dari iframe */
       }
   </style>
