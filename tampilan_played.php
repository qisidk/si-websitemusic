
<!DOCTYPE html>
<html>
<head>
    <title>OOP UTS</title>
    <link href="layout/asset/css/style.css" type="text/css" rel="stylesheet">
</head>
<body>  
    <div class="atas">
        <div class="content">
            <ul>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
            <li><a href=""></a></li>
        </ul>
        </div>
    </div>
    <header>
            <h1><a href="index.php">MELODIOUSNESS</a></h1>
            <ul>
                <li ><a href="tampilan_artis.php">Artis</a></li>
                <li><a href="tampilan_album.php">Album</a></li>
                <li><a href="tampilan_track.php">Track</a></li>
                <li><a href="tampilan_played.php">Played</a></li>
            </ul>
    </header>
    <section class="kotak">
        <nav class="tambahuser">
        <a href="tambah_artis.php"><img src="layout/asset/images/tbh.png" width="30px"></a>
    </nav>
        <br><br>
<?php

require_once "app/played.php";

$played = new played();
$rows = $played->tampil();

?>

<center>
<table>
    <tr>
        <td>ID ARTIST</td>
        <td>ID ALBUM</td>
        <td>ID TRACK</td>
        <td>PLAYED</td>
        <td>AKSI</td>
    </tr>

    <?php foreach ($rows as $row) { ?>

        <tr>
            <td><?php echo $row['artist_id']; ?></td>
            <td><?php echo $row['album_id']; ?></td>
            <td><?php echo $row['track_id']; ?></td>
            <td><?php echo $row['played']; ?></td>
            <td><img src="layout/asset/images/edit1.png">&nbsp;
            <img src="layout/asset/images/hapus2.jpg"></td>
        </tr>

    <?php } ?>
</table>
</center>
    </section>

        <footer>
            Copyright&copy; 2021 Qisidk
        </footer>
    </div>
</body>
</html>