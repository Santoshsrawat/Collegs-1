<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overseas Education Consultants in India, Study Abroad Consultant</title>
    <meta name="title" content="Overseas Education Consultants in India, Study Abroad Consultant">
    <meta name="keyword" content="overseas education consultants">
    <meta name="description"
        content="Planning to Study Abroad 2022-23? Best Overseas Education Consultants in India, we guide students to study in the UK, Australia, Canada, USA & New Zealand.">
    <meta name="author" content="getmyuniversity Consultant">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="">
    <meta property="twitter:title" content="">
    <meta property="twitter:description" content="">
    <meta property="twitter:image" content="">
    <link rel="canonical" href="index.html">
    <link rel="preload" href="css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript>
        <link rel="stylesheet" href="css/font-awesome.min.css">
    </noscript>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css" media="all">
    <link rel="stylesheet" href="css/modifystyle.css">

    <!--Favicon-->

    <link rel="apple-touch-icon" sizes="180x180" href="public/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="public/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="public/images/favicon/site.webmanifest">
    <link rel="mask-icon" href="public/images/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8NBEX89NHQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'G-8NBEX89NHQ');
    </script>
    <?php $conn = mysqli_connect("localhost", "root", "", "college");

$query = "SELECT * FROM `navbar` WHERE `id`=2";

$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {?>

            <style>
                :root {
                    --theme-color:
                        <?php echo $row['background-color']; ?>
                    ;
                    --theme-family: 'Rubik', sans-serif;

                }
            </style>
        </head>

        <body>
            <header id="header" class="header">
                <div class="topbar">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-auto ml-auto">
                                <div class="callUs"><span class="text">Get Your Fee Counselling Today</span> <a class="callBtn "
                                        href="tel:+91 9772 378 888" aria-label="Phone"><i class="fa fa-phone mr-2"></i> +91
                                        76-786-76-001</a></div>
                            </div>
                            <div class="col-lg-auto">
                                <div class="social_links">
                                    <a href="https://www.facebook.com/getmyuniversity"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.instagram.com/get_my_university/"><i class="fa fa-instagram"></i></a>
                                    <a href="https://twitter.com/getmyuniversity"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.youtube.com/@GetMyUniversity"><i class="fa fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="navbarMenu">
                    <div class="container">
                        <div class="navbar_inner">
                            <div class="site_logo">
                                <button class="openNav d-lg-none"><span class="navBar"></span></button>
                                <div>
                                    <a class="navbar-brand" href="index.html">
                                        <img src="data:image/jpeg;base64,<?php echo base64_encode($row['logo']); ?>"
                                            alt="getmyuniversity" class="img-fluid w-100 h-100">
                                    </a>
                                </div>
                            <?php }
}?>
                        <a class="callBtn btn theme-btn btn2 d-lg-none ml-auto" href="tel:+917678676001"
                            aria-label="Phone"><i class="fa fa-phone"></i></a>
                        <a class="searchBtn d-lg-none" data-toggle="modal" href="#searchModal"><i
                                class="fa fa-search"></i></a>
                    </div>
                    <nav id="nav">
                        <button class="closeNav d-lg-none">&times;</button>
                        <ul class="main_menu list-unstyled inline">
                            <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                            <li class="dropdown_item nav-item">
                                <a class="nav-link" href="#">Courses <i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                                <span class="drop_btn" data-id="dropdown5"><i class="fa fa-angle-down"></i></span>
                                <ul class="dropdown-menu" id="dropdown5">
                                    <li class="nav-item"><a href="md-colleges.html">MD in India</a></li>
                                    <li class="nav-item"><a href="ms-colleges.html">MS in India</a></li>
                                    <li class="nav-item"><a href="dm-colleges.html">DM in India</a></li>
                                    <li class="nav-item"><a href="mch-colleges.html">MCH in India</a></li>
                                    <li class="nav-item"><a href="dip-colleges.html">DIP in India</a></li>
                                    <li class="nav-item"><a href="mbbs-colleges.html">MBBS in India</a></li>
                                </ul>
                            </li>

                            <li class="mega_dropdown dropdown_item nav-item">
                                <a class="nav-link" href="#">Medical in India <i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                                <span class="drop_btn" data-id="dropdown5"><i class="fa fa-angle-down"></i></span>
                                <ul class="dropdown-menu" id="dropdown5">
                                    <li class="dropdown_inner row">
                                        <ul class="col-md-auto dropdoen_listArea">
                                            <li class="active">MBBS in India</li>
                                        </ul>
                                        <ul class="col-md content_list column5">
                                            <li class="nav-item"><a
                                                    href="medical-colleges-in-karnataka.html">Karnataka</a></li>
                                            <li class="nav-item"><a
                                                    href="medical-colleges-in-pondicherry.html">Pondicherry</a></li>
                                            <li class="nav-item"><a href="medical-colleges-in-jammu-kashmir.html">Jammu
                                                    & Kashmir</a></li>
                                            <li class="nav-item"><a
                                                    href="medical-colleges-in-maharashtra.html">Maharashtra</a></li>
                                            <li class="nav-item"><a href="medical-colleges-in-tamil-nadu.html">Tamil
                                                    Nadu</a></li>
                                            <li class="nav-item"><a
                                                    href="medical-colleges-in-andhra-pradesh.html">Andhra Pradesh</a>
                                            </li>
                                            <li class="nav-item"><a href="medical-colleges-in-punjab.html">Punjab</a>
                                            </li>
                                            <li class="nav-item"><a href="medical-colleges-in-haryana.html">Haryana</a>
                                            </li>
                                            <li class="nav-item"><a href="medical-colleges-in-gujarat.html">Gujarat</a>
                                            </li>
                                            <li class="nav-item"><a href="medical-colleges-in-kerala.html">Kerala</a>
                                            </li>
                                            <li class="nav-item"><a
                                                    href="medical-colleges-in-madhya-pradesh.html">Madhya Pradesh</a>
                                            </li>
                                            <li class="nav-item"><a href="medical-colleges-in-orissa.html">Orissa</a>
                                            </li>
                                            <li class="nav-item"><a
                                                    href="medical-colleges-in-telangana.html">Telangana</a></li>
                                            <li class="nav-item"><a
                                                    href="medical-colleges-in-jharkhand.html">Jharkhand</a></li>
                                            <li class="nav-item"><a href="medical-colleges-in-uttar-pradesh.html">Uttar
                                                    Pradesh</a></li>
                                            <li class="nav-item"><a
                                                    href="medical-colleges-in-rajasthan.html">Rajasthan</a></li>
                                            <li class="nav-item"><a href="medical-colleges-in-west-bengal.html">West
                                                    Bengal</a></li>
                                            <li class="nav-item"><a href="medical-colleges-in-delhi.html">Delhi</a></li>
                                            <li class="nav-item"><a href="medical-colleges-in-bihar.html">Bihar</a></li>
                                            <li class="nav-item"><a
                                                    href="medical-colleges-in-chattisgarh.html">Chattisgarh</a></li>
                                            <li class="nav-item"><a
                                                    href="medical-colleges-in-uttarakhand.html">Uttarakhand</a></li>
                                            <li class="nav-item"><a
                                                    href="medical-colleges-in-andaman-nicobar-islands.html">Andaman
                                                    Nicobar Islands</a></li>
                                            <li class="nav-item"><a href="medical-colleges-in-assam.html">Assam</a></li>
                                            <li class="nav-item"><a
                                                    href="medical-colleges-in-himachal-pradesh.html">Himachal
                                                    Pradesh</a></li>
                                            <li class="nav-item"><a href="medical-colleges-in-goa.html">Goa</a></li>
                                            <li class="nav-item"><a
                                                    href="medical-colleges-in-chandigarh.html">Chandigarh</a></li>
                                            <li class="nav-item"><a href="medical-colleges-in-manipur.html">manipur</a>
                                            </li>
                                            <li class="nav-item"><a
                                                    href="medical-colleges-in-meghalaya.html">Meghalaya</a></li>
                                            <li class="nav-item"><a
                                                    href="medical-colleges-in-dadra-and-nagar-haveli.html">Dadra and
                                                    Nagar Haveli</a></li>
                                            <li class="nav-item"><a href="medical-colleges-in-sikkim.html">Sikkim</a>
                                            </li>
                                            <li class="nav-item"><a
                                                    href="medical-colleges-in-arunachal-pradesh.html">Arunachal
                                                    Pradesh</a></li>
                                            <li class="nav-item"><a href="medical-colleges-in-mizoram.html">Mizoram</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown_item nav-item">
                                <a class="nav-link" href="videos.html">Abroad <i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                                <span class="drop_btn" data-id="dropdown5"><i class="fa fa-angle-down"></i></span>
                                <ul class="dropdown-menu" id="dropdown5">
                                
    <?php
    // Database connection
    $mysqli = new mysqli("localhost", "root", "", "college");

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Query to fetch MBBS program countries
    $query = "SELECT Country_name FROM pages WHERE Course_Name LIKE '%MBBS%'";

    $result = $mysqli->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $country = $row["Country_name"];
            $countryLink = strtolower(str_replace(' ', '-', $country));

            echo '<li class="nav-item"><a href="./abroad/mbbs-program.php?country=' . $countryLink . '">MBBS in ' . $country . '</a></li>';
        }
    }

    $mysqli->close();
    ?>

                                </ul>
                            </li>

                            <!-- <li class="dropdown_item nav-item">
                                <a class="nav-link" href="#">Student Area <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                <span class="drop_btn" data-id="dropdown5"><i class="fa fa-angle-down"></i></span>
                                <ul class="dropdown-menu" id="dropdown5">
                                    <li class="nav-item"><a href="#">Webinars</a></li>
                                    <li class="nav-item"><a href="#">MBBS Books</a></li>
                                    <li class="nav-item"><a href="#">Language</a></li>
                                    <li class="nav-item"><a href="#">Notifications</a></li>
                                </ul>
                            </li> -->

                            <li class="dropdown_item nav-item">
                                <a class="nav-link" href="videos.html">Videos <i class="fa fa-angle-down"
                                        aria-hidden="true"></i></a>
                                <span class="drop_btn" data-id="dropdown5"><i class="fa fa-angle-down"></i></span>
                                <ul class="dropdown-menu" id="dropdown5">
                                    <li class="nav-item"><a href="videos/medical-college-review.html">Medical College
                                            Review</a></li>
                                    <li class="nav-item"><a href="videos/neet-pg-counselling.html">NEET PG
                                            Counselling</a></li>
                                    <li class="nav-item"><a href="videos/neet-ug-counselling.html">NEET UG
                                            Counselling</a></li>
                                    <li class="nav-item"><a href="videos/mbbs-abroad.html">MBBS Abroad</a></li>
                                    <li class="nav-item"><a href="videos/neet-ug-2023-updates.html">NEET UG 2023
                                            Updates</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact</a></li>
                            <li class="nav-item"><a class="nav-link searchBtn" data-toggle="modal"
                                    href="#searchModal"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>
    </header>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>

    <script src="js/script.js"></script>


    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $("#searchNames").keyup(function (event) {
                if (event.keyCode === 13) {
                    $("#univercity").click();
                }
            });
            // $("#searchNames1").keyup(function(event) {
            //     if (event.keyCode === 13) {
            //         $("#univercity1").click();
            //     }
            // });
            $('#univercity').click(function () {
                //alert($('#show_name_student').val());
                if ($('#show_name_student').val() == '') {
                    return false;
                }
                location.href = "https://www.getmyuniversity.com/university" + '/' + $('#show_name_student').val();
            });
            // $('#univercity1').click(function(){
            //     //alert($('#show_name_student').val());
            //     if($('#show_name_student1').val() == ''){
            //         return false;
            //     }
            //     location.href = "https://www.getmyuniversity.com/university"+'/'+$('#show_name_student1').val();
            // });

            // $('#univercity1').click(function(){
            //     //alert($('#show_name_student').val());
            //     if($('#show_name_student1').val() == ''){
            //         return false;
            //     }
            //     location.href = "https://www.getmyuniversity.com/medical-colleges-in-"+$('#show_name_student1').val()+'?'+$('#show_name_student2').val();
            // });

            $('.reviewSlider').owlCarousel({
                loop: false,
                margin: 15,
                items: 3,
                nav: true,
                navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
                dots: true,
                autoplay: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false,
                    },
                    768: {
                        items: 2,
                        nav: false,
                    },
                    1000: {
                        items: 3,
                        nav: true,
                    }
                }
            });




            $(".rvBox").slice(0, 4).show();
            $("#moreVideo").click(function (e) {
                e.preventDefault();
                $(".rvBox:hidden").slice(0, 4).fadeIn("slow");

                if ($(".rvBox:hidden").length == 0) {
                    $("#moreVideo").fadeOut("slow");
                }
            });



        });


    </script>

    <script>
        $(document).ready(function () {
            $('#searchNames').keypress(function () {
                setTimeout(function () {
                    var dInput = $('#searchNames').val();
                    //alert(dInput);
                    $.ajax({
                        type: 'get',
                        url: "https://www.getmyuniversity.com/ajax_seach_application",
                        data: { dInput: dInput },
                        success: function (response) {
                            $('#search_datas').show();
                            $('#search_datas').html('');
                            $('#search_datas').html(response);
                            $('#primary_email_error').hide();

                            $('#search_datas li').click(function () {
                                //alert('hello');
                                $('#searchNames').val($(this).text());
                                $('#search_student_ids').val($(this).data('id'));
                                $('#show_id_student').text($(this).data('ida'));
                                $('#show_name_student').val($(this).data('name'));
                                $('#search_datas').hide();
                                $('#search_datas').html('');
                            });
                        },
                        error: function (response) {
                            //$("#LoadingImage").hide();
                            //alert("Error");
                            //var NewSTIEURL = STIEURL+'/ajax_model_type';
                        }
                    });
                }, 10);
            }).on('keydown', function (e) {
                if (e.keyCode == 8) {
                    setTimeout(function () {
                        var dInput = $('#searchNames').val();
                        //alert(dInput);
                        $.ajax({
                            type: 'get',
                            url: "https://www.getmyuniversity.com/ajax_seach_application",
                            data: { dInput: dInput },
                            success: function (response) {
                                $('#search_datas').html('');
                                $('#search_datas').html(response);
                                $('#primary_email_error').hide();

                                $('#search_datas li').click(function () {
                                    $('#searchNames').val($(this).text());
                                    $('#search_student_ids').val($(this).data('id'));
                                    $('#show_name_student').val($(this).data('name'));
                                    $('#search_datas').hide();
                                    $('#search_datas').html('');
                                });
                            },
                            error: function (response) {
                                //$("#LoadingImage").hide();
                                //alert("Error");
                                //var NewSTIEURL = STIEURL+'/ajax_model_type';
                            }
                        });
                    }, 10);
                }
            });

        });
    </script>

    <!--<script>-->
    <!--    $(document).ready(function() {-->
    <!--        $('#searchNames1').keypress(function() {-->
    <!--            setTimeout(function() {-->
    <!--              var dInput = $('#searchNames1').val();-->
    <!--              //alert(dInput);-->
    <!--              $.ajax({-->
    <!--                    type: 'get',-->
    <!--                    url: "https://www.getmyuniversity.com/ajax_seach_application",-->
    <!--                    data: {dInput:dInput},-->
    <!--                    success: function (response) {-->
    <!--                        $('#search_datas1').show();-->
    <!--                        $('#search_datas1').html('');-->
    <!--                        $('#search_datas1').html(response);-->
    <!--                        $('#primary_email_error1').hide();-->

    <!--                        $('#search_datas1 li').click(function() {-->
    <!--                            //alert('hello');-->
    <!--                            $('#searchNames1').val($(this).text());-->
    <!--                            $('#search_student_ids1').val($(this).data('id'));-->
    <!--                            $('#show_id_student1').text($(this).data('ida'));-->
    <!--                            $('#show_name_student1').val($(this).data('name'));-->
    <!--                            $('#search_datas1').hide();-->
    <!--                            $('#search_datas1').html('');-->
    <!--                        });-->
    <!--                    },-->
    <!--                    error: function (response) {-->
    <!--                        //$("#LoadingImage").hide();-->
    <!--                        //alert("Error");-->
    <!--                        //var NewSTIEURL = STIEURL+'/ajax_model_type';-->
    <!--                    }-->
    <!--                });-->
    <!--            }, 10);-->
    <!--        }).on('keydown', function(e) {-->
    <!--            if (e.keyCode==8){-->
    <!--                setTimeout(function() {-->
    <!--              var dInput = $('#searchNames1').val();-->
    <!--              //alert(dInput);-->
    <!--              $.ajax({-->
    <!--                    type: 'get',-->
    <!--                    url: "https://www.getmyuniversity.com/ajax_seach_application",-->
    <!--                    data: {dInput:dInput},-->
    <!--                    success: function (response) {-->
    <!--                        $('#search_datas1').html('');-->
    <!--                        $('#search_datas1').html(response);-->
    <!--                        $('#primary_email_error1').hide();-->

    <!--                        $('#search_datas1 li').click(function() {-->
    <!--                            $('#searchNames1').val($(this).text());-->
    <!--                            $('#search_student_ids1').val($(this).data('id'));-->
    <!--                            $('#show_name_student1').val($(this).data('name'));-->
    <!--                            $('#search_datas1').hide();-->
    <!--                            $('#search_datas1').html('');-->
    <!--                        });-->
    <!--                    },-->
    <!--                    error: function (response) {-->
    <!--                        //$("#LoadingImage").hide();-->
    <!--                        //alert("Error");-->
    <!--                        //var NewSTIEURL = STIEURL+'/ajax_model_type';-->
    <!--                    }-->
    <!--                });-->
    <!--            }, 10);-->
    <!--            }-->
    <!--        });-->

    <!--    });-->
    <!--</script>-->

    <script>
        $(document).ready(function () {
            $('#searchNames2').keypress(function () {
                setTimeout(function () {
                    var dInput = $('#searchNames2').val();
                    //alert(dInput);
                    $.ajax({
                        type: 'get',
                        url: "https://www.getmyuniversity.com/ajax_seach_application2",
                        data: { dInput: dInput },
                        success: function (response) {
                            $('#search_datas2').show();
                            $('#search_datas2').html('');
                            $('#search_datas2').html(response);
                            $('#primary_email_error2').hide();

                            $('#search_datas2 li').click(function () {
                                //alert('hello');
                                $('#searchNames2').val($(this).text());
                                $('#search_student_ids2').val($(this).data('id'));
                                $('#show_id_student2').text($(this).data('ida'));
                                $('#show_name_student2').val($(this).data('name'));
                                $('#search_datas2').hide();
                                $('#search_datas2').html('');
                            });
                        },
                        error: function (response) {
                            //$("#LoadingImage").hide();
                            //alert("Error");
                            //var NewSTIEURL = STIEURL+'/ajax_model_type';
                        }
                    });
                }, 10);
            }).on('keydown', function (e) {
                if (e.keyCode == 8) {
                    setTimeout(function () {
                        var dInput = $('#searchNames2').val();
                        //alert(dInput);
                        $.ajax({
                            type: 'get',
                            url: "https://www.getmyuniversity.com/ajax_seach_application2",
                            data: { dInput: dInput },
                            success: function (response) {
                                $('#search_datas2').html('');
                                $('#search_datas2').html(response);
                                $('#primary_email_error2').hide();

                                $('#search_datas2 li').click(function () {
                                    $('#searchNames2').val($(this).text());
                                    $('#search_student_ids2').val($(this).data('id'));
                                    $('#c2').val($(this).data('name'));
                                    $('#search_datas2').hide();
                                    $('#search_datas2').html('');
                                });
                            },
                            error: function (response) {
                                //$("#LoadingImage").hide();
                                //alert("Error");
                                //var NewSTIEURL = STIEURL+'/ajax_model_type';
                            }
                        });
                    }, 10);
                }
            });

        });
    </script>
    <script>
        $(document).ready(function () {
            $('#searchNames22').keypress(function () {
                setTimeout(function () {
                    var dInput = $('#searchNames22').val();
                    //alert(dInput);
                    $.ajax({
                        type: 'get',
                        url: "https://www.getmyuniversity.com/ajax_seach_application2",
                        data: { dInput: dInput },
                        success: function (response) {
                            $('#search_datas22').show();
                            $('#search_datas22').html('');
                            $('#search_datas22').html(response);
                            $('#primary_email_error22').hide();

                            $('#search_datas22 li').click(function () {
                                //alert('hello');
                                $('#searchNames22').val($(this).text());
                                $('#search_student_ids22').val($(this).data('id'));
                                $('#show_id_student22').text($(this).data('ida'));
                                $('#show_name_student22').val($(this).data('name'));
                                $('#search_datas22').hide();
                                $('#search_datas22').html('');
                            });
                        },
                        error: function (response) {
                            //$("#LoadingImage").hide();
                            //alert("Error");
                            //var NewSTIEURL = STIEURL+'/ajax_model_type';
                        }
                    });
                }, 10);
            }).on('keydown', function (e) {
                if (e.keyCode == 8) {
                    setTimeout(function () {
                        var dInput = $('#searchNames22').val();
                        //alert(dInput);
                        $.ajax({
                            type: 'get',
                            url: "https://www.getmyuniversity.com/ajax_seach_application2",
                            data: { dInput: dInput },
                            success: function (response) {
                                $('#search_datas22').html('');
                                $('#search_datas22').html(response);
                                $('#primary_email_error22').hide();

                                $('#search_datas22 li').click(function () {
                                    $('#searchNames22').val($(this).text());
                                    $('#search_student_ids22').val($(this).data('id'));
                                    $('#c22').val($(this).data('name'));
                                    $('#search_datas22').hide();
                                    $('#search_datas22').html('');
                                });
                            },
                            error: function (response) {
                                //$("#LoadingImage").hide();
                                //alert("Error");
                                //var NewSTIEURL = STIEURL+'/ajax_model_type';
                            }
                        });
                    }, 10);
                }
            });

        });
    </script>
    <script>
        $("#submitQuery").click(function () {
            // /alert('hello');
            var x = 1;
            $('.error').hide();
            var name = $('#name').val();
            if (name == '') {
                $('#name_error').show();
                x = 2;
            }
            var number = $('#number').val();
            if (number == '') {
                $('#number_error').show();
                x = 2;
            }
            var email = $('#email').val();
            if (email == '') {
                $('#email_error').show();
                x = 2;
            }
            var message = $('#message').val();
            if (message == '') {
                $('#message_error').show();
                x = 2;
            }
            var enter_number_error = $('#enter_number').val();
            if (enter_number_error == '') {
                $('#enter_number_error').show();
                $('#enter_number_error').text('');
                $('#enter_number_error').text('Please Enter Big Number');
                x = 2;
            }

            var one_number = $('#one_number').val();
            var two_number = $('#two_number').val();
            if (one_number > two_number) {
                if (enter_number_error != one_number) {
                    $('#enter_number_error').show();
                    $('#enter_number_error').text('');
                    $('#enter_number_error').text('Please Enter Big Number');
                    x = 2;
                }
            } else {
                if (enter_number_error != two_number) {
                    $('#enter_number_error').show();
                    $('#enter_number_error').text('');
                    $('#enter_number_error').text('Please Enter Big Number');
                    x = 2;
                }
            }

            if (x == 2) {
                return false;
            }

            $('#submitForm').submit();

        });
    </script>
    <script src="http://code.jivosite.com/widget/aVH5YN7CUx" async></script>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $("#searchNames1").keyup(function (event) {
                if (event.keyCode === 13) {
                    $("#univercity1").click();
                }
            });

            $('#univercity1').click(function () {
                //alert($('#show_name_student').val());
                if ($('#show_name_student1').val() == '') {
                    return false;
                }
                location.href = "https://www.getmyuniversity.com/university" + '/' + $('#show_name_student1').val();
            });


        });


    </script>



    <script>
        $(document).ready(function () {
            $('#searchNames1').keypress(function () {
                setTimeout(function () {
                    var dInput = $('#searchNames1').val();
                    //alert(dInput);
                    $.ajax({
                        type: 'get',
                        url: "https://www.getmyuniversity.com/ajax_seach_application",
                        data: { dInput: dInput },
                        success: function (response) {
                            $('#search_datas1').show();
                            $('#search_datas1').html('');
                            $('#search_datas1').html(response);
                            $('#primary_email_error1').hide();

                            $('#search_datas1 li').click(function () {
                                //alert('hello');
                                $('#searchNames1').val($(this).text());
                                $('#search_student_ids1').val($(this).data('id'));
                                $('#show_id_student1').text($(this).data('ida'));
                                $('#show_name_student1').val($(this).data('name'));
                                $('#search_datas1').hide();
                                $('#search_datas1').html('');
                            });
                        },
                        error: function (response) {
                            //$("#LoadingImage").hide();
                            //alert("Error");
                            //var NewSTIEURL = STIEURL+'/ajax_model_type';
                        }
                    });
                }, 10);
            }).on('keydown', function (e) {
                if (e.keyCode == 8) {
                    setTimeout(function () {
                        var dInput = $('#searchNames1').val();
                        //alert(dInput);
                        $.ajax({
                            type: 'get',
                            url: "https://www.getmyuniversity.com/ajax_seach_application",
                            data: { dInput: dInput },
                            success: function (response) {
                                $('#search_datas1').html('');
                                $('#search_datas1').html(response);
                                $('#primary_email_error1').hide();

                                $('#search_datas1 li').click(function () {
                                    $('#searchNames1').val($(this).text());
                                    $('#search_student_ids1').val($(this).data('id'));
                                    $('#show_name_student1').val($(this).data('name'));
                                    $('#search_datas1').hide();
                                    $('#search_datas1').html('');
                                });
                            },
                            error: function (response) {
                                //$("#LoadingImage").hide();
                                //alert("Error");
                                //var NewSTIEURL = STIEURL+'/ajax_model_type';
                            }
                        });
                    }, 10);
                }
            });

        });
    </script>


    <script>
        $(document).ready(function () {
            $('#searchNames22').keypress(function () {
                setTimeout(function () {
                    var dInput = $('#searchNames22').val();
                    //alert(dInput);
                    $.ajax({
                        type: 'get',
                        url: "https://www.getmyuniversity.com/ajax_seach_application2",
                        data: { dInput: dInput },
                        success: function (response) {
                            $('#search_datas22').show();
                            $('#search_datas22').html('');
                            $('#search_datas22').html(response);
                            $('#primary_email_error22').hide();

                            $('#search_datas22 li').click(function () {
                                //alert('hello');
                                $('#searchNames22').val($(this).text());
                                $('#search_student_ids22').val($(this).data('id'));
                                $('#show_id_student22').text($(this).data('ida'));
                                $('#show_name_student22').val($(this).data('name'));
                                $('#search_datas22').hide();
                                $('#search_datas22').html('');
                            });
                        },
                        error: function (response) {
                            //$("#LoadingImage").hide();
                            //alert("Error");
                            //var NewSTIEURL = STIEURL+'/ajax_model_type';
                        }
                    });
                }, 10);
            }).on('keydown', function (e) {
                if (e.keyCode == 8) {
                    setTimeout(function () {
                        var dInput = $('#searchNames22').val();
                        //alert(dInput);
                        $.ajax({
                            type: 'get',
                            url: "https://www.getmyuniversity.com/ajax_seach_application2",
                            data: { dInput: dInput },
                            success: function (response) {
                                $('#search_datas22').html('');
                                $('#search_datas22').html(response);
                                $('#primary_email_error22').hide();

                                $('#search_datas22 li').click(function () {
                                    $('#searchNames22').val($(this).text());
                                    $('#search_student_ids22').val($(this).data('id'));
                                    $('#c22').val($(this).data('name'));
                                    $('#search_datas22').hide();
                                    $('#search_datas22').html('');
                                });
                            },
                            error: function (response) {
                                //$("#LoadingImage").hide();
                                //alert("Error");
                                //var NewSTIEURL = STIEURL+'/ajax_model_type';
                            }
                        });
                    }, 10);
                }
            });

        });
    </script>
</body>

<!-- Mirrored from www.getmyuniversity.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Sep 2023 12:00:49 GMT -->

</html>



</body>

</html>