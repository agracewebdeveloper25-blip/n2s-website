<!DOCTYPE html>
<html lang="en">

<?php 
    $css = '<link href="assets/css/style.css" rel="stylesheet">';
    $title = 'Team Details';
    $subTitle = 'Team Details';
    $script2 = '<script src="assets/js/jquery.validate.min.js"></script>
                <script src="assets/js/jquery.form.min.js"></script>
                <script>
                    (function($) {
                        $("#contact_form").validate({
                            submitHandler: function(form) {
                                var form_btn = $(form).find("button[type=\'submit\']");
                                var form_result_div = "#form-result";
                                $(form_result_div).remove();
                                form_btn.before(\'<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>\');
                                
                                var form_btn_old_msg = form_btn.html();
                                form_btn.prop("disabled", true).html(form_btn.data("loading-text"));
                                
                                $(form).ajaxSubmit({
                                    dataType: "json",
                                    success: function(data) {
                                        if (data.status === "true") {
                                            $(form).find(".form-control").val("");
                                            $(form_result_div).removeClass("alert-danger").addClass("alert-success");
                                        } else {
                                            $(form_result_div).removeClass("alert-success").addClass("alert-danger");
                                        }
                                        form_btn.prop("disabled", false).html(form_btn_old_msg);
                                        $(form_result_div).html(data.message).fadeIn("slow");
                                        setTimeout(function() {
                                            $(form_result_div).fadeOut("slow");
                                        }, 6000);
                                    }
                                });
                            }
                        });
                    })(jQuery);
                </script>';
?>
<?php include './layout/layout-top.php'?>

        <!--Team Details Start-->
        <section class="team-details">
            <div class="container pb-100">
                <div class="team-details__top pb-70">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__top-left">
                                <div class="team-details__top-img"> <img src="assets/images/resource/team-details.jpg" alt="">
                                    <div class="team-details__big-text"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__top-right">
                                <div class="team-details__top-content">
                                    <h3 class="team-details__top-name">Aleesha Brown</h3>
                                    <p class="team-details__top-title">Managing Director & CEO</p>
                                    <div class="team-details__social"> <a href="#"><i class="fab fa-twitter"></i></a> <a href="#"><i class="fab fa-facebook"></i></a> <a href="#"><i class="fab fa-pinterest-p"></i></a> <a href="#"><i class="fab fa-instagram"></i></a> </div>
                                    <p class="team-details__top-text-1">I help my clients stand out and <br> they help me grow.</p>
                                    <p class="team-details__top-text-3">Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae </p>
                                    <p class="team-details__top-text-2">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries architecto</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="team-details__bottom pt-100">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__bottom-left">
                                <h4 class="team-details__bottom-left-title">Personal Experience</h4>
                                <p class="team-details__bottom-left-text">When an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries architecto dolorem ipsum quia</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="team-details__bottom-right">
                                <div class="team-details__progress">
                                    <div class="team-details__progress-single">
                                        <h4 class="team-details__progress-title">Tecnology</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="90%">
                                                <div class="count-text">90%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-details__progress-single">
                                        <h4 class="team-details__progress-title">Marketing</h4>
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="80%">
                                                <div class="count-text">80%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="team-details__progress-single">
                                        <h4 class="team-details__progress-title">Business</h4>
                                        <div class="bar marb-0">
                                            <div class="bar-inner count-bar" data-percent="75%">
                                                <div class="count-text">75%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Team Details End-->

        <!--Contact Details Start-->
        <section class="team-contact-form">
            <div class="container pb-100">
                <div class="sec-title text-center">
                    <span class="sub-title">Contact With Us Now</span>
                    <h2 class="section-title__title">Feel Free to Write Our <br> Tecnology Experts</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <!-- Contact Form -->
                        <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input name="form_name" class="form-control" type="text" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <input name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <textarea name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                            </div>
                            <div class="mb-3 text-center">
                                <input name="form_botcheck" class="form-control" type="hidden" value="" />
                                <button type="submit" class="theme-btn btn-style-one" data-loading-text="Please wait..."><span class="btn-title">Send message</span></button>
                                <button type="reset" class="theme-btn btn-style-one"><span class="btn-title">Reset</span></button>
                            </div>
                        </form>
                        <!-- Contact Form Validation-->
                    </div>
                </div>
            </div>
        </section>
        <!--Contact Details End-->

<?php include './layout/layout-bottom.php'?>