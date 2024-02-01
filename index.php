
<!doctype html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Overseas Education Consultants in India, Study Abroad Consultant</title>
    <meta name="title" content="Overseas Education Consultants in India, Study Abroad Consultant">
    <meta name="keyword" content="overseas education consultants">
    <meta name="description" content="Planning to Study Abroad 2022-23? Best Overseas Education Consultants in India, we guide students to study in the UK, Australia, Canada, USA & New Zealand.">
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
    <link rel="preload" href="css/font-awesome.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" >
    <noscript><link rel="stylesheet" href="css/font-awesome.min.css" ></noscript>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <link rel="stylesheet" href="css/style.css" media="all" >

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
<!-- <script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-8NBEX89NHQ');
</script> -->
<style>
    *{
        margin: 0;
        padding: 0;
    }
</style>
</head>
<body>

    <?php
include './Components/navbar.php';
include './Components/Heroindex.php';
include './Components/AdmissionCounselling.php';
include './Components/RecommendedColleges.php';
include './Components/MBBSAbroad.php';
include './Components/RightStudent.php';
include './Components/AboutSection.php';
include './Components/OurServices.php';
include './Components/aboutPic.php';
include './Components/testimonial.php';
include './Components/Blog.php';
include './Components/FormSupport.php';
include './Components/OurProgress.php';
include './Components/Footer.php';
?>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript">
        jQuery(document).ready(function($){
            $("#searchNames").keyup(function(event) {
                if (event.keyCode === 13) {
                    $("#univercity").click();
                }
            });
            // $("#searchNames1").keyup(function(event) {
            //     if (event.keyCode === 13) {
            //         $("#univercity1").click();
            //     }
            // });
        $('#univercity').click(function(){
            //alert($('#show_name_student').val());
            if($('#show_name_student').val() == ''){
                return false;
            }
            location.href = "https://www.getmyuniversity.com/university"+'/'+$('#show_name_student').val();
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
            responsiveClass:true,
            responsive:{
                0:{
                    items: 1,
                    nav: false,
                },
                768:{
                    items: 2,
                    nav: false,
                },
                1000:{
                    items: 3,
                    nav: true,
                }
            }
          });




          $(".rvBox").slice(0,4).show();
          $("#moreVideo").click(function(e){
            e.preventDefault();
            $(".rvBox:hidden").slice(0,4).fadeIn("slow");

            if($(".rvBox:hidden").length == 0){
              $("#moreVideo").fadeOut("slow");
              }
          });



    });


  </script>

  <script>
            $(document).ready(function() {
                $('#searchNames').keypress(function() {
                    setTimeout(function() {
                      var dInput = $('#searchNames').val();
                      //alert(dInput);
                      $.ajax({
                            type: 'get',
                            url: "https://www.getmyuniversity.com/ajax_seach_application",
                            data: {dInput:dInput},
                            success: function (response) {
                                $('#search_datas').show();
                                $('#search_datas').html('');
                                $('#search_datas').html(response);
                                $('#primary_email_error').hide();

                                $('#search_datas li').click(function() {
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
                }).on('keydown', function(e) {
                    if (e.keyCode==8){
                        setTimeout(function() {
                      var dInput = $('#searchNames').val();
                      //alert(dInput);
                      $.ajax({
                            type: 'get',
                            url: "https://www.getmyuniversity.com/ajax_seach_application",
                            data: {dInput:dInput},
                            success: function (response) {
                                $('#search_datas').html('');
                                $('#search_datas').html(response);
                                $('#primary_email_error').hide();

                                $('#search_datas li').click(function() {
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
            $(document).ready(function() {
                $('#searchNames2').keypress(function() {
                    setTimeout(function() {
                      var dInput = $('#searchNames2').val();
                      //alert(dInput);
                      $.ajax({
                            type: 'get',
                            url: "https://www.getmyuniversity.com/ajax_seach_application2",
                            data: {dInput:dInput},
                            success: function (response) {
                                $('#search_datas2').show();
                                $('#search_datas2').html('');
                                $('#search_datas2').html(response);
                                $('#primary_email_error2').hide();

                                $('#search_datas2 li').click(function() {
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
                }).on('keydown', function(e) {
                    if (e.keyCode==8){
                        setTimeout(function() {
                      var dInput = $('#searchNames2').val();
                      //alert(dInput);
                      $.ajax({
                            type: 'get',
                            url: "https://www.getmyuniversity.com/ajax_seach_application2",
                            data: {dInput:dInput},
                            success: function (response) {
                                $('#search_datas2').html('');
                                $('#search_datas2').html(response);
                                $('#primary_email_error2').hide();

                                $('#search_datas2 li').click(function() {
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
            $(document).ready(function() {
                $('#searchNames22').keypress(function() {
                    setTimeout(function() {
                      var dInput = $('#searchNames22').val();
                      //alert(dInput);
                      $.ajax({
                            type: 'get',
                            url: "https://www.getmyuniversity.com/ajax_seach_application2",
                            data: {dInput:dInput},
                            success: function (response) {
                                $('#search_datas22').show();
                                $('#search_datas22').html('');
                                $('#search_datas22').html(response);
                                $('#primary_email_error22').hide();

                                $('#search_datas22 li').click(function() {
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
                }).on('keydown', function(e) {
                    if (e.keyCode==8){
                        setTimeout(function() {
                      var dInput = $('#searchNames22').val();
                      //alert(dInput);
                      $.ajax({
                            type: 'get',
                            url: "https://www.getmyuniversity.com/ajax_seach_application2",
                            data: {dInput:dInput},
                            success: function (response) {
                                $('#search_datas22').html('');
                                $('#search_datas22').html(response);
                                $('#primary_email_error22').hide();

                                $('#search_datas22 li').click(function() {
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
        $("#submitQuery").click(function(){
            // /alert('hello');
            var x = 1;
            $('.error').hide();
            var name = $('#name').val();
            if(name == ''){
                $('#name_error').show();
                x = 2;
            }
            var number = $('#number').val();
            if(number == ''){
                $('#number_error').show();
                x = 2;
            }
            var email = $('#email').val();
            if(email == ''){
                $('#email_error').show();
                x = 2;
            }
            var message = $('#message').val();
            if(message == ''){
                $('#message_error').show();
                x = 2;
            }
            var enter_number_error = $('#enter_number').val();
            if(enter_number_error == ''){
                $('#enter_number_error').show();
                $('#enter_number_error').text('');
                $('#enter_number_error').text('Please Enter Big Number');
                x = 2;
            }

            var one_number = $('#one_number').val();
            var two_number = $('#two_number').val();
            if(one_number > two_number){
                if(enter_number_error != one_number){
                    $('#enter_number_error').show();
                    $('#enter_number_error').text('');
                    $('#enter_number_error').text('Please Enter Big Number');
                    x = 2;
                }
            }else{
                if(enter_number_error != two_number){
                    $('#enter_number_error').show();
                    $('#enter_number_error').text('');
                    $('#enter_number_error').text('Please Enter Big Number');
                    x = 2;
                }
            }

            if(x == 2){
                return false;
            }

            $('#submitForm').submit();

        });
    </script>
  <script src="http://code.jivosite.com/widget/aVH5YN7CUx" async></script>

  <script type="text/javascript">
        jQuery(document).ready(function($){
            $("#searchNames1").keyup(function(event) {
                if (event.keyCode === 13) {
                    $("#univercity1").click();
                }
            });

        $('#univercity1').click(function(){
            //alert($('#show_name_student').val());
            if($('#show_name_student1').val() == ''){
                return false;
            }
            location.href = "https://www.getmyuniversity.com/university"+'/'+$('#show_name_student1').val();
        });


    });
</script>
<script>
        $(document).ready(function() {
            $('#searchNames1').keypress(function() {
                setTimeout(function() {
                   var dInput = $('#searchNames1').val();
                   //alert(dInput);
                   $.ajax({
                        type: 'get',
                        url: "https://www.getmyuniversity.com/ajax_seach_application",
                        data: {dInput:dInput},
                        success: function (response) {
                            $('#search_datas1').show();
                            $('#search_datas1').html('');
                            $('#search_datas1').html(response);
                            $('#primary_email_error1').hide();

                            $('#search_datas1 li').click(function() {
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
            }).on('keydown', function(e) {
                if (e.keyCode==8){
                    setTimeout(function() {
                   var dInput = $('#searchNames1').val();
                   //alert(dInput);
                   $.ajax({
                        type: 'get',
                        url: "https://www.getmyuniversity.com/ajax_seach_application",
                        data: {dInput:dInput},
                        success: function (response) {
                            $('#search_datas1').html('');
                            $('#search_datas1').html(response);
                            $('#primary_email_error1').hide();

                            $('#search_datas1 li').click(function() {
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
        $(document).ready(function() {
            $('#searchNames22').keypress(function() {
                setTimeout(function() {
                  var dInput = $('#searchNames22').val();
                  //alert(dInput);
                  $.ajax({
                        type: 'get',
                        url: "https://www.getmyuniversity.com/ajax_seach_application2",
                        data: {dInput:dInput},
                        success: function (response) {
                            $('#search_datas22').show();
                            $('#search_datas22').html('');
                            $('#search_datas22').html(response);
                            $('#primary_email_error22').hide();

                            $('#search_datas22 li').click(function() {
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
            }).on('keydown', function(e) {
                if (e.keyCode==8){
                    setTimeout(function() {
                  var dInput = $('#searchNames22').val();
                  //alert(dInput);
                  $.ajax({
                        type: 'get',
                        url: "https://www.getmyuniversity.com/ajax_seach_application2",
                        data: {dInput:dInput},
                        success: function (response) {
                            $('#search_datas22').html('');
                            $('#search_datas22').html(response);
                            $('#primary_email_error22').hide();

                            $('#search_datas22 li').click(function() {
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
</html>
