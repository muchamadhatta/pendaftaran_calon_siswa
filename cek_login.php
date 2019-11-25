<?php
include "config/koneksi.php";
function anti_injection($data){
  $filter  = stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES)));
  return $filter;
}

$username = anti_injection($_POST['username']);
$pass     = anti_injection(md5($_POST['password']));

// pastikan username dan password adalah berupa huruf atau angka.
if (!ctype_alnum($username) OR !ctype_alnum($pass)){
  echo "Sekarang loginnya tidak bisa di injeksi lho.";
}
else{
$login=mysqli_query($konek,"SELECT * FROM users WHERE username='$username' AND password='$pass'");
$ketemu=mysqli_num_rows($login);
$r=mysqli_fetch_array($login);

// Apabila username dan password ditemukan
if ($ketemu > 0){
  session_start();
  include "timeout.php";

  $_SESSION['namauser']     = $r['username'];
  $_SESSION['namalengkap']  = $r['nama_lengkap'];
  $_SESSION['jabatan']     = $r['jabatan'];
  $_SESSION['kategori']     = $r['id_user'];
  $_SESSION['passuser']     = $r['password'];
  $_SESSION['leveluser']    = $r['level'];
  
  // session timeout
  $_SESSION[login] = 1;
  timer();

	$sid_lama = session_id();
	
	session_regenerate_id();

	$sid_baru = session_id();

  mysqli_query($konek,"UPDATE users SET id_session='$sid_baru' WHERE username='$username'");
  header('location:media.php?module=home');
}
else{
  include "error-login.php";
}
}
?>
