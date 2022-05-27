<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>pillloMart</title>
    <link rel="icon" href="<?= base_url() ?>/template/assets2/img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets2/css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets2/css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets2/css/owl.carousel.min.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets2/css/all.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets2/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets2/css/themify-icons.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets2/css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets2/css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/assets2/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <?= $this->include('halutama/header') ?>

    <!-- Header part end-->

    <!-- breadcrumb part start-->
    <section class="breadcrumb_part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <h2>login</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb part end-->

    <!--================login_part Area =================-->
    <section class="login_part section_padding ">
        <?php if (session()->getFlashdata('error')) { ?>
            <div align="center" class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
        <?php } ?>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="<?php echo base_url('auth/register') ?>" class="btn_3">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br>
                                Please Sign in now</h3>
                            <form class="row contact_form" action="<?php echo site_url('auth/ak_login') ?>" method="POST" novalidate="novalidate">
                                <div class="col-md-12 form-group p_star">
                                    <input type="text" class="form-control" id="username" name="username" value="" placeholder="Username" value="<?php echo session()->getFlashdata('username') ?>">
                                </div>
                                <div class="col-md-12 form-group p_star">
                                    <input type="password" class="form-control" id="password" name="password" value="" placeholder="Password">
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Remember me</label>
                                    </div>
                                    <button id="form_submit" type="submit" name="submit" value="submit" class="btn_3">
                                        log in
                                    </button>
                                    <a class="lost_pass" href="#">forget password?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================login_part end =================-->

    <!--::footer_part start::-->
    <footer class="footer_part">
        <div class="footer_iner section_bg">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-lg-8">
                        <div class="footer_menu">
                            <div class="footer_logo">
                                <a href="index.html"><img src="<?= base_url() ?>/template/assets2/img/logo.png" alt="#"></a>
                            </div>
                            <div class="footer_menu_item">
                                <a href="index.html">Home</a>
                                <a href="about.html">About</a>
                                <a href="product_list.html">Products</a>
                                <a href="#">Pages</a>
                                <a href="blog.html">Blog</a>
                                <a href="contact.html">Contact</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="social_icon">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="copyright_part">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-12">
                        <div class="copyright_text">
                            <P>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank"></a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </P>
                            <div class="copyright_link">
                                <a href="#">Turms & Conditions</a>
                                <a href="#">FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--::footer_part end::-->

    <!-- jquery plugins here-->
    <script src="<?= base_url() ?>/template/assets2/js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="<?= base_url() ?>/template/assets2/js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="<?= base_url() ?>/template/assets2/js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="<?= base_url() ?>/template/assets2/js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url() ?>/template/assets2/js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="<?= base_url() ?>/template/assets2/js/mixitup.min.js"></script>
    <!-- particles js -->
    <script src="<?= base_url() ?>/template/assets2/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/template/assets2/js/jquery.nice-select.min.js"></script>
    <!-- slick js -->
    <script src="<?= base_url() ?>/template/assets2/js/slick.min.js"></script>
    <script src="<?= base_url() ?>/template/assets2/js/jquery.counterup.min.js"></script>
    <script src="<?= base_url() ?>/template/assets2/js/waypoints.min.js"></script>
    <script src="<?= base_url() ?>/template/assets2/js/contact.js"></script>
    <script src="<?= base_url() ?>/template/assets2/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url() ?>/template/assets2/js/jquery.form.js"></script>
    <script src="<?= base_url() ?>/template/assets2/js/jquery.validate.min.js"></script>
    <script src="<?= base_url() ?>/template/assets2/js/mail-script.js"></script>
    <!-- custom js -->
    <script src="<?= base_url() ?>/template/assets2/js/custom.js"></script>
</body>

</html>