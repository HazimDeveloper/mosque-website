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
               <div class="top-bar d-none d-md-block " style="background: rgba(0, 0, 0, 0.0);">
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


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/masjid.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Masjid</h1>
                            <p>
                              Masjid ialah tempat beribadat yang khusus, seperti solat dan iktikaf, bagi orang Islam. 
                            </p>
                           
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/masjid2.jpg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h1>Sertai Kami</h1>
                            <p>
                             Untuk membina masjid sebagai tempat untuk berkumpul, berbincang dan merancang strategi yang tidak terhad kepada bidang dakwah malah perdagangan, perundangan, dan penyebaran ilmu.
                            </p>
                            
                    </div>
                   
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        
  

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
        <!-- <script src="mail/jqBootstrapValidation.min.js"></script> -->
        <!-- <script src="mail/contact.js"></script> -->

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
