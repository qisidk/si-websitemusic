<?php

include "app/album.php";


$album = new album();
$row = $album->delete($id);
if($album){ //jika berhasil
    echo "<script>alert('Data Berhasil Di Hapus');document.location='tampilan_album.php'</script>";
}else{  //jika gagal
    echo "<script>alert('Data Gagal Di Hapus, Coba ulangi lagi');document.location='tampilan_album.php'</script>";
}
?>


