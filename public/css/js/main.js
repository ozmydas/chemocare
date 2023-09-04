$(function () {
    $("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        transitionEffectSpeed: 500,
        onFinished: function (event, currentIndex) {
            // alert("SUBMIT POST DISINI")
            $("#myformku").submit();
        },
        onStepChanging: function (event, currentIndex, newIndex) {
            if (newIndex === 1) {
                $(".steps ul").addClass("step-2");

                // validasi
                var section_id = ".input-section-1";
                return check_step_validation(section_id);
            } else {
                $(".steps ul").removeClass("step-2");
            }
            if (newIndex === 2) {
                $(".steps ul").addClass("step-3");

                // validasi
                var section_id = ".input-section-2";
                return check_check_validation(section_id);
            } else {
                $(".steps ul").removeClass("step-3");
            }

            if (newIndex === 3) {
                $(".steps ul").addClass("step-4");
                $(".actions ul").addClass("step-last");
            } else {
                $(".steps ul").removeClass("step-4");
                $(".actions ul").removeClass("step-last");
            }

            return true;
        },
        labels: {
            finish: "Kirim",
            next: "Next",
            previous: "Previous",
        },
    });
    // Custom Steps Jquery Steps
    $(".wizard > .steps li a").click(function () {
        $(this).parent().addClass("checked");
        $(this).parent().prevAll().addClass("checked");
        $(this).parent().nextAll().removeClass("checked");
    });
    // Custom Button Jquery Steps
    $(".forward").click(function () {
        $("#wizard").steps("next");
    });
    $(".backward").click(function () {
        $("#wizard").steps("previous");
    });
    // Checkbox
    $(".checkbox-circle label").click(function () {
        $(".checkbox-circle label").removeClass("active");
        $(this).addClass("active");
    });
});

/********************** */

function check_step_validation(section_id) {
    // Mengambil semua input di dalam elemen dengan id="section-asu"
    var inputs = $(section_id);
    var is_valid = true;

    console.log(inputs);

    // Iterasi melalui setiap input dan mendapatkan nilai mereka
    inputs.each(function () {
        var type = $(this).attr("type");
        var name = $(this).attr("name");
        var value = $(this).val();

        // Jika tipe input adalah radio atau checkbox, pastikan untuk memeriksa apakah itu dicentang sebelum mengambil nilai
        if (
            (type === "radio" || type === "checkbox") &&
            !$(this).prop("checked")
        ) {
            return; // Lanjutkan ke iterasi berikutnya
        }

        console.log("Nama Input: " + name + ", Nilai: " + value);

        if (value == "") {
            is_valid = false;
        }
    });

    if (!is_valid) {
        Swal.fire(
            "Perhatian",
            "Harap isi form dengan lengkap untuk melanjutkan!",
            "warning"
        );
    }

    return is_valid;
}

function check_check_validation(section_id) {
    // Mengambil semua input di dalam elemen dengan id="section-asu"
    var inputs = $(section_id);
    var is_valid = false;
    var show_other = false

    inputs.each(function () {
        var type = $(this).attr("type");
        var name = $(this).attr("name");
        var isChecked = $(this).is(":checked");
        var value = $(this).val();

        console.log(
            "Nama Select: " +
                name +
                ", Nilai: " +
                value +
                ", Checked : " +
                isChecked
        );

        if (value == "lainnya" && isChecked) {
            if ($("#cancer_name_other").val() == "") {
                Swal.fire(
                    "Perhatian",
                    "Harap isi jenis kanker lainnya untuk melanjutkan!",
                    "warning"
                );

                show_other = true
                is_valid = false
                return false;
            }
        }

        if (isChecked) {
            is_valid = true;
        }
    });

    if (!is_valid && !show_other) {
        Swal.fire(
            "Perhatian",
            "Harap pilih jenis kanker untuk melanjutkan!",
            "warning"
        );
    }

    return is_valid;
}

