<?php
include "config/koneksi.php";
if ($_SESSION['leveluser']=='admin'){
    $main = mysqli_query($konek, "SELECT * FROM mainmenu WHERE aktif = 'Y'  AND levelmenu='A' order by id_main");    
    while($r = mysqli_fetch_array($main)) {
		if(empty($r[link])){
        echo '<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">'.$r[nama_menu].'<span class="caret"></span></a>';
		$sub = mysqli_query($konek, "SELECT * FROM submenu, mainmenu WHERE submenu.id_main = mainmenu.id_main AND submenu.id_main = $r[id_main] 
		AND 	submenu.aktif='Y'");
		echo'<ul class="dropdown-menu">';
		while($w=mysqli_fetch_array($sub)){
		echo'<li><a href="'.$w[link_sub].'">'.$w[nama_sub].'</a></li>';
         }
		 echo'</ul></li>';
        }else{
		echo '<li><a  href="'.$r[link].'">'.$r[nama_menu].'</a></li>';
        }           
	}
}
elseif ($_SESSION['leveluser']=='guru'){
    $main = mysqli_query($konek,"SELECT * FROM mainmenu WHERE aktif = 'Y' AND levelmenu= 'G' order by id_main");    
    while($r = mysqli_fetch_array($main)) {
		if(empty($r[link])){
        echo '<li><a class="dropdown"href="#">'.$r[nama_menu].'</a>';
		$sub = mysqli_query($konek,"SELECT * FROM submenu, mainmenu WHERE submenu.id_main = mainmenu.id_main AND submenu.id_main = $r[id_main] 
		AND submenu.aktif='Y'");
		while($w=mysqli_fetch_array($sub)){
		echo'<ul>
		<li><a href="'.$w[link_sub].'">'.$w[nama_sub].'</a></li>		
		</ul>';
         }
		 echo'</li>';
        }else{
		echo '<li><a  href="'.$r[link].'">'.$r[nama_menu].'</a></li>';
        }           
	}
}

elseif ($_SESSION['leveluser']=='siswa'){
    $main = mysqli_query($konek,"SELECT * FROM mainmenu WHERE aktif = 'Y' AND levelmenu= 'S' order by id_main");    
    while($r = mysqli_fetch_array($main)) {
		if(empty($r[link])){
        echo '<li><a class="dropdown"href="#">'.$r[nama_menu].'</a>';
		$sub = mysqli_query($konek, "SELECT * FROM submenu, mainmenu WHERE submenu.id_main = mainmenu.id_main AND submenu.id_main = $r[id_main] 
		AND submenu.aktif='Y'");
		while($w=mysqli_fetch_array($sub)){
		echo'<ul>
		<li><a href="'.$w[link_sub].'">'.$w[nama_sub].'</a></li>		
		</ul>';
         }
		 echo'</li>';
        }else{
		echo '<li><a  href="'.$r[link].'">'.$r[nama_menu].'</a></li>';
        }           
	}
}
?>
