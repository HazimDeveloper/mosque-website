<?php 
session_start();
include 'config.php';

$masjid = mysqli_query($connect,"SELECT * FROM masjid"); 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Masjid</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Masjid" name="keywords">
        <meta content="Masjid" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="css-dropdown/bootstrap.min.css" rel="stylesheet">	
	    <script src="js-dropdown/jquery.js"></script>
    <script src="js-dropdown/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top Bar Start -->
          <div class="top-bar d-none d-md-block" style="background-color:#20212B">
            <div class="container-fluid">
                <div class="row">
                     <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p>+6018-2069623
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p>nabilahmisha@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->


        <?php include('index2.php') ?>
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Tentang Kami</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Utama</a>
                        <a href="">Tentang Kami</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" >
                        <div class="about-img" data-parallax="scroll" data-image-src="img/masjid.jpg"></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>Masjid</p>
                            <h2>Pengenalan Tentang Kami</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">Pengenalan</a>
                                </li> 
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Misi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Visi</a>
                                </li>
                            </ul>

                            <div class="tab-content" >
                                <div id="tab-content-1" style="width: 100%;" class="container tab-pane active">
                                   <br> Masjid (مسجد) ialah perkataan bahasa Arab yang bermaksud tempat sujud. 
                                   <br> Masjid ialah tempat beribadat yang khusus, seperti solat dan iktikaf, bagi orang Islam. 
                                   <br> Bangunan ini juga merupakan pusat kebudayaan, muamalat,
                                   <br> dan perkembangan dakwah Islamiah, serta pusat aktiviti umat Islam. 
                                   <br> Masjid tidak mempunyai rupa bentuk yang tetap, 
                                   <br>tetapi bergantung kepada budaya masyarakat Islam setempat. </br>
								   <br> Sejak zaman permulaan Islam lagi (Rasulullah s.a.w.), kemajuan umat dan 
                                   <br> gerakan Islam semuanya bermula dari masjid. 
                                    <br> Masjid telah dijadikan sebagai tempat untuk berkumpul, berbincang dan 
                                    <br> merancang strategi yang tidak terhad kepada bidang dakwah malah perdagangan, perundangan,
                                    <br> dan penyebaran ilmu, serta pelbagai lagi. </br>
								   <br> - Website ini dibina untuk memudahkan masyarakat untuk 
                                   <br> memperoleh informasi dengan lebih detail tentang masjid masjid yang dibina di sekitar kita.
								   </div>
                                <div id="tab-content-2" class="container tab-pane fade" style="width: 100%;" >
                                   <br> - Melaksanakan pengurusan dan pentadbiran 
                                   <br> masjid yang cekap dan berhemah.</br>
                                  <br> - Membangunkan keperibadian ummah dan institusi masjid 
                                  <br> berdasarkan akidah, syariah dan akhlak Islamiah melalui pelbagai aktiviti.</br>
                                   <br>- Menyediakan kelengkapan untuk kemudahan jemaah beribadah,
                                   <br> mewujudkan dan memperbanyakkan aktiviti keilmuan ke arah melahirkan masyarakat yang bertaqwa.</br>
								   </div>
                                <div id="tab-content-3" class="container tab-pane fade" style="width: 100%;">
                                    Berperanan sebagai pusat ibadah dan perkembangan ilmu bagi 
                                   <br> membentuk masyarakat berilmu, beriman dan beramal soleh serta 
                                   <br> berupaya menghindarkan diri daripada gejala sosial bagi melahirkan ummah yang bertaqwa.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
        <!-- About End -->
        
    

               <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
						
						 <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Pautan Pantas</h2>
                            <a href="">Berita</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
					
					<div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Hubungi Kami</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Universiti Teknologi MARA Cawangan Terengganu Kampus Kuala Terengganu 21080 Kuala Terengganu, Terengganu Darul Iman</p>
                            <p><i class="fa fa-phone-alt"></i>+6018-2069623</p>
                            <p><i class="fa fa-envelope"></i>nabilahmisha@gmail</p>
                            <div class="footer-social">
                                <a class="btn btn-custom" href="https://twitter.com/uitmofficial?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href="https://www.facebook.com/uitmrasmi/"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-custom" href="https://www.instagram.com/uitm.official/?hl=en&__coig_restricted=1"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-custom" href="https://www.linkedin.com/school/universiti-teknologi-mara/?originalSubdomain=my"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                  
                    </div>
                    
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a>Misha Nabilah</a></p>
                    </div>
                </div>
            </div>
        <!-- Footer End -->
        
        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
