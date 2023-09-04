<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>FormWizard_v5</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="colorlib.com">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="{{ url('css/fonts/material-design-iconic-font/css/material-design-iconic-font.css') }}">

    <!-- STYLE CSS -->
    <link rel="stylesheet" href="{{ url('css/css/style.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="wrapper">
        <div class="image-holder">
            <img src="{{ url('css/images/form-wizard.png') }}" alt="">
        </div>
        <form action="{{ url('/tambah') }}" id="myformku" method="post">
            {{ csrf_field() }}
            <div id="wizard">
                <!-- SECTION 1 -->
                <h4></h4>
                <section id="step-section-1">
                    <div class="form-row">
                        <label for="">
                            Nama Lengkap *
                        </label>
                        <input type="text" name="name" id="xxx" class="form-control input-section-1"
                            value="lorem ipsum" required>
                    </div>
                    <div class="form-row">
                        <label for="">
                            Umur *
                        </label>
                        <input type="text" name="age" class="form-control input-section-1" value="18"
                            required>
                    </div>
                    <div class="form-row">
                        <label for="">
                            Jenis Kelamin *
                        </label>
                        <div class="form-holder">
                            <select name="gender" id="" class="form-control input-section-1" required>
                                <option value="pria" class="option">Pria</option>
                                <option value="wanita" class="option">Wanita</option>
                            </select>
                            <i class="zmdi zmdi-caret-down"></i>
                        </div>
                    </div>

                    <div class="form-row">
                        <label for="">
                            Alamat *
                        </label>
                        <input type="text" name="address" class="form-control input-section-1" value="lorem ipsum"
                            required>
                    </div>
                    <div class="form-row">
                        <label for="">
                            Nomor Hp *
                        </label>
                        <input type="text" name="phone" class="form-control input-section-1" value="080989999"
                            required>
                    </div>
                </section>

                <!-- SECTION 2 -->
                <h4></h4>
                <section>
                    @foreach ($jeniscancer as $jc)
                        <div class="form-check">
                            <input class="form-check-input input-section-2" type="checkbox" name="cancer_name[]"
                                value="{{ $jc->name }}" id="cancer_{{ $jc->id }}" required>
                            <label class="form-check-label" for="cancer_{{ $jc->id }}">
                                {{ $jc->name }}
                            </label>
                        </div>
                    @endforeach

                    <div class="form-check">
                        <input class="form-check-input input-section-2" type="checkbox" name="cancer_name[]"
                            value="lainnya" id="cancer_other" required>
                        <label class="form-check-label" for="cancer_other">
                            Lainnya
                        </label>
                    </div>



                    <input type="text" name="cancer_name_other" id="cancer_name_other" class="form-control"
                        placeholder="Kanker Lainnya isi di kolom ini" style="display: none">


                </section>



                <!--SECTION 3-->
                <h4></h4>
                <section>
                    <div class="form-holder">
                        <select name="cancer_stadium" id="" class="form-control" required>
                            <option value="1" class="option">1</option>
                            <option value="2" class="option">2</option>
                            <option value="3" class="option">3</option>
                            <option value="4" class="option">4</option>
                        </select>
                        <i class="zmdi zmdi-caret-down"></i>
                    </div>
                </section>

            </div>


        </form>
    </div>



    <script src="{{ url('css/js/jquery-3.3.1.min.js') }}"></script>

    <!-- JQUERY STEP -->
    <script src="{{ url('css/js/jquery.steps.js') }}"></script>

    <script src="{{ url('css/js/main.js?' . uniqid()) }}"></script>
    <!-- Template created and distributed by Colorlib -->

    <script>
        setTimeout(() => {
            $("#cancer_other").on("change", function() {
                if ($(this).is(":checked")) {
					$("#cancer_name_other").show();
                } else{
					$("#cancer_name_other").hide();
				}
            });

            // $("#asu").on("change", function() {
            //     alert("asu");
            // });
        }, 700);
    </script>
</body>

</html>

<script></script>
