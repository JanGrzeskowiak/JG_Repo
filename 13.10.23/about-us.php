<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O nas</title>
    <link rel="stylesheet" href="./css/cssik.css"/>
</head>
<body>
    <?php require './partials/nav.php';
    ?>
    <?php
        include_once './partials/functions.php';
    ?>
    <main>
    <?php
         echo renderHeader("O Nas", 1);
    ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis asperiores inventore, dolorem commodi adipisci debitis est quasi accusantium. Iste hic, veniam consequatur eum sint vitae ullam laborum quaerat quo dolorem?</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus doloremque corrupti nisi beatae quia voluptate labore at, incidunt officiis corporis, iste dolor assumenda ipsam maxime facilis dolorem amet sapiente pariatur!</p>
    <?php include './partials/footer.php';
    ?>
    </main>
</body>
</html>