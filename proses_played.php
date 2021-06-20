<?php

include_once "app/played.php";

$played = new played();

if ($_POST['btn-simpan']) {
	$played->input();
	header("location:index.php?page=tampilan_played");
}

if ($_POST['btn-edit']) {
	$played->update();
	header("location:index.php?page=tampilan_played");
}

if ($_GET['delete-id']) {
	$played->delete($_GET['delete-id']);
	header("location:index.php?page=tampilan_played");
}