<?php

include_once "app/track.php";

$track = new played();

if ($_POST['btn-simpan']) {
	$track->input();
	header("location:index.php?page=tampilan_track");
}

if ($_POST['btn-edit']) {
	$track->update();
	header("location:index.php?page=tampilan_track");
}

if ($_GET['delete-id']) {
	$track->delete($_GET['delete-id']);
	header("location:index.php?page=tampilan_track");
}