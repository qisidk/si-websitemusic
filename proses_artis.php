<?php

include_once "app/artis.php";

$artis = new artis();

if ($_POST['btn-simpan']) {
	$artis->input();
	header("location:index.php?page=tampilan_artis");
}

if ($_POST['btn-edit']) {
	$artis->update();
	header("location:index.php?page=tampilan_artis");
}

if ($_GET['delete-id']) {
	$artis->delete($_GET['delete-id']);
	header("location:index.php?page=tampilan_artis");
}