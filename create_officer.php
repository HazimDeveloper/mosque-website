<?php
session_start();

include 'config.php';

$masjid = mysqli_query($connect,"SELECT * FROM masjid");

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
	$status = $_POST['status'];
	$masjid = $_POST['masjid'];
	$daerah = $_POST['daerah'];
    $pass = $_POST['pass'];
    $cnfrm_pass = $_POST['cnfrm-pass'];

$select_officer = mysqli_query($connect,"SELECT * FROM officer WHERE email = '$email'");

if(mysqli_num_rows($select_officer) == 0){

$insert_officer = mysqli_query($connect,"INSERT INTO `officer`(`id_officer`, `username`, `email`, `status`,`pass`) VALUES ('','$username','$email','$status','$pass')");

$select_data_officer = mysqli_query($connect,"SELECT * FROM officer WHERE email = '$email'");
$data_officer = mysqli_fetch_assoc($select_data_officer);

$id_officer = $data_officer['id_officer'];

$insert_officer_masjid = mysqli_query($connect,"INSERT INTO `officer_masjid`(`officer_id`, `masjid_id`,`daerah`) VALUES ('$id_officer','$masjid','$daerah')");

    if($insert_officer_masjid){
        header("location: admin_page.php");
    }else{
        echo "sql error";
    }
}else{
    echo "email already used";
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
    <title>Create Event</title>
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
    <form method="POST" action="">
    <div class="control-group mb-3">
      
    <label for="exampleInputPassword1" class="form-label">Daerah</label>
                                     <select name="daerah" id="daerah" class="form-control" style="color:black">
                                    <?php 
                                    $masjids =  mysqli_query($connect,"SELECT DISTINCT nama_daerah FROM daerah"); 
            
                                    while($data_masjid = mysqli_fetch_assoc($masjids)){ ?>
                                        <option value="<?= $data_masjid['nama_daerah'] ?>"><?= $data_masjid['nama_daerah']?></option>
                                    <?php } ?>
                                    </select>
                                    <!-- <input type="location" class="form-control" id="location" name= "location" placeholder="Nama dan lokasi masjid" required="required"> -->
									</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Username</label>
    <input type="username"  class="form-control" id="time-start" name="username" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input type="email"  class="form-control" id="time-start" name="email" required>
  </div>
  <div class="mb-3">
    <!-- <label for="exampleInputPassword1" class="form-label">Status</label> -->
    <input type="hidden"  class="form-control" id="time-start" name="status" value="active" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Masjid</label>
    <select id="masjid" name="masjid" class="form-control">
  <option value="">--Select Masjid--</option>
</select>
    <!-- <input type="status"  class="form-control" id="time-start" name="status" required> -->
  </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password"  class="form-control" id="time-start" name="pass" required>
  </div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ulangi Password</label>
    <input type="password"  class="form-control" id="time-start" name="cnfrm-pass" required>
  </div>
  <a href="admin_page.php" class="btn btn-primary">Batal</a>
  <!-- <button type="" class="btn btn-primary" name="">Cancel</button> -->
  <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
</form>
</div>
</div><!-- /.container -->
<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
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
</body>
</html>