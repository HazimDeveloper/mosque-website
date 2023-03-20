<?php
session_start();

include 'config.php';

$masjid = mysqli_query($connect,"SELECT * FROM masjid");

if(isset($_POST['submit'])){

	$nama_masjid = $_POST['nama_masjid'];
    $desc_masjid = $_POST['desc_masjid'];
    $daerah_masjid = $_POST['daerah'];
    
    $select_officer = mysqli_query($connect,"SELECT * FROM masjid WHERE nama_masjid = '$nama_masjid'");
    
    if(mysqli_num_rows($select_officer) == 0){
        
    //upload file to server
    $target_dir = "img/";
    $target_file = $target_dir . basename($_FILES["img_masjid"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // $check = getimagesize($_FILES["img_masjid"]["tmp_name"]);
    // if($check !== false) {
    //     echo "File is an image - " . $check["mime"] . ".";
    //     $uploadOk = 1;
    //   } else {
    //     echo "File is not an image.";
    //     $uploadOk = 0;
    //   }

    echo $img_masjid;
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }
      if ($uploadOk == 0) {
        echo "<script>alert('Sorry, your file was not uploaded.')</script>";
      // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["img_masjid"]["tmp_name"], $target_file)) {
          $nama_file = htmlspecialchars( basename( $_FILES["img_masjid"]["name"]));


        $insert_officer_masjid = mysqli_query($connect,"INSERT INTO `masjid`(`nama_masjid`, `desc_masjid`, `img_masjid`,`daerah_masjid`) VALUES ('$nama_masjid','$desc_masjid','$nama_file','$daerah_masjid')");

        if($insert_officer_masjid){
            header("location: admin_page.php");
        }else{
            echo "sql error";
        }

        } else {
          echo "Sorry, there was an error uploading your file.";
        }
    }

}else{
    echo "<script>alert('Nama Masjid Telah Digunakan')</script> ";
}


}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Create Masjid</title>
</head>
<style>
    form {
  width: 340px;
  max-width: 100%;
  border: 1px solid #ccc;
  padding: 1rem;
  background-color: #fff;
}

form:has(input:invalid) {
  /* border-color: #f44336; */
  outline: 0;
  box-shadow: 0 0 0 0.25rem #f4433677;
}

body {    
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;  
  flex-wrap: wrap;
  gap: 2rem;  
  min-height: 100vh;
  margin: 0;
  padding: 1rem;
  color: #333;
  font-family: 'Roboto', sans-serif;
  background-color: #eee;
}
</style>
<body>
    
<div class="container">
    <div class="row">
        <h1 class="text-center">Tambah Masjid</h1>

    </div>
    <div class="row">
    <form method="POST" action="" enctype="multipart/form-data">
      
  <div class="mb-3">
    
  <label for="exampleInputPassword1" class="form-label" name="daerah">Daerah</label>
    <select name="daerah" id="" class="form-control" >
      <?php
      $select_daerah = mysqli_query($connect,"SELECT *  FROM daerah");
      while($row = mysqli_fetch_assoc($select_daerah)){
      ?> 
      <option value="<?= $row['nama_daerah'] ?>"><?= $row['nama_daerah'] ?></option>
   <?php } ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Masjid</label>
    <input type="text"  class="form-control" id="time-start" name="nama_masjid" value="Masjid " required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Huraian Masjid</label>
    <input type="text"  class="form-control" id="time-start" name="desc_masjid" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Gambar Masjid</label>
    <input type="file"  class="form-control" id="time-start" name="img_masjid" required>
  </div>

  <a href="admin_page.php" class="btn btn-primary">Batal</a>
  <!-- <button type="" class="btn btn-primary" name="">Cancel</button> -->
  <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
</form>        
    </div>

</div>
</body>
</html>