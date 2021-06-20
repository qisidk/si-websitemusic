<?php

include "app/played.php";


$played = new played();
$row = $played->delete($id);
if($played){ //jika berhasil
    echo "<script>alert('Data Berhasil Di Hapus');document.location='tampilan_played.php'</script>";
}else{  //jika gagal
    echo "<script>alert('Data Gagal Di Hapus, Coba ulangi lagi');document.location='tampilan_played.php'</script>";
}
?>


