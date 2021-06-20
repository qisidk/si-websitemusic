<?php

include "app/played.php";

$played = new played();
$rows = $played->tampil();

?>

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
                <li><a href="tampilan_artis.php">Artis</a></li>
                <li><a href="tampilan_album.php">Album</a></li>
                <li><a href="tampilan_track.php">Track</a></li>
                <li><a href="tampilan_played.php">Played</a></li>
            </ul>
    </header>
    <section class="kotak">
        <br><br>
<?php

require_once "app/track.php";

$played = new played();
$rows = $played->input();

?>

<center>
<table>
     <form method="POST" action="proses_played.php">
        <tr>
            <td>ID Album</td>
            <td><input type="text" name="album_id"></td>
        </tr>
        <tr>
            <td>ID Artist</td>
            <td><input type="text" name="artist_id"></td>
        </tr>
         <tr>
            <td>ID Track</td>
            <td><input type="text" name="track_id"></td>
        </tr>
        <tr>
            <td>Played</td>
            <td><input type="text" name="artist_id"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn-simpan" class="tombol tombol-simpan"value="SIMPAN"></td>
        </tr>
</table>
</center>
</form>
    </section>

        <footer>
            Copyright&copy; 2021 Qisidk
        </footer>
    </div>
</body>
</html>