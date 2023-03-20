<?php 
session_start();
include 'config.php';

if(isset($_SESSION['user_name'])){
    $name = $_SESSION['user_name'];

    $sql_user = mysqli_query($connect,"SELECT * FROM user_form WHERE name = '$name'");
    $data_user = mysqli_fetch_assoc($sql_user);
    $id = $data_user['id'];
}

if(isset($_GET['id_masjid'])){

    


    $id_masjid = $_GET['id_masjid'];


$masjid = mysqli_query($connect,"SELECT * FROM masjid");
$sql_masjid = mysqli_query($connect,"SELECT * FROM masjid WHERE id_masjid = $id_masjid");
$data = mysqli_fetch_assoc($sql_masjid);
$data_masjid = mysqli_query($connect,"SELECT * FROM masjid_event WHERE id_masjid = $id_masjid");

$nama_masjid = $data['nama_masjid'];
if(isset($_GET['my_event'])) {

    // $select_data_event = mysqli_query($connect,"SELECT *,event.status AS stat FROM event JOIN user_event ON event.id_event = user_event.id_event JOIN masjid_event ON event.id_event = event.id_event WHERE id_user= $id AND user_event.status != 'cancel' AND masjid_event.id_masjid = $id_masjid ");
    
    $select_data_event = mysqli_query($connect,"SELECT * FROM event JOIN masjid_event ON event.id_event = masjid_event.id_event JOIN user_event ON user_event.id_event = event.id_event WHERE user_event.id_user = $id AND masjid_event.id_masjid = $id_masjid AND user_event.status != 'cancel'");

    $select_data_event = mysqli_query($connect,"SELECT *,event.place as 'namaMasjid'  FROM event JOIN user_event ON user_event.id_event = event.id_event WHERE event.place = '$nama_masjid' AND  user_event.status != 'cancel' AND  user_event.id_user = $id ");

    $select_user_event = mysqli_query($connect,"SELECT * FROM user_event WHERE id_user = '$id'");
}else{
    
    $select_data_event = mysqli_query($connect,"SELECT *,place as namaMasjid FROM event WHERE event.place = '$nama_masjid' ");
    // $select_data_event = mysqli_query($connect,"SELECT * FROM event JOIN user_event  ON event.id_event = user_event.id_event");
  
}

}else{
    
    $daerah_masjid = $_GET['daerah_masjid'];
 
        // $id_masjid = $_GET['id_masjid'];
    
    $masjid = mysqli_query($connect,"SELECT * FROM masjid");
    $sql_masjid = mysqli_query($connect,"SELECT * FROM masjid WHERE daerah_masjid = '$daerah_masjid'");
    $data = mysqli_fetch_assoc($sql_masjid);
    // $data_masjid = mysqli_query($connect,"SELECT * FROM masjid_event WHERE id_masjid = $id_masjid");
    
    $nama_masjid = $data['nama_masjid'];
    if(isset($_GET['my_event'])) {
    
        // $select_data_event = mysqli_query($connect,"SELECT *,event.status AS stat FROM event JOIN user_event ON event.id_event = user_event.id_event JOIN masjid_event ON event.id_event = event.id_event WHERE id_user= $id AND user_event.status != 'cancel' AND masjid_event.id_masjid = $id_masjid ");
        
        $select_data_event = mysqli_query($connect,"SELECT * FROM event JOIN masjid_event ON event.id_event = masjid_event.id_event JOIN user_event ON user_event.id_event = event.id_event WHERE user_event.id_user = $id AND masjid_event.id_masjid = $id_masjid AND user_event.status != 'cancel'");
    
        $select_data_event = mysqli_query($connect,"SELECT *,event.place as 'namaMasjid'  FROM event  JOIN user_event ON user_event.id_event = event.id_event WHERE event.place = '$nama_masjid' AND  user_event.status != 'cancel' AND  user_event.id_user = $id ");
    
        $select_user_event = mysqli_query($connect,"SELECT * FROM user_event WHERE id_user = '$id'");
    }else{
        
        $select_data_event = mysqli_query($connect,"SELECT *,nama_masjid as namaMasjid FROM `masjid` JOIN event ON nama_masjid = event.place WHERE daerah_masjid = '$daerah_masjid'");
        // $select_data_event = mysqli_query($connect,"SELECT * FROM event JOIN user_event  ON event.id_event = user_event.id_event");
     
    // $select_data_event = mysqli_query($connect,"SELECT *,place as namaMasjid FROM event WHERE "); 
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
        <div class="page-header" id="page-header">
            <div class="container" id="image-daerah">
                <div class="row">
                    <div class="col-6">
                        <img src="img/<?= $data['img_masjid'] ?>" width="100%" height="100%" alt="">
                    </div>
                    <div class="col-6">
                    <h2><?= $data['nama_masjid'] ?></h2>    
                    <p class="text-white" style="font-size: 21px;"><?= $data['desc_masjid'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
       
        
        <!-- Event Start -->
        <div class="event-start" id="event-start">
            <div class="container">
                <div class="section-header text-center">
                    <p>Aktiviti akan datang</p>
                    <h2 id="event-h2">Aktiviti-aktiviti yang akan dianjurkan</h2>
                </div>

                <?php if(isset($_GET['id_masjid'])) { ?>
                <a href="event.php?id_masjid=<?= $id_masjid ?>" class="btn btn-primary mb-5">Senarai semua aktiviti <?=  $data['nama_masjid'] ?></a>
               <?php }else{ ?>
               <a href="event.php?daerah_masjid=<?= $_GET['daerah_masjid'] ?>" class="btn btn-primary mb-5">Senarai semua aktiviti <?=  $_GET['daerah_masjid'] ?></a>
               <?php } ?>
                <?php if(isset($_SESSION['user_name'])){ ?>
                <?php if(isset($_GET['id_masjid'])){ ?>
                <a href="event.php?id_masjid=<?= $id_masjid ?>&my_event" class="btn btn-primary mb-5">Aktiviti yang disertai</a>
                <?php } else{ ?>
                    <!-- <a href="event.php?daerah_masjid=<?= $daerah_masjid ?>&my_event" class="btn btn-primary mb-5">Aktiviti yang disertai</a> -->
               
                    <?php } } ?>
                <div class="row">
<?php while($row = mysqli_fetch_assoc($select_data_event)) { ?>
                    <div class="col-4 mb-5 border ">
                        <div class="event-item">
                            <img src="img/<?= $row['img_event']?>"  width="300px" height="400px" alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i><?= $row['date']?></p>
                                    <p><i class="far fa-clock"></i><?= $row['time_start']?> - <?= $row['time_end']?></p>
                                    <p><i class="fa fa-map-marker-alt"></i><?= $row['namaMasjid']?></p>
                                </div>
                                <div class="event-meta">
                                    <h3><?= $row['title']?></h3>
                                    <p class="mb-3">
                                    <?= $row['description']?>
                                    </p>
									
                                    <form action="" method="POST">
                                    <?php 
                                    if(isset($_GET['my_event'])){ ?>
                                         <!-- <input type="submit" class="btn btn-custom card-link" value="Already Join" disabled name="submit"> -->
                                         <!-- <input type="submit" class="btn btn-custom card-link" value="Already Join" disabled name="submit"> -->
                                         <a href="delete_event.php?id_event=<?=$row['id_event'] ?>&id_masjid=<?= $id_masjid?>" class="btn btn-danger" onclick="return confirm('Are Your Sure Want To Cancel To Join The Event')" class="btn btn-warning" style="margin-top: 0px;padding-top:10px;padding-bottom: 10px;">Cancel Join Event</a>
                   
                                         <!-- <input type="submit" style="margin-top: 17px;" value="Cancel" class="btn btn-warning" name="cancel"> -->
                                   <?php }else{
                                    if($row['status'] == "available") { 
                                        
                                        if(isset($_SESSION['user_name'])) {
                                        if(isset($_GET['id_masjid'])){
                                        ?>

                                    <a href="update_event.php?id=<?=$row['id_event'] ?>&id_masjid=<?= $id_masjid?>" class="btn btn-dark text-light mb-3 btn-block">Join Now</a>
                                    <?php }else{ ?>
                                        <a href="update_event.php?id=<?=$row['id_event'] ?>&id_masjid=<?= $row['id_masjid']?>" class="btn btn-dark text-light mb-3 btn-block">Join Now</a>
                <?php }}else{ ?>                    
                    <a href="qrcode.php" class="btn btn-dark text-light mb-3 btn-block">Join Now</a>
                                        <!-- <input type="submit" class="btn btn-custom" value="Join Now" name="submit"> -->
                                    <!-- <a class="btn btn-custom" href="">Join Now</a> -->
                                <?php } }else if($row['status'] == 'completed') { ?>
                                    <input type="submit" class="btn btn-success btn-block mb-3" value="Completed" name="submit" disabled >
                                   
                                    <?php  ?>
                                    <?php }else{?>
                                    <input type="submit" class="btn btn-dark btn-block mb-3" value="Full" name="submit" disabled >
                                    
                                    <?php }} ?>
                                </form>
                            </div>
                                
                            </div>
                        </div>
                    </div>
                    <?php }?>
                    
                </div>
            </div>
        </div>
        <!-- Event End -->


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

        <?php if(isset($_GET['daerah_masjid'])) { ?>
        <script>
            document.getElementById('image-daerah').style.display = 'none';
            document.getElementById('event-h2').style.color = 'white';
            document.getElementById('event-start').style.position = 'relative';
            document.getElementById('event-start').style.top = '-200px';
        </script>
        <?php } ?>
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
