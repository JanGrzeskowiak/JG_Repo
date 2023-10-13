<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona Główna</title>
    <link rel="stylesheet" href="./css/cssik.css"/>
</head>
<body>
    <?php require './partials/nav.php';
    ?>
    <?php
        include_once './partials/functions.php';
    ?>
    <Main>
    <?php
         echo renderHeader("Strona Główna", 1);
    ?>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat beatae commodi natus laborum dicta, incidunt libero? Consequuntur obcaecati numquam, quidem ex accusantium facilis nemo quibusdam suscipit officia! Adipisci, quo ipsum.</p>
    </Main>
    <?php include './partials/footer.php';
    ?>
    
</body>
</html>