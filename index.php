<?php
session_start();

if($_SESSION['status'] !="login"){
    header("location:../index.php");
}
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
                <li ><a href="tampilan_artis.php">Artis</a></li>
                <li><a href="tampilan_album.php">Album</a></li>
                <li><a href="tampilan_track.php">Track</a></li>
                <li><a href="tampilan_played.php">Played</a></li>
            </ul>
    </header>
    <section class="banner">
        <h2>Express Yourself With Music</h2>
    </section>

        <footer>
            Copyright&copy; 2021 Qisidk
        </footer>
    </div>
</body>
</html>