<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
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
         echo renderHeader("Kontakt", 1);
    ?>
    <form id="a">
    <label for="email">Email</label>
    </br>
    <input type="email" id="email" name="email" placeholder="Your Email...">
    </br>
    <label for="text">Wiadomość</label>
    </br>
    <textarea name="text" id="text" cols="30" rows="10"></textarea>
    </br>
    </br>
    <button id="btn">Send</button>
    </form>
</main>
    <?php include './partials/footer.php';
    ?>
    <script src="./js/contact.js"></script>
</body>
</html>