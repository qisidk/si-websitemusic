<?php

include_once "app/album.php";

$album = new played();

if ($_POST['btn-simpan']) {
	$album->input();
	header("location:index.php?page=tampilan_album");
}

if ($_POST['btn-edit']) {
	$album->update();
	header("location:index.php?page=tampilan_album");
}

if ($_GET['delete-id']) {
	$album->delete($_GET['delete-id']);
	header("location:index.php?page=tampilan_album");
}