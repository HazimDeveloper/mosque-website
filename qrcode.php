<!DOCTYPE html>
<html>
<head>
	<title>QR Code Register</title>
    
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="css-dropdown/bootstrap.min.css" rel="stylesheet">	
    <link rel="stylesheet" href="css/style.css">
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
        //   window.parent.postMessage( iframe_height, 'http://bootsnipp.com');
        });
    </script>
</head>
<style>
    body{
        background-color: #20212B;
    }
</style>
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

<h1 style="color:white;position: absolute;top:200px;left:250px">You Cannot Join Activity , Please Scan Qr To Register</h1>
<div style="display:flex;justify-content:center;position:relative;top:300px">
        <canvas id="canvas" width="300px" height="300px"></canvas>
       
    </div>
    <script src="node_modules/qrcode/build/qrcode.js"></script>
<script>

let canvas = document.getElementById("canvas");
    QRCode.toCanvas(canvas, 'http://localhost/backup2/masjid/register_form.php', (err) => {
        if(err) console.error(err)

    })

</script>
</body>
</html>
