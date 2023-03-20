<?php

session_start();
include 'config.php';
$id_officer = $_SESSION['id_officer'];
$select_data_suggest = mysqli_query($connect,"SELECT * FROM masjid JOIN officer_masjid ON officer_masjid.masjid_id = masjid.id_masjid JOIN volunteer_user ON masjid.nama_masjid = volunteer_user.location WHERE officer_masjid.officer_id = $id_officer");

// $select_data_suggest = mysqli_query($connect,"SELECT * FROM volunteer_user JOIN masjid ON masjid.nama_masjid = volunteer_user.location JOIN");
$i =1;


if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $masjid = $_POST['nama_masjid'];
  $event = $_POST['event'];
  $describe = $_POST['describe'];

$data_masjid = mysqli_fetch_assoc($select_data_suggest);
  $insert_event = mysqli_query($connect,"INSERT INTO `event`(`id_event`, `id_officer`, `img_event`, `date`, `time_start`, `time_end`, `place`, `title`, `description`, `status`) VALUES ('','$id_officer','','','','','$masjid','$event','$describe','available') ");

  if($insert_event){
header("location: officer_page.php");
  }else{
    echo "sql error";
  }
}
?>
<html>
  <head>
    <meta />
    <title>Cadangan</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans|Roboto&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" > 
</head>
  <style>
    body{
  margin: 0;
}

h1{
  font-family: Montserrat, sans-serif;
}
.post-container{
  width: 50%;
  height: 100%;
  margin: 0px auto 0px auto;
  background-color: #fffafa;
  font-size: 20px;
}
.post-container .date{
  font-family: Roboto, sans-serif;
  color: #008080;
}
.post-container .post-content{
  width: 90%;
  font-family: Open Sans, sans-serif;
  font-weight: normal;
}
.post-container .post{
  /* margin-left: 50px; */
  /* margin-right: 50px; */
  padding-top: 20px;
  padding-left: 50px;
}
  </style>
  <body>
    
  
    <div class="post-container">
        <div class="" >
        <h1> Cadangan Aktiviti Baru Dari User</h1>  
    <a href="officer_page.php" class="btn btn-primary ml-3" >Kembali</a>
  <hr>
  </div>
  <?php while($row = mysqli_fetch_assoc($select_data_suggest)) {?>
  <div class="post">
    
  <div class="post-content">
    <form action="" method="POST">
      <label for="">Nama : </label>
      <input type="text" class="name form-control mb-3" name="name" value="<?= $row['name'] ?>" id="">
      <label for="">Tajuk Aktiviti : </label>
    
      <input type="text" class="name form-control mb-3" name="event" value="<?= $row['event'] ?>" id="">
        <!-- <p class="name"></p><p> -->

        <!-- </p><h1></h1> -->
        <label for="">Huraian Aktiviti : </label>
    
          <input type="text" name="describe" class="form-control mb-3"  value="<?= $row['describe'] ?>" id="">
          <label for="">Masjid : </label>
    
          <input type="text" name="nama_masjid" class="form-control mb-3" value="<?= $row['location'] ?>" id="">
          <!-- <p></p> -->
          <!-- <p></p>	 -->
          <input type="submit" name="submit" class="btn btn-primary" value="Approve">
          </form>
        </div>
</div>
<?php } ?>        
      <hr />
      
    </div>        
  </body>
</html>