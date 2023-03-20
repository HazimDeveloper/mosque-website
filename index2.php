<?php 

include('config.php');
$masjid = mysqli_query($connect,"SELECT DISTINCT daerah_masjid FROM masjid");
$daerah = mysqli_query($connect,"SELECT DISTINCT daerah_masjid FROM  masjid ")
?>
        
        
<div id="navbar">    
  <nav class="navbar navbar-expand-lg bg-dark navbar-dark " role="navigation">
            <div class="container d-inline">
              
            <?php if(isset($_SESSION['user_name'])) : ?>
             
              <a class="navbar-brand" href="#"></a>
              <?php else: ?>
                <a class="navbar-brand" href="#">Masjid</a>
              <?php endif; ?>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            
            <div class="collapse navbar-collapse mt-0 " id="navbar-Collapse" style="background-color: #333;">
                <ul class="nav navbar-nav " style="position:absolute;right:30px;bottom:30px" >
                    <li ><a href="tentang.php" class=" nav-item nav-link">Utama</a></li>
                    <!-- <li><a href="tentang.php" class=" nav-item nav-link">Tentang Kami</a></li> -->
                    <li><a href="berita.php" class=" nav-item nav-link">Berita</a></li>
                    <li class="dropdown">
                    <a href="#" class=" nav-item nav-link" data-toggle="dropdown">Daerah <b class="caret"></b></a> 
                    <ul class="dropdown-menu">
                      <?php while($data_daerah = mysqli_fetch_assoc($daerah)){ ?>
                      <li > <a href="event.php?daerah_masjid=<?= $data_daerah['daerah_masjid'] ?>" class="dropdown-item"><?= $data_daerah['daerah_masjid'] ?></a> </li>
                    <?php } ?>
                    </ul>
                    </li>
                    <li class="dropdown"  >
                      <a href="#" class=" nav-item nav-link" data-toggle="dropdown">Aktiviti <b class="caret"></b></a> 
                      
                        <ul class="dropdown-menu">
                          <?php while($row = mysqli_fetch_assoc($masjid)){ ?>
                          <li class="dropdown dropdown-submenu"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $row['daerah_masjid'] ?></a>
                          <ul class="dropdown-menu">
                          <?php
        $daerah_masjid = $row['daerah_masjid'];
        $masjid_query = "SELECT * FROM masjid WHERE daerah_masjid = '$daerah_masjid'";
        $masjid_result = mysqli_query($connect, $masjid_query);
        while ($masjid_row = mysqli_fetch_array($masjid_result)) {
          ?>
									<li><a class="dropdown-item" href="event.php?id_masjid=<?= $masjid_row['id_masjid'];  ?>"><?php echo $masjid_row['nama_masjid']; ?></a></li>
                    <?php } ?>                                                  
								</ul>
							</li>
                               
              <?php } ?>     
                          
                        </ul>
                    </li>
                    <li><a href="carian.php" class=" nav-item nav-link">Carian Masjid</a></li>
                    <?php 
                    if(isset($_SESSION['user_name'])) :?>
                    
                    <li><a href="edit_profile.php" class=" nav-item nav-link">Profile User</a></li>
                    <li><a href="cadangan.php" class=" nav-item nav-link">Cadangan Aktiviti Baru</a></li>
					<!-- <li><a href="carian.php" class=" nav-item nav-link">Carian Masjid</a></li> -->
                    <?php endif;?>
                    <!-- <li><a href="berita.php" class=" nav-item nav-link">Berita</a></li> -->
                   
                    <li class="dropdown">
                    <a href="#" class=" nav-item nav-link" data-toggle="dropdown">Login <b class="caret"></b></a> 
                    <ul class="dropdown-menu">
                      <li > <a href="login_form.php" class="dropdown-item">Login User</a> </li>
                      <li ><a href="login_officer.php"  class="dropdown-item"> Login AJK Masjid</a></li>
                      <li > <a href="login_admin.php"class="dropdown-item"> Login Admin</a></li>
                    </ul>
                    </li>
                    <li><a href="logout.php" class=" nav-item nav-link">Logout</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
</div>


    
     
       




    