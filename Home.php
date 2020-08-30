<?php 
    include 'select.php' ; 
    include 'daftar_controller.php' ; 
?>
   <html>
    <head>
        <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="Style.css" type="text/css">
        <link rel="shortcut icon" type="image/png" href="favicon.ico"/>
        <?php 
            echo '<script src="jquery-1.11.2.min.js"></script>';
            echo '<script src="pop-up.js"></script>';
        ?>
      <style>
          .satu p#judul{
                background-image: url('<?php satu();echo $result['gambar'] ?>');
            }
          .dua p#judul{
                background-image: url('<?php dua();echo $result['gambar'] ?>');
            }
          .tiga p#judul{
              background-image: url('<?php satu();echo $result['gambar'] ?>');
            }
        </style>
    </head>
    <body>
        <div class="nav-bar">
            
            <div class="container">
                <div class="title-bar-left">
                    <img src="logo.png" class="logo">
                    <h3>AFEA</h3>
                    <p>Konser Music<p>
                </div>
                <div class="title-bar-right">
                    <p class="search">Lokasi</p>
                    <input type="text" class="search-box">
                </div>
                <div class="title-bar-right">
                    <p class="search">Kategori</p>
                    <input type="text" class="search-box">
                </div>
                <button id="search-button">Pencarian</button>
            </div>
        </div>
            
        <div class="cat-bar">
            <div class="container">
                <a href="Home.php" class="a-cat">Beranda</a>
                <a href="browse_event.php" class="a-cat">Lihat Konser</a>
                <a href="contactus.php" class="a-cat">Hubungi Kami</a>
                <a href="#" class="a-cat login activate_modal" name='3_window'>Masuk</a>
            </div>
        </div>
        
        <div class="first-content">
            <div class="container">
                <h1 class="h1">
                    Terbaru
                </h1>
                <hr>
                <div class="satu">
                     <p id="judul">
                        <a href="####"><?php satu(); echo $result['genre']; ?></a>
                    </p>
                    <div class="tail">
                        <p class="nama-event"><?php satu(); echo $result['nama']; ?></p>
                    </div>
                    <div class="tail">
                        <ul>
                            <li><i class="fa fa-map-marker"></i><?php satu(); echo $result['tanggal']; ?></li>
                            <li><i class="fa fa-calendar"></i><?php satu(); echo $result['tanggal']; ?></li>
                           
                        </ul>
                    </div>
                    <div class="tail">
                        <?php satu(); echo $result['deskripsi']; ?>
                    </div>
                    
                    <div class="tail2">
                        <a href="Detail.php" id="button">
                            Selengkapnya
                            <i class="fa fa-caret-right">
                            </i>
                        </a>
                    </div>
                </div>
                <div class="dua">
                    <p id="judul">
                        <a href="####"><?php satu(); echo $result['genre']; ?></a>
                    </p>
                    <div class="tail">
                        <p class="nama-event"><?php satu(); echo $result['nama']; ?></p>
                    </div>
                    <div class="tail">
                        <ul>
                            <li><i class="fa fa-map-marker"></i><?php satu(); echo $result['tanggal']; ?></li>
                            <li><i class="fa fa-calendar"></i><?php satu(); echo $result['tanggal']; ?></li>
                           
                        </ul>
                    </div>
                    <div class="tail">
                        <?php satu(); echo $result['deskripsi']; ?>
                    </div>
                    
                    <div class="tail2">
                        <a href="Detail.php" id="button">
                            Selengkapnya
                            <i class="fa fa-caret-right">
                            </i>
                        </a>
                    </div>
                </div>
                <div class="tiga">
                    <p id="judul">
                        <a href="####"><?php satu(); echo $result['genre']; ?></a>
                    </p>
                    <div class="tail">
                        <p class="nama-event"><?php satu(); echo $result['nama']; ?></p>
                    </div>
                    <div class="tail">
                        <ul>
                            <li><i class="fa fa-map-marker"></i><?php satu(); echo $result['tanggal']; ?></li>
                            <li><i class="fa fa-calendar"></i><?php satu(); echo $result['tanggal']; ?></li>
                           
                        </ul>
                    </div>
                    <div class="tail">
                        <?php satu(); echo $result['deskripsi']; ?>
                    </div>
                    
                    <div class="tail2">
                        <a href="Detail.php" id="button">
                            Selengkapnya
                            <i class="fa fa-caret-right">
                            </i>
                        </a>
                    </div>
                </div>
                <div class="satu">
                     <p id="judul">
                        <a href="####"><?php satu(); echo $result['genre']; ?></a>
                    </p>
                    <div class="tail">
                        <p class="nama-event"><?php satu(); echo $result['nama']; ?></p>
                    </div>
                    <div class="tail">
                        <ul>
                            <li><i class="fa fa-map-marker"></i><?php satu(); echo $result['tanggal']; ?></li>
                            <li><i class="fa fa-calendar"></i><?php satu(); echo $result['tanggal']; ?></li>
                           
                        </ul>
                    </div>
                    <div class="tail">
                        <?php satu(); echo $result['deskripsi']; ?>
                    </div>
                    
                    <div class="tail2">
                        <a href="Detail.php" id="button">
                            Selengkapnya
                            <i class="fa fa-caret-right">
                            </i>
                        </a>
                    </div>
                </div>
                <div class="dua">
                    <p id="judul">
                        <a href="####"><?php satu(); echo $result['genre']; ?></a>
                    </p>
                    <div class="tail">
                        <p class="nama-event"><?php satu(); echo $result['nama']; ?></p>
                    </div>
                    <div class="tail">
                        <ul>
                            <li><i class="fa fa-map-marker"></i><?php satu(); echo $result['tanggal']; ?></li>
                            <li><i class="fa fa-calendar"></i><?php satu(); echo $result['tanggal']; ?></li>
                           
                        </ul>
                    </div>
                    <div class="tail">
                        <?php satu(); echo $result['deskripsi']; ?>
                    </div>
                    
                    <div class="tail2">
                        <a href="Detail.php" id="button">
                            Selengkapnya
                            <i class="fa fa-caret-right">
                            </i>
                        </a>
                    </div>
                </div>
                <div class="tiga">
                    <p id="judul">
                        <a href="####"><?php satu(); echo $result['genre']; ?></a>
                    </p>
                    <div class="tail">
                        <p class="nama-event"><?php satu(); echo $result['nama']; ?></p>
                    </div>
                    <div class="tail">
                        <ul>
                            <li><i class="fa fa-map-marker"></i><?php satu(); echo $result['tanggal']; ?></li>
                            <li><i class="fa fa-calendar"></i><?php satu(); echo $result['tanggal']; ?></li>
                           
                        </ul>
                    </div>
                    <div class="tail">
                        <?php satu(); echo $result['deskripsi']; ?>
                    </div>
                    
                    <div class="tail2">
                        <a href="Detail.php" id="button">
                            Selengkapnya
                            <i class="fa fa-caret-right">
                            </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <br>
        
        <div class="container">
            <h1 class="h1">
                Populer
            </h1>
            <hr>
            <div class="second-content">
                <div class="one-two">
                    <p id="judul">
                        <a href="###">Rock</a>
                    </p>
                    <div class="popular">
                       <a href="#" id="jdl">
                        A Night Of Reunion with BOYZONE
                        </a>
                    </div>
                </div>
                <div class="two-two">
                    <p id="judul">
                        <a href="####">Metal</a>
                    </p>
                    <div class="popular">
                        <a href="#" id="jdl">
                            A Night Of Reunion with BOYZONE
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
                <h1 class="h1">
                    Paling Sering Dilihat
                </h1>
                <hr>
                <div class="satu">
                     <p id="judul">
                        <a href="####"><?php satu(); echo $result['genre']; ?></a>
                    </p>
                    <div class="tail">
                        <p class="nama-event"><?php satu(); echo $result['nama']; ?></p>
                    </div>
                    <div class="tail">
                        <ul>
                            <li><i class="fa fa-map-marker"></i><?php satu(); echo $result['tanggal']; ?></li>
                            <li><i class="fa fa-calendar"></i><?php satu(); echo $result['tanggal']; ?></li>
                           
                        </ul>
                    </div>
                    <div class="tail">
                        <?php satu(); echo $result['deskripsi']; ?>
                    </div>
                    
                    <div class="tail2">
                        <a href="Detail.php" id="button">
                            Selengkapnya
                            <i class="fa fa-caret-right">
                            </i>
                        </a>
                    </div>
                </div>
                <div class="dua">
                    <p id="judul">
                        <a href="####"><?php satu(); echo $result['genre']; ?></a>
                    </p>
                    <div class="tail">
                        <p class="nama-event"><?php satu(); echo $result['nama']; ?></p>
                    </div>
                    <div class="tail">
                        <ul>
                            <li><i class="fa fa-map-marker"></i><?php satu(); echo $result['tanggal']; ?></li>
                            <li><i class="fa fa-calendar"></i><?php satu(); echo $result['tanggal']; ?></li>
                           
                        </ul>
                    </div>
                    <div class="tail">
                        <?php satu(); echo $result['deskripsi']; ?>
                    </div>
                    
                    <div class="tail2">
                        <a href="Detail.php" id="button">
                            Selengkapnya
                            <i class="fa fa-caret-right">
                            </i>
                        </a>
                    </div>
                </div>
                <div class="tiga">
                    <p id="judul">
                        <a href="####"><?php satu(); echo $result['genre']; ?></a>
                    </p>
                    <div class="tail">
                        <p class="nama-event"><?php satu(); echo $result['nama']; ?></p>
                    </div>
                    <div class="tail">
                        <ul>
                            <li><i class="fa fa-map-marker"></i><?php satu(); echo $result['tanggal']; ?></li>
                            <li><i class="fa fa-calendar"></i><?php satu(); echo $result['tanggal']; ?></li>
                           
                        </ul>
                    </div>
                    <div class="tail">
                        <?php satu(); echo $result['deskripsi']; ?>
                    </div>
                    
                    <div class="tail2">
                        <a href="Detail.php" id="button">
                            Selengkapnya
                            <i class="fa fa-caret-right">
                            </i>
                        </a>
                    </div>
                </div>
        </div>
        
        <br>
        
        <div class="container">
        <div class="third-content">
            <h1 class="h1">
                Postingan Lama
            </h1>
            <hr>
            <div class="one-four">
                <p id="judul-four">
                        <a href="###">Rock</a>
                </p>
                <div class="caption">
                    <a href="####">
                        Konser Afea
                    </a>
                </div>
            </div>
            <div class="two-four">
               <p id="judul-four">
                        <a href="###">Rock</a>
                </p>
                <div class="caption">
                    <a href="####">
                        Konser ceg  
                    </a>
                </div>
            </div>
            <div class="three-four">
               <p id="judul-four">
                        <a href="###">Rock</a>
                </p>
                <div class="caption">
                    <a href="####">
                        Konser bgro
                    </a>
                </div>
            </div>
            <div class="four-four">
               <p id="judul-four">
                        <a href="###">Rock</a>
                </p>
                <div class="caption">
                    <a href="####">
                        Konser asd
                    </a>
                </div>
            </div>
            
        </div>
        </div>
        
        <div class="footer">
            <div class="container">
            <img src="logo.png">
            <h3>AFEA</h3>
                <p>Konser Music &copy;</p>   
            <ul class="sosmed">
                <li>Ikuti Kami : </li>
                <li class="twitter"></li>
                <li class="facebook"></li>
                </ul>
            </div>
        </div>

            <a class="backTOP">TOP</a>
        
        <!--------------------------- POP UP LOGIN --------------------------->
        
<!--
<p><a class='activate_modal' name='3_window' href='#'>Afea</a></p>   
  
-->
<div id='mask' class=''></div>  
  
        <div class="small" id="3_window" >
            <a href="#close" class="close close_modal" title="Close">X</a>
            <div class="pop-login">
                <p id="title">
                    Sign In
                </p>
                <p id="subtitle">
                    Social Sign In
                </p>
                <a href="####" id="sosmed1">
                    <img src="fb_icon_325x325.png">
                </a>
                <a id="facebook" href="####">
                    Facebook
                </a>
                <a href="####" id="sosmed2">
                    <img src="google-plus-logo.png">
                </a>
                <a id="google" href="####">
                    Google
                </a>
                <div class="subtitle">
                    <img src="biru%20afea.png" class="afea">
                    <p class="beda">
                        AFEA Account Sign In
                    </p>
                </div>
                <form>
                    <input type="text" id="input" name="username" placeholder="User Name">
                    <input type="text" id="input" name="password" placeholder="Password">
                    <input type="submit" id="submit" name="Submit" value="Sign In">
                    <input type="checkbox" id="check" name="checkbox"> <p id="remember">Remember me</p>
                    <p class="ask-signup">Belum punya akun ?</p><a href="#" id="sign-up" class="activate_modal2" name='4_window'>SignUp</a>
                </form>
                
            </div>
        </div>
        
        
        
                <div class="signup" id="4_window" >
            <div class="daftar">
                <p id="title">
                    DAFTAR AKUN
                </p>
                <a href="#close" class="close close_modal" title="Close">X</a>
                <div class="daftar-subtitle">
                    <img src="biru%20afea.png" class="afea">
                    <p class="beda">
                        AFEA Account Sign Up
                    </p>
                </div>
                <form method="post" action="daftar_controller.php">
                    <table>
                        <tr>
                            <td>
                                 Nama
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <input type="text" name="Nama" id="input" placeholder="Ednan Fajri" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                 E-Mail
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <input type="email" name="Email" id="input" placeholder="Anomius@g.mail.com" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Tanggal Lahir
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <input type="date" name="Tanggal" id="input" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                No. Telp.
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <input type="text" name="Hp" id="input" placeholder="0852410192**" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Jenis Kelamin
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                
                                <input type="radio" id="checkbox" checked value="tes">
                                <label>
                                    Laki-Laki
                                </label>
                                <input type="radio" id="checkbox" value="gaga">
                                <label>
                                    Perempuan
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nama Pengguna
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <input type="text" name="UserName" id="input" placeholder="Ednan19" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Password
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <input type="password" name="Password" id="input" placeholder="******" required>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" name="Daftar"id="submit" value="Daftar">
                </form>
                
            </div>
        </div>
    </body>
</html>