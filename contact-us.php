<?php
 require_once("sendemail.php");
 $sendEmail = new SendEMail();
?>

<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7"><![endif]-->
<!--[if IE 8]><html class="ie ie8"><![endif]-->
<!--[if IE 9]><html class="ie ie9"><![endif]-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="valorantlogo1.png" rel="icon">
    <meta name="author" content="Nguyễn Vương Ngọc Sang">
    <meta name="keywords" content="Default Description">
    <meta name="description" content="Default keyword">
    <title>SKT - Trang chủ</title>
    <!-- Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow:300,400,700%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="plugins/ps-icon/style.css">
    <!-- CSS Library-->
    <link rel="stylesheet" href="plugins/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/owl-carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css">
    <link rel="stylesheet" href="plugins/slick/slick/slick.css">
    <link rel="stylesheet" href="plugins/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="plugins/Magnific-Popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" href="plugins/revolution/css/settings.css">
    <link rel="stylesheet" href="plugins/revolution/css/layers.css">
    <link rel="stylesheet" href="plugins/revolution/css/navigation.css">
    <!-- Custom-->
    <link rel="stylesheet" href="css/style.css">
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!--WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <!--[if IE 7]><body class="ie7 lt-ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 8]><body class="ie8 lt-ie9 lt-ie10"><![endif]-->
  <!--[if IE 9]><body class="ie9 lt-ie10"><![endif]-->
  <body class="ps-loading">
    <div class="header--sidebar"></div>
    <header class="header">
      <div class="header__top">
        <div class="container-fluid">
        <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-6 col-xs-12 ">
                  <p>181 đường số 20,Quận 1, tòa nhà blindbox tầng 21  -  Hotline: +026-333-3333 - +026-777-7777</p>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-6 col-xs-12 ">
                  
                </div>
          </div>
        </div>
      </div>
      <nav class="navigation">
        <div class="container-fluid">
          <div class="navigation__column left">
            <div class="header__logo"><a class="ps-logo" href="index.php"><img src="images/logo.png" alt=""></a></div>
          </div>
          <div class="navigation__column center">
                <ul class="main-menu menu">
                  <li class="menu-item menu-item-has-children dropdown"><a href="index.php">Trang chủ</a>
                  </li>
                  <li class="menu-item menu-item-has-children has-mega-menu"><a href="#">Men</a>
                    
                  </li>
                  <li class="menu-item"><a href="#">Women</a></li>
                  <li class="menu-item"><a href="#">Kids</a></li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="#">brands</a>
                        <ul class="sub-menu">
                          <li class="menu-item menu-item-has-children dropdown"><a href="blog-grid.php">Adidas</a>
                                <ul class="sub-menu">
                                  <li class="menu-item"><a href="blog-grid.php">Sneaker</a></li>
                                  <li class="menu-item"><a href="blog-grid-2.php">Giay the thao</a></li>
                                  <li class="menu-item"><a href="blog-grid-2.php">dep</a></li>
                                  <li class="menu-item"><a href="blog-grid-2.php">giay chay bo</a></li>
                                </ul>
                          </li>
                          <li class="menu-item"><a href="blog-list.php">Nike</a></li>
                        </ul>
                  </li>
                  <li class="menu-item menu-item-has-children dropdown"><a href="contact-us.php">Liên Hệ</a>
                  </li>
                </ul>
          </div>
          <div class="navigation__column right">
            <form class="ps-search--header" action="do_action" method="post">
              <input class="form-control" type="text" placeholder="Search Product…">
              <button><i class="ps-icon-search"></i></button>
            </form>
            <div class="ps-cart"><a class="ps-cart__toggle" href="#"><span><i>20</i></span><i class="ps-icon-shopping-cart"></i></a>
            <?php require_once("formCart.php") ?>
            </div>
            <div class="menu-toggle"><span></span></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="header-services">
      <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Giao Hàng Miễn Phí</strong>: Liên hệ ngay để nhận được những ưu đãi khi mua hàng tại SKT store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Giao Hàng Miễn Phí</strong>: Liên hệ ngay để nhận được những ưu đãi khi mua hàng tại SKT store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Giao Hàng Miễn Phí</strong>: Liên hệ ngay để nhận được những ưu đãi khi mua hàng tại SKT store</p>
      </div>
    </div>
    <main class="ps-main">
      <div class="ps-contact ps-section pb-80">
        <div id="contact-map" data-address="New York, NY" data-title="Sky Store!" data-zoom="17"></div>
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <div class="ps-section__header mb-50">
                    <h2 class="ps-section__title" data-mask="Contact">- Bạn cần liên hệ</h2>
                    <form class="ps-contact__form" action="" method="post">
                      <div class="row">   
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                              <div class="form-group">
                                <label>Tên <sub>*</sub></label>
                                <input name="name" class="form-control" type="text" placeholder="">
                              </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                              <div class="form-group">
                                <label>Email <sub>*</sub></label>
                                <input name="email" class="form-control" type="email" placeholder="">
                              </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                              <div class="form-group mb-25">
                                <label>Ghi chú <sub>*</sub></label>
                                <textarea name="content" class="form-control" rows="6"></textarea>
                              </div>
                              <div class="form-group">
                                <button name="send_email" class="ps-btn"> Gửi <i class="ps-icon-next"></i></button>
                              </div>
                            </div>
                      </div>
                      <?php
                        if(isset($_POST['send_email']))
                          $sendEmail->send($_POST['name'],$_POST['email'],"Xin Chào",$_POST['content']);
                      ?>
                    </form>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                  <div class="ps-section__content">
                    <div class="row">
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="ps-contact__block" data-mh="contact-block">
                              <header>
                                <h3>Việt Nam <span> Hồ Chí Minh</span></h3>
                              </header>
                              <footer>
                                <p><i class="fa fa-map-marker"></i> 12 Nguyễn Huệ, quận 1, TP Hồ Chí Minh</p>
                                <p><i class="fa fa-envelope-o"></i><a href="nguyenvuongngocsang11321@gmail.com">nguyenvuongngocsang11321@gmail.com</a></p>
                                <p><i class="fa fa-phone"></i> ( +84 ) 9892 2324  -  9401 123 003</p>
                              </footer>
                            </div>
                          </div>
                          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                            <div class="ps-contact__block" data-mh="contact-block">
                              <header>
                                <h3>Việt Nam<span> Hồ Chí Minh</span></h3>
                              </header>
                              <footer>
                                <p><i class="fa fa-map-marker"></i>Tòa nhà landmark, Tầng 15, Hồ Chí Minh</p>
                                <p><i class="fa fa-envelope-o"></i><a href="nguyenvuongngocsang11321@gmail.com">nguyenvuongngocsang11321@gmail.com</a></p>
                                <p><i class="fa fa-phone"></i> ( +84 ) 9892 2324  -  9401 123 003</p>
                              </footer>
                            </div>
                          </div>
                         
                    </div>
                  </div>
                </div>
          </div>
        </div>
      </div>
      <div class="ps-subscribe">
        <div class="ps-container">
          <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
                  <h3><i class="fa fa-envelope"></i>Bạn chưa có tài khoản? Đăng kí ngay để được nhận ưu đãi</h3>
                </div>
                <div class="col-lg-5 col-md-7 col-sm-12 col-xs-12 ">
                  <form class="ps-subscribe__form" action="do_action" method="post">
                    <input class="form-control" type="text" placeholder="">
                    <button>Đăng kí Ngay</button>
                  </form>
                </div>
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 ">
                  <p>...bạn có thể được nhận   <span>$20</span>  voucher giảm giá khi mua tại cửa hàng.</p>
                </div>
          </div>
        </div>
      </div>
      <div class="ps-footer bg--cover" data-background="images/banner/818af675da94b1f522a50aad87a6c091.jpg">
        <div class="ps-footer__content">
          <div class="ps-container">
            <div class="row">
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info">
                      <header><a class="ps-logo" href="index.php"><img src="images/logo-white.png" alt=""></a>
                        <h3 class="ps-widget__title">12 Nguyễn Huệ, quận 1, TP Hồ Chí Minh</h3>
                      </header>
                      <footer>
                        <p><strong>Tòa nhà landmark, Tầng 15, Hồ Chí Minh<</strong></p>
                        <p>Email: <a href='mailto:nguyenvuongngocsang11321@gmail.com'>nguyenvuongngocsang11321@gmail.com</a></p>
                        <p>Phone: +026-333-3333</p>
                      </footer>
                    </aside>
                  </div>
                  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 ">
                    <aside class="ps-widget--footer ps-widget--info second">
                      <header>
                        <h3 class="ps-widget__title">13 Phan Văn Trị, quận Gò Vấp,TP Hồ Chí Minh</h3>
                      </header>
                      <footer>
                        <p><strong>Biệt thự số 7 khu city land</strong></p>
                        <p>Email: <a href='mailto:nguyenvuongngocsang11321@gmail.com'>nguyenvuongngocsang11321@gmail.com</a></p>
                        <p>Phone: +026-333-3333</p>
                      </footer>
                    </aside>
                  </div>
            </div>
          </div>
        </div>
        <div class="ps-footer__copyright">
          <div class="ps-container">
            <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <p>&copy; <a href="#">SKT</a>, Inc. Đã đăng kí bản quyền. Thiết kế bởi <a href="#"> Sang Béo</a></p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
                    <ul class="ps-social">
                      <li><a href="https://www.facebook.com/profile.php?id=100038802183933"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="https://www.instagram.com/_thanhha.272/?fbclid=IwAR2zd30aHRujXvBw1hyB6CsO6GD5WcRibUSW5wzsbEKeqcfpQAluRyxUaMI"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- JS Library-->
    <script type="text/javascript" src="plugins/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-bar-rating/dist/jquery.barrating.min.js"></script>
    <script type="text/javascript" src="plugins/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="plugins/gmap3.min.js"></script>
    <script type="text/javascript" src="plugins/imagesloaded.pkgd.js"></script>
    <script type="text/javascript" src="plugins/isotope.pkgd.min.js"></script>
    <script type="text/javascript" src="plugins/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script type="text/javascript" src="plugins/jquery.matchHeight-min.js"></script>
    <script type="text/javascript" src="plugins/slick/slick/slick.min.js"></script>
    <script type="text/javascript" src="plugins/elevatezoom/jquery.elevatezoom.js"></script>
    <script type="text/javascript" src="plugins/Magnific-Popup/dist/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAx39JFH5nhxze1ZydH-Kl8xXM3OK4fvcg&amp;region=GB"></script><script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <!-- Custom scripts-->
    <script type="text/javascript" src="js/main.js"></script>
  </body>
</html>