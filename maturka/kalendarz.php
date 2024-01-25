<?php
$conn = mysqli_connect(
'127.0.0.1',
'root',
'',
'4C_gr2_07',
);
function get_results(){
    global $conn;
    $sql = "SELECT miesiac,rok FROM zadania WHERE dataZadania = '2020-07-01'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()){
        echo"miesiąc: ".$row['miesiac']." rok: ".$row['rok'];
    }
    $result->free_result();
}
function get_results_2(){
    global $conn;
    $sql_2 = "SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'lipiec'";
    $result = $conn->query($sql_2);
    while ($row = $result->fetch_assoc()){
        echo "<section><h5>".$row['dataZadania']."<h5><p>".$row['wpis']."</p></section>";
    }
    $result->free_result();
}
function get_results_3(){
    global $conn;
    $wpis = $_POST['text'];
    $sql_3 = "UPDATE zadania SET wpis = '$wpis' WHERE dataZadania = '2020-07-01'";
    mysqli_query($conn, $sql_3);
}
?>
<?php
get_results_3();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój Kalendarz</title>
    <link rel="stylesheet" type="text/css" href="styl5.css">
</head>
<body>
    <section id="baner1">
        <img src="logo1.png" alt="Mój Kalendarz">
    </section>
    <section id="baner2">
        <h1>Kalendarz</h1>
        <?php
            get_results();
        ?>
    </section>
    <main>
        <?php
        get_results_2();
        ?>
    </main>
    <footer>
        <label for="text">Dodaj Wpis: </label>
        <input type="text" name="text">
        <input type="submit" value="DODAJ">
        <p>Stronę wykonał: 00000000</p>
    </footer>
</body>
</html>