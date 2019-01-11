<?php

session_start();
$id = (int) ($_GET['id'] ?? $_POST['id'] ?? $_COOKIE['id'] ?? $_SESSION['id'] ?? 0);
if (!isset($_SESSION['id']) && $id !== 0) {
	 $_SESSION['id'] = $id;
}
echo 'ID: ' . $id;

