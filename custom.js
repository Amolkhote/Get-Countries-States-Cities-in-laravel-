// Form Validation

// Data Picker Initialization

$(document).ready(function() {
    $("#name_error").hide();
    $("#last_name_error").hide();
    $("#mobile_error").hide();
    $("#date_error").hide();
    $("#email_error").hide();
    $("#gender_error").hide();
    $("#whatsApp_no_error").hide();
    $("#primary_skills1_error").hide();
    $("#primary_skills2_error").hide();
    $('#other_skills_error').hide();
    $('#experience_error').hide();
    $('#company_info_error').hide();
    $('#education_error').hide();


    var name_error = true;
    var last_name_error = true;
    var mobile_error = true;
    var date_error = true;
    var email_error = true;
    var gender_error = true;
    var whatsApp_no_error = true;
    var primary_skills1_error = true;
    var primary_skills2_error = true;
    var other_skills_error = true;
    var experience_error = true;
    var company_info_error = true;
    var education_error = true;


    // Function For Name
    $("#name").keyup(function() {
        check_name();
    });

    function check_name() {
        var name = $("#name").val();
        var regex = /^[a-zA-Z]+$/;
        if (name == "" || !name.match(regex)) {
            $("#name_error").show();
            $("#name_error").html("Please enter your name");
            $("#name_error").css("color", "red");
            $("#name").focus();
            name_error = false;
        } else {
            $("#name_error").hide();
        }
    }
    // FUnction For Last Name
    $("#last_name").keyup(function() {
        check_last_name();
    });

    function check_last_name() {
        var last_name = $("#last_name").val();
        var regex = /^[a-zA-Z]+$/;
        if (last_name == "" || !last_name.match(regex)) {
            $("#last_name_error").show();
            $("#last_name_error").html("Please enter your lastname");
            $("#last_name_error").css("color", "red");
            $("#last_name").focus();
            last_name_error = false;
        } else {
            $("#last_name_error").hide();
        }
    }
    // Function For check Mobile Number

    $("#mobile").keyup(function() {
        check_mobile();
    });

    function check_mobile() {
        var mobile = $("#mobile").val();
        if (mobile == "") {
            $("#mobile_error").show();
            $("#mobile_error").html("Please enter your mobile number");
            $("#mobile_error").css("color", "red");
            $("#mobile").focus();
            mobile_error = false;
        } else if (mobile.length != 10) {
            $("#mobile_error").show();
            $("#mobile_error").html("Please enter valid mobile number");
            $("#mobile_error").css("color", "red");
            $("#mobile").focus();
            mobile_error = false;
        } else {
            $("#mobile_error").hide();
        }
    }

    // Function For CHeck Date Is Valid Or // NOTE:
    $("#date").focusout(function() {
        check_date();
    });

    function check_date() {
        var date = $("#date").val();
        if (date == "") {
            $("#date_error").show();
            $("#date_error").html("Please select your date of birth");
            $("#date_error").css("color", "red");
            $("#date").focus();
            date_error = false;
        } else {
            $("#date_error").hide();
        }
    }

    // Function For Check Email is Valid Or // NOTE:
    $("#email").keyup(function() {
        check_email();
    });

    function check_email() {
        var email = $("#email").val();
        var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if (email == "") {
            $("#email_error").show();
            $("#email_error").html("Please enter email address");
            $("#email_error").css("color", "red");
            $("#email_error").focus();
            date_error = false;
        } else if (!regex.test(email)) {
            $("#email_error").show();
            $("#email_error").html("Please enter valid email address");
            $("#email_error").css("color", "red");
            $("#email").focus();
            date_error = false;
        } else {
            $("#email_error").hide();
        }
    }

    // Functin For Check Gender Dropdown
    $("#gender").focusout(function() {
        check_gender();
    });

    function check_gender() {
        var gender = $("#gender").val();
        if (gender == "") {
            $("#gender_error").show();
            $("#gender_error").html("Please select your gender");
            $("#gender_error").css("color", "red");
            $("#gender").focus();
            gender_error = false;
        } else if (gender == "0") {
            $("#gender_error").show();
            $("#gender_error").html("Please select valid gender");
            $("#gender_error").css("color", "red");
            $("#gender").focus();
            gender_error = false;
        } else {
            $("#gender_error").hide();
        }
    }

    // Function For Check WhatsApp_no_error is Valid Or NOt
    $("#yes").click(function() {
        $("#enter_whatsapp_no").append(
            '<label for="gender">Enter Your WhatsApp No :</label><div class="col-sm-12 col-md-12 col-lg-12"><input type="number" maxlength="10" minlength="10" autocomplete="off" class="form-control" id="WhatsApp_no" placeholder="Enter Mobile Number" name="WhatsApp_no"><span id="disp_error"></span></div><br><div class="col-sm-12 col-md-12 col-lg-12"><label for="gender">Confirm WhatsApp No :</label><input type="number" maxlength="10" minlength="10" autocomplete="off" class="form-control" id="confirm_whatsapp_no" placeholder="Confirm Mobile Number" name="confirm_whatsapp_no"><span id="con_disp_error"></span><br><span id="display_error"></span></div>'
        );
        $("#disp_error").hide();
        $("#con_disp_error").hide();

        var main_no;
        var confirm_no;

        $("#WhatsApp_no").keyup(function() {
            main_no = check_whatsApp_no();
        });
        $("#confirm_whatsapp_no").keyup(function() {
            confirm_no = confirm();
        });

        $("#confirm_whatsapp_no").keyup(function() {
            if (main_no === confirm_no) {
                $("#display_error").html("WhatsApp number confirm");
                $("#display_error").css("color", "green");
            } else {
                $("#display_error").html(
                    "Please enter valid confirm whatsApp number...!! WhatsApp number not confirm"
                );
                $("#display_error").css("color", "red");
                whatsApp_no_error = false;
            }
        });
    });

    $("#no").click(function() {
        $("#enter_whatsapp_no").empty();
    });

    function check_whatsApp_no() {
        var main_whatsapp_no = $("#WhatsApp_no").val();

        if (main_whatsapp_no == "") {
            $("#whatsApp_no_error").show();
            $("#disp_error").html("Please enter whatsApp number");
            $("#disp_error").css("color", "red");
            whatsApp_no_error = false;
        } else if (main_whatsapp_no.length != 10) {
            $("#disp_error").show();
            $("#disp_error").html("Please enter valid whatsApp number");
            $("#disp_error").css("color", "red");
            whatsApp_no_error = false;
        } else {
            $("#disp_error").hide();
            confirm();
        }
        return main_whatsapp_no;
    }
    //----------------------------------------------------------------------------
    function confirm() {
        var confirm_whatsapp_no = $("#confirm_whatsapp_no").val();
        if (confirm_whatsapp_no == "") {
            $("#con_disp_error").show();
            $("#con_disp_error").html("Please confirm whatsApp number");
            $("#con_disp_error").css("color", "red");
            whatsApp_no_error = false;
        } else if (confirm_whatsapp_no.length != 10) {
            $("#con_disp_error").show();
            $("#con_disp_error").html(
                "Please enter valid confirm whatsApp number"
            );
            $("#con_disp_error").css("color", "red");
            whatsApp_no_error = false;
        } else {
            $("#con_disp_error").hide();
        }
        return confirm_whatsapp_no;
    }

    // Function for Check primary_skills1_error
    $("#primary_skills1").click(function() {
        check_primary_skills1();
    });

    function check_primary_skills1() {
        var primary_skills1 = $("#primary_skills1").val();
        if (primary_skills1 == "") {
            $("#primary_skills1_error").show();
            $("#primary_skills1_error").html("Please select primary skills");
            $('#primary_skills1_error').css("color", "red");
            primary_skills1_error = false;
        } else if (primary_skills1 == 0) {
            $("#primary_skills1_error").show();
            $("#primary_skills1_error").html("Please select valid primary skills");
            $('#primary_skills1_error').css("color", "red");
            primary_skills1_error = false;
        } else {
            $('#primary_skills1_error').hide();
        }
    }

    // Function for check primary_skills2_error
    $('#primary_skills2').click(function() {
        check_primary_skills2();
    });

    function check_primary_skills2() {
        var primary_skills2 = $("#primary_skills2").val();
        if (primary_skills2 == "") {
            $("#primary_skills2_error").show();
            $("#primary_skills2_error").html("Please select primary skills");
            $('#primary_skills2_error').css("color", "red");
            primary_skills1_error = false;
        } else if (primary_skills2 == 0) {
            $("#primary_skills2_error").show();
            $("#primary_skills2_error").html("Please select valid primary skills");
            $('#primary_skills2_error').css("color", "red");
            primary_skills1_error = false;
        } else {
            $('#primary_skills2_error').hide();
        }
    }

    // function for check other skills
    $("#other_skills").keyup(function() {
        check_other_skills_error();
    });

    function check_other_skills_error() {

        var maintxt = $("#other_skills").val();
        var regex = /\s+/gi;
        var wordCount = maintxt.trim().replace(regex, " ").split(" ").length;
        if (maintxt == '') {
            $("#other_skills_error").show();
            $('#other_skills_error').html("Please enter other skills ");
            $('#other_skills_error').css("color", "red");
            other_skills_error = false;
        } else {
            if (wordCount <= 6) {
                // $('#other_skills_success').after(6 - wordCount);
                if (wordCount > 5) {
                    $("#other_skills_error").hide();
                } else {
                    $("#other_skills_error").show();
                    $('#other_skills_error').html("Please enter less than 6 word ");
                    $('#other_skills_error').css("color", "red");
                    other_skills_error = false;
                }
                // $('#word_left').text(6 - words)
            } else {
                // e.preventDefault();
                $("#other_skills_error").show();
                $('#other_skills_error').html("You Enter more than 6 word..! only 6 word are allow ");
                $('#other_skills_error').css("color", "red");
                other_skills_error = false;

            }
        }
    }

    // Function FOr Check experience_error
    $('#experience').click(function() {
        check_experience();
    });

    function check_experience() {
        var experience = $('#experience').val();
        if (experience == '') {
            $('#experience_error').show();
            $('#experience_error').html('Please select experience');
            $('#experience_error').css("color", "red");
            experience_error = false;
        } else if (experience == 0) {
            $('#experience_error').show();
            $('#experience_error').html('Please select valid experience option');
            $('#experience_error').css("color", "red");
            experience_error = false;
        } else {
            $('#experience_error').hide();
        }
    }

    // function for check company info error
    $('#working_company_info').keyup(function() {
        check_working_company_info();
    });

    function check_working_company_info() {
        var working_company_info = $('#working_company_info').val();
        var regex = /\s+/gi;
        var company_info_count = working_company_info.trim().replace(regex, " ").split(" ").length;
        if (company_info_count <= 49) {
            if (company_info_count > 48) {
                $("#company_info_error").hide();
            } else {
                $("#company_info_error").show();
                $('#company_info_error').html("Please enter less than 49 word ");
                $('#company_info_error').css("color", "red");
                company_info_error = false;
            }
        } else {
            $("#company_info_error").show();
            $('#company_info_error').html("You Enter more than 49 word..! only 49 word are allow ");
            $('#company_info_error').css("color", "red");
            company_info_error = false;

        }

    }

    // function for show diploma menu
    $("#diploma").click(function() {
        var i;

        $("#show_data").empty();
        $("#show_data").append('<div class="row"><div class="offset-sm-2 offset-md-2 offset-lg-2"></div><div class="col-sm-4 col-md-4 col-lg-4"><div class="form-group"><label for="diploma_specialization">Diploma Specialization :</label><select class="form-control" name="diploma_specialization" id="diploma_spe"><option value="0">-- Diploma Specialization -- </option><option value="computer_science_engineering">Computer Science Engineering</option><option value="civil">Civil</option><option value="electronics">Electronics</option><option value="electrical">Electrical</option><option value="electonics_and_telecommunication">Electronics and Telecommunication</option><option value="information_technology">Information technology</option><option value="mechanical">Mechanical</option></select></div></div><div class="col-sm-4 col-md-4 col-lg-4"><div class="form-group"><label for="passout_year">Diploma Pass out Year * :</label><select name="passout_year" id="passout_year" class="form-control" ><option value="0">-- Select Passout Year --</option></select></div></div></div><div class="row"><div class="offset-sm-2 offset-md-2 offset-lg-2"></div><div class="col-sm-4 col-md-4 col-lg-4"><div class="form-group"><label for="diploma_percentage">12th/Diploma Percentage *:</label><input type="number" maxlength="2" minlength="2" autocomplete="off" class="form-control" id="diploma_percentage" placeholder="Enter 12th/ Diploma Percentage" name="diploma_percentage" ></div></div><div class="col-sm-4 col-md-4 col-lg-4"><div class="form-group"><label for="name">SSC percentage *:</label><input type="number" maxlength="2" minlength="2" autocomplete="off" class="form-control" id="scc_percentage" placeholder="Enter Your SCC Percentage" name="scc_percentage"></div></div></div>');
        for (i = 2000; i <= 2022; i++) {
            $("#passout_year").append(
                '<option value="' + i + '">' + i + "</option>"
            );
        }

        $('#diploma_spe').click(function() {
            // check_diploma_error();

            console.log("okk");


        });

    });


    function check_diploma_error() {
        var diploma_specialization = $('#diploma_specialization').val();
        if (diploma_specialization == '') {

        }
        console.log(diploma_specialization);
    }
});

$(document).ready(function() {
    $("#show_price_list").hide();
    $("#paid_service").click(function() {
        $("#show_price_list").show();
    });
    $("#free_service").click(function() {
        $("#show_price_list").hide();
    });
});
var modal = document.getElementById("id01");
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
};




// FOr hide Or Show Education Row
$(document).ready(function() {
    // $("#graduation_menu").hide();
    // $("#dip_menu").hide();
    // $("#post-graduation-menu1").hide();
    // $("#diploma").click(function() {
    //     var i;
    //     $("#show_data").empty();
    //     $("#show_data").append(
    //         '<div><div class="row"><div class="offset-sm-2 offset-md-2 offset-lg-2"></div><div class="col-sm-4 col-md-4 col-lg-4"><div class="form-group"><label for="diploma_specialization">Diploma Specialization :</label><select class="form-control" name="diploma_specialization" id="diploma_specialization" ><option value="0">-- Diploma Specialization -- </option><option value="computer_science_engineering">Computer Science Engineering</option><option value="civil">Civil</option><option value="electronics">Electronics</option><option value="electrical">Electrical</option><option value="electonics_and_telecommunication">Electronics and Telecommunication</option><option value="information_technology">Information technology</option><option value="mechanical">Mechanical</option></select></div></div><div class="col-sm-4 col-md-4 col-lg-4"><div class="form-group"><label for="passout_year">Diploma Pass out Year * :</label><select name="passout_year" id="passout_year" class="form-control" ><option value="0">-- Select Passout Year --</option></select></div></div></div><div class="row"><div class="offset-sm-2 offset-md-2 offset-lg-2"></div><div class="col-sm-4 col-md-4 col-lg-4"><div class="form-group"><label for="diploma_percentage">12th/Diploma Percentage *:</label><input type="number" maxlength="2" minlength="2" autocomplete="off" class="form-control" id="diploma_percentage" placeholder="Enter 12th/ Diploma Percentage" name="diploma_percentage" ></div></div><div class="col-sm-4 col-md-4 col-lg-4"><div class="form-group"><label for="name">SSC percentage *:</label><input type="number" maxlength="2" minlength="2" autocomplete="off" class="form-control" id="scc_percentage" placeholder="Enter Your SCC Percentage" name="scc_percentage"></div></div></div></div>'
    //     );
    //     for (i = 2000; i <= 2022; i++) {
    //         $("#passout_year").append(
    //             '<option value="' + i + '">' + i + "</option>"
    //         );
    //     }
    // });

    $("#graduation").click(function() {
        var i;
        $("#show_data").empty();
        $("#show_data").append(
            '<div id=""><div class="row"><div class="offset-sm-2 offset-md-2 offset-lg-2"></div><div class="col-sm-4 col-md-4 col-lg-4"><div class="form-group"><label for="diploma_specialization">Graduation Specialization :</label><select class="form-control" name="diploma_specialization" id="diploma_specialization" ><option value="0">-- Graduation Specialization -- </option><option value="computer_science_engineering">Computer Science Engineering</option><option value="civil">Civil</option><option value="electronics">Electronics</option><option value="electrical">Electrical</option><option value="electonics_and_telecommunication">Electronics and Telecommunication</option><option value="information_technology">Information technology</option><option value="mechanical">Mechanical</option></select></div></div><div class="col-sm-4 col-md-4 col-lg-4"><div class="form-group"><label for="passout_year">Graduation Pass out Year * :</label><select name="passout_year" id="passout_year" class="form-control" ><option value="0">-- Select Passout Year --</option></select></div></div></div><div class="row"><div class="offset-sm-2 offset-md-2 offset-lg-2"></div><div class="col-sm-4 col-md-4 col-lg-4"><div class="form-group"><label for="diploma_percentage">12th/Diploma Percentage *:</label><input type="number" maxlength="2" minlength="2" autocomplete="off" class="form-control" id="diploma_percentage" placeholder="Enter 12th/ Diploma Percentage" name="diploma_percentage" ></div></div><div class="col-sm-4 col-md-4 col-lg-4"><div class="form-group"><label for="name">SSC percentage *:</label><input type="number" maxlength="2" minlength="2" autocomplete="off" class="form-control" id="scc_percentage" placeholder="Enter Your SCC Percentage" name="scc_percentage"></div></div></div></div>'
        );
        for (i = 2008; i <= 2022; i++) {
            $("#passout_year").append(
                '<option value="' + i + '">' + i + "</option>"
            );
        }
    });
    $("#post_graduation").click(function() {
        var i;
        $("#show_data").empty();
        $("#show_data").append(
            '<div class=""><div class="row"><div class="offset-sm-2 offset-md-2 offset-lg-2"></div><div class="col-sm-4 col-md-4 col-lg-4"><div class="form-group"><label for="diploma_specialization">Post-Graduation Specialization *:</label><select class="form-control" name="post_graduation_specialization" id="graduation_specialization"><option value="0">-- Post-Graduation Specialization -- </option><option value="computer_science_engineering">Computer Science Engineering</option><option value="civil">Civil</option><option value="electronics">Electronics</option><option value="electrical">Electrical</option><option value="electonics_and_telecommunication">Electronics and Telecommunication</option><option value="information_technology">Information technology</option><option value="mechanical">Mechanical</option></select></div></div><div class="col-sm-4 col-md-4 col-lg-4"><div class="form-group"><label for="passout_year">Post-Graduation  Pass out Year * :</label><select name="passout_year" id="passout_year" class="form-control"><option value="0">-- Select Passout Year --</option> </select></div></div></div><div class="row"><div class="offset-sm-2 offset-md-2 offset-lg-2"></div><div class="col-sm-4 col-md-4 col-lg-4"><div class="form-group"><label for="diploma_percentage">12th/Diploma Percentage *:</label><input type="number" maxlength="2" minlength="2" autocomplete="off" class="form-control" id="diploma_percentage" placeholder="Enter 12th/ Diploma Precentage" name="diploma_percentage"></div></div><div class="col-sm-4 col-md-4 col-lg-4"><div class="form-group"><label for="name">SSC percentage *:</label><input type="number" maxlength="2" minlength="2" autocomplete="off" class="form-control" id="scc_percentage" placeholder="Enter Your SCC Percentage" name="scc_percentage"></div></div></div></div>'
        );
        for (i = 2008; i <= 2022; i++) {
            $("#passout_year").append(
                '<option value="' + i + '">' + i + "</option>"
            );
        }
    });
});

function myfunction(countrycode) {
    var data1 = countrycode;
    if ((data = !"")) {
        $.ajax({
            url: "getstate/" + data1,
            method: "GET",
            dataType: "html",
            success: function(json) {
                if (json == "Not Found") {
                    alert(json);
                } else {
                    $("#state").html(json);
                }
            },
            error: function(get) {
                alert(get);
            }
        });
    } else {
        alert("not okk");
    }
}

function selectstate(stateId) {
    var stateData1 = stateId;
    if ((stateData = !"")) {
        $.ajax({
            url: "getcity/" + stateData1,
            method: "GET",
            dataType: "html",
            success: function(getcity) {
                if (getcity == "Not Found") {
                    alert("Data Not Found");
                } else {
                    $("#city").html(getcity);
                }
            },
            error: function(get) {
                console.log(get);
            }
        });
    }
}

$(document).ready(function() {
    $("#refresh_captcha").click(function() {
        $.ajax({
            url: "/refreshcaptcha",
            type: "GET",
            dataType: "html",
            success: function(json) {
                $("#abc").html(json);
            },
            error: function(data) {
                alert("" + data);
            }
        });
    });
});