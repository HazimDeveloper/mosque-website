
<?php 
session_start();
include 'config.php';

$status =0;

$name = $_SESSION['user_name'];
$select_user = mysqli_query($connect,"SELECT * FROM user_form WHERE name = '$name'");
$data_user = mysqli_fetch_assoc($select_user);

$masjid = mysqli_query($connect,"SELECT * FROM masjid"); 
if(isset($_POST['submit'])){

   $id =  $data_user['id'];
//    echo "<script>alert('$id')</script>";
    $name = $_POST['name'];
    $email = $_POST['email'];
	$event = $_POST['event'];
    $describe = $_POST['describe'];
	$location = $_POST['location'];
	$daerah = $_POST['daerah'];
  
    $insert_volunteer = mysqli_query($connect,"INSERT INTO `volunteer_user`(`id_user`, `name`, `email`, `event`,`describe`, `location`,`daerah` ) VALUES ('$id','$name','$email','$event','$describe', '$location','$daerah')");
  
    if($insert_volunteer){
        $status=  1;
        
        // echo "<script>alert('SQL Successful')</script>";

  
    }else{
        echo "<script>alert('SQL Error')</script>";
    }
  }
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
                        <h2>Cadangan</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Utama</a>
                        <a href="">Cadangan</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Cadangan Start -->
        <div class="container">
            <div class="cadangan" data-parallax="scroll" data-image-src="img/cadanganmasjid.jpg">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="cadangan-form">
						<?php if ($status == 1 ) {?>
						<div class ="alert alert-success"> Cadangan anda berjaya dihantar!</div>
						<?php }?>
						
						<form name ="becomeVolunteer" method ="POST" action ="">
                            
                        <div class="control-group">
                                     <select name="daerah" id="daerah" class="form-control" style="color:black">
                                    <?php 
                                    $masjids =  mysqli_query($connect,"SELECT DISTINCT nama_daerah FROM daerah"); 
            
                                    while($data_masjid = mysqli_fetch_assoc($masjids)){ ?>
                                        <option value="<?= $data_masjid['nama_daerah'] ?>"><?= $data_masjid['nama_daerah']?></option>
                                    <?php } ?>
                                    </select>
                                    <!-- <input type="location" class="form-control" id="location" name= "location" placeholder="Nama dan lokasi masjid" required="required"> -->
									</div>

                                <div class="control-group">
                                    <input type="text" class="form-control" id="name" name= "name" placeholder="Nama" value="<?= $data_user['name']?>" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" class="form-control" id="email" name= "email" placeholder="Email" required="required" value="<?= $data_user['email']?>" />
                                </div>
								 <div class="control-group">
                                    <input type="event" class="form-control" id="event" name= "event" placeholder="Cadangan untuk pembetukkan aktiviti baharu di masjid" required="required">
									</div>
                                <div class="control-group">
                                    <textarea class="form-control" id= "describe" name="describe" placeholder="Penghuraian tentang aktivit yang dicadangkan" required="required"></textarea>
                                </div>
								 <div class="control-group">
                                     <select name="location" id="masjid" class="form-control" style="color:black">
                                    <?php 
                                    $masjids =  mysqli_query($connect,"SELECT * FROM masjid"); 
            
                                    while($data_masjid = mysqli_fetch_assoc($masjids)){ ?>
                                        <option value="<?= $data_masjid['nama_masjid'] ?>"><?= $data_masjid['nama_masjid']?></option>
                                    <?php } ?>
                                    </select>
                                    <!-- <input type="location" class="form-control" id="location" name= "location" placeholder="Nama dan lokasi masjid" required="required"> -->
									</div>
								
                                <div>
                                    <button class="btn btn-custom" type="submit" name="submit" id="becomeVolunteerButton">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="cadangan-content">
                            <div class="section-header">
                                <p>Masjid</p>
                                <h2>Sila menyuarakan pelbagai cadangan aktiviti baharu yang harus kami lakukan!</h2>
                            </div>
                            <div class="cadangan-text">
                                <p>
                                     
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cadangan End -->


       
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
        <script>
             // Wait for the document to be ready
$(document).ready(function() {
  // Attach an event listener to the "daerah" select element
  $('#daerah').on('change', function() {
    // Get the value of the selected "daerah"
    var daerah = $(this).val();
    
    // If "daerah" is empty, clear the options of the "masjid" select element and return
    if (daerah === '') {
      $('#masjid').empty();
      return;
    }
    
    // Otherwise, make an AJAX request to get the list of masjids in the selected "daerah"
    $.ajax({
      url: 'get_masjid.php',
      type: 'POST',
      data: {daerah: daerah},
      dataType: 'json',
      success: function(response) {
        // Clear the options of the "masjid" select element
        $('#masjid').empty();
        
        // Add the new options to the "masjid" select element
        $.each(response, function(key, value) {
          $('#masjid').append($('<option>').text(value).attr('value', key));
        });
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.log('AJAX error: ' + textStatus + ' ' + errorThrown);
      }
    });
  });
});
        </script>
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