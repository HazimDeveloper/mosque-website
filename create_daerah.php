<?php
session_start();

include 'config.php';

// $masjid = mysqli_query($connect,"SELECT * FROM masjid");

if(isset($_POST['submit'])){

    $nama_daerah = $_POST['daerah'];
    
    $select_officer = mysqli_query($connect,"SELECT * FROM daerah WHERE nama_daerah = '$nama_daerah'");
    
    if(mysqli_num_rows($select_officer) == 0){
        

        $insert_officer_masjid = mysqli_query($connect,"INSERT INTO `daerah`(`id_daerah`, `nama_daerah`) VALUES ('','$nama_daerah')");

        if($insert_officer_masjid){
            header("location: admin_page.php");
        }else{
            echo "sql error";
        }

    }else{
      echo "<script>alert('Nama daerah Telah Digunakan')</script> ";
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
    <title>Create Daerah</title>
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
        <h1 class="text-center">Tambah Daerah</h1>

    </div>
    <div class="row">
    <form method="POST" action="" enctype="multipart/form-data">
  
  <div class="mb-3">
    <label for="daerah" class="form-label">Nama Daerah</label>
    <input type="text"  class="form-control" id="daerah" name="daerah" required>
  </div>

  <a href="admin_page.php" class="btn btn-primary">Batal</a>
  <!-- <button type="" class="btn btn-primary" name="">Cancel</button> -->
  <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
</form>        
    </div>

</div>
</body>
</html>