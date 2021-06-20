<?php

include "app/artis.php";


$artis = new artis();
$row = $artis->delete($id);
if($artis){ //jika berhasil
    echo "<script>alert('Data Berhasil Di Hapus');document.location='tampilan_artis.php'</script>";
}else{  //jika gagal
    echo "<script>alert('Data Gagal Di Hapus, Coba ulangi lagi');document.location='tampilan_artis.php'</script>";
}
?>


