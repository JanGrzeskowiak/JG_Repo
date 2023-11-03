<?php 
session_start();

if (!isset($_SESSION['admin_name'])){
    header('Location: ./login.php');
    die;
}

$title = 'Panel administracyjny';
$activePage = 'home'
?>
<!DOCTYPE html>
<html lang="pl">
    <?php
    require_once '../include/head.php'
    ?>
<body>
    <div class="container-fluid p-0">
    <?php
    require_once './include/nav.php'
    ?>
    <div class="container py-5">
        <h1>Hello Panel</h1>
    </div>
    </div>
</body>
</html>