<?php 
session_start();
include 'config.php';
$id_officer = $_SESSION['id_officer'];

$select_officer = mysqli_query($connect,"SELECT * FROM  officer_masjid JOIN officer ON officer.id_officer = officer_masjid.officer_id JOIN masjid ON masjid.id_masjid = officer_masjid.masjid_id WHERE id_officer = $id_officer");
$data_officer = mysqli_fetch_assoc($select_officer);
// var_dump($data_officer);
$nama_masjid = $data_officer['nama_masjid'];
// $select_data_event = mysqli_query($connect,"SELECT * FROM masjid JOIN officer_masjid ON masjid.id_masjid = officer_masjid.masjid_id JOIN officer ON officer.id_officer = officer_masjid.officer_id WHERE officer.id_officer = $id_officer ");

// $select_data_event = mysqli_query($connect,"SELECT * FROM event JOIN masjid_event ON masjid_event.id_event = event.id_event JOIN masjid ON masjid.id_masjid = masjid_event.id_masjid JOIN officer_masjid ON officer_masjid.masjid_id = masjid.id_masjid JOIN officer ON officer_masjid.officer_id WHERE officer.id_officer = $id_officer AND officer_masjid.officer_id = $id_officer");

$select_data_event = mysqli_query($connect,"SELECT * FROM event WHERE event.place = '$nama_masjid'");

$select_log = mysqli_query($connect,"SELECT * FROM log WHERE id_officer = $id_officer ORDER BY id_officer LIMIT  1;");
$data_log = mysqli_fetch_assoc($select_log); 

$datetime = $data_log['date_time'];
$date = new DateTime($datetime);
$date_only = $date->format('Y-m-d');

$time = new DateTime($datetime);
$time_only = $date->format('h:i:s');

$i =1;
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" >
  

  <title>AJK Masjid</title>
  </head>
  <body>

<!-- As a heading -->
<nav class="navbar navbar-dark bg-dark mb-2">
  <span class="navbar-brand mb-0 h1 text-light">Selamat Datang AJK Masjid</span>
  <a href="login_officer.php" class="btn btn-primary">Logout</a>
</nav>

<a href="create_event.php" class="btn btn-success m-3">Cipta Aktiviti Baru</a>
<a href="suggestion_event.php" class="btn btn-success m-3">Cadangan Aktiviti Baru Dari User </a>
<a href="edit_profile_officer.php" class="btn btn-success m-3">Kemaskini Profil AJK </a>
<div class="m-3">Last Login | Date : <?= $date_only ?> Time : <?= $time_only ?>  </div>
   
  <table id="example" class="table table-striped table-bordered ml-0 ">
        <thead>
            <tr>
                <th>No. </th>
                <th>Gambar Aktiviti</th>
                <th>Tarikh</th>
                <th>Masa Mula</th>
                <th>Masa Tamat</th>
                <th>Lokasi</th>
                <th>Tajuk Aktiviti</th>
                <th>Status</th>
                <th>Bilangan User</th>
                <th rowspan="2" colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($select_data_event)) {
                $id_event = $row['id_event'];
                $tot_event = mysqli_query($connect,"SELECT COUNT(*) AS user FROM user_event WHERE id_event = $id_event");
$res = mysqli_fetch_assoc($tot_event);
$tot_user = $res['user'];

if($tot_user > 20){
   $update_status =  mysqli_query($connect,"UPDATE event SET status = 'unavailable' WHERE id_event = $id_event");
}
?>
           
                <tr>
                <td><?= $i?></td>
                <td><img src="img/<?= $row['img_event'] ?>" width="100px" height="100px" alt=""> </td>
                <td><?= $row['date'] ?></td>
                <td><?= $row['time_start'] ?></td>
                <td><?= $row['time_end'] ?></td>
                <td><?= $row['place'] ?></td>
                <td><?= $row['title'] ?></td>
                <td><?= $row['status'] ?></td>
                <td>Max : <?= $tot_user; ?>/20</td>

         <td> <a  class="btn btn-primary" href="senarai_user.php?id_event=<?= $row['id_event'] ?>">Senarai User</a> </td>
         
         <?php if($row['status'] == "completed") {?>
            
            <!-- <a  class="btn btn-warning" href="edit_event.php?id_event=<?= $row['id_event'] ?>" >Edit Event</a> -->
            <td>
            <input type="submit" class="btn btn-warning" value="Edit Volunteer Program" disabled>  </td>
            <td> <p class="alert alert-success">Aktiviti telah berjaya dilaksanakan!</p></td>
            
            <?php }else{?>
                <td> <a  class="btn btn-warning" href="edit_event.php?id_event=<?= $row['id_event'] ?>">Kemaskini Aktiviti</a> </td>
                <td> <a  class="btn btn-success" href="complete_event.php?id_event=<?= $row['id_event'] ?>">Selesai Aktiviti</a> </td>

            <?php }?>
        </tr>
    <?php 
$i++;
} ?>    
    </tbody>

    </table>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function () {
    $('#example').DataTable();
});
</script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>