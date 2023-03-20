<?php 
$masjids = mysqli_query($connect,"SELECT DISTINCT daerah_masjid FROM masjid");
$masjidss = mysqli_query($connect,"SELECT DISTINCT daerah_masjid FROM masjid");
?>
       <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="index.php" class="navbar-brand">Masjid</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
<div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="utama.php" class="nav-item nav-link active">Utama</a>
                        <a href="tentang.php" class="nav-item nav-link ">Tentang Kami</a>
                        <a href="berita.php" class="nav-item nav-link">Berita</a>
						<a href="edit_profile.php" class="nav-item nav-link">Profil User</a>
						<a href="cadangan.php" class="nav-item nav-link">Cadangan Aktiviti Baru</a>
						<div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                            <div class="dropdown-menu">
                                <a href="login_form.php" class="dropdown-item">Login User</a>
                                <a href="login_admin.php" class="dropdown-item">Login Admin</a>
								<a href="login_officer.php" class="dropdown-item">Login AJK Masjid</a>
                            </div>
                        </div>
						<a href="logout.php" class="nav-item nav-link">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->
     