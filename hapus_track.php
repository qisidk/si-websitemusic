<?php

include "app/track.php";


$track = new track();
$row = $track->delete($id);
if($track){ //jika berhasil
    echo "<script>alert('Data Berhasil Di Hapus');document.location='tampilan_track.php'</script>";
}else{  //jika gagal
    echo "<script>alert('Data Gagal Di Hapus, Coba ulangi lagi');document.location='tampilan_track.php'</script>";
}
?>


