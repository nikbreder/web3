<?php
require_once 'secure.php';

$username = $_SESSION['fio'];
$role = $_SESSION['roleName'];

require_once 'template/header.php';
require_once 'template/footer.php';