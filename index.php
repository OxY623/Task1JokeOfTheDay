<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My first project php</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <h1>Шутка дня</h1>
    <center>
        <img src="image/img.png" alt="Mem" width="400px" height="300px">
    </center>
    <?php
    //Create dict Jokes
        // $listJokes=array(
        //     "— Чем в России отличается свадьба от похорон?<br>— На одного пьяного меньше.",
        //    "Вася так быстро одевал свой шерстяной свитер, что его убило током.",
        //     "— Какую песню вы бы отказались петь на похоронах?<br>— \"Позови меня с собой\".",
        //     "Уборщица на Титанике в последние 20 минут задолбалась тряпку выжимать.",
        //     "Больной пошел на поправку. Но не дошел.",
        //     "Ритуальная компания \"Аист\" — Мы вас принесли, мы и унесём!",
        //     "Обидно, когда дождалась парня из армии, а он тебя из тюрьмы — нет.",
        //     "В аду все женщины будут любить тебя, но только как друга.",
        //     "Люди похожи на снежинки. В мире нет двух одинаковых.<br>И они тоже выглядят очень грустно, когда падают на лобовое стекло машины.",
        //     "Добрая и сильная девочка насмерть закидала утку хлебом.",
        //     "Боря, всё детство провёл с отцом на рыбалке, поэтому он так и не научился разговаривать."
        //     );

    //Display all the jokes on the page
        // for($i=0; $i<11; $i++){
        //     echo "<p>$listJokes[$i]</p><br>";
        // }
    
    //Display random joke
    // $ramdomJoke = $listJokes[array_rand($listJokes)];
    // echo "<p>$ramdomJoke</p>";

    ?>
<!-- Проверка и внесение списка в БД -->
<?php
// //Подключение к БД
// $link = mysqli_connect("localhost", "root", "","jokesbd");
// //Проверка поодключения
// if ($link == false){
//     print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
// }
// else {
//     print("Соединение установлено успешно");
// }

// $res = mysqli_query($link,"SELECT * FROM mytable");
// if ($res == false) {
//     print("Произошла ошибка при выполнении запроса");}
// //Добавление списка в БД
// for ($i=1; $i<11;$i++){
//     $query = "INSERT INTO mytable (ID, NAME) VALUES ('$i', '" . $listJokes[$i-1] . "')";
//     $result = mysqli_query($link, $query);
// if ($result === false) {
//     print("Произошла ошибка при выполнении запроса: " . mysqli_error($link));
// }
// }
// // $result = mysqli_query($link, $query);
// // if ($result === false) {
// //     print("Произошла ошибка при выполнении запроса: " . mysqli_error($link));
// // }

// if ($query == false) {
//     print("Произошла ошибка при выполнении запроса");
//}
try{
$link = mysqli_connect("localhost", "root", "", "jokesbd");

if ($link == false) {
    throw new Exception("<p>Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error()."</p>");
}


$res = mysqli_query($link, "SELECT NAME FROM mytable ORDER BY RAND() LIMIT 1");
if ($res == false) {
    throw new Exception("<p>Произошла ошибка при выполнении запроса</p>");
}

while ($row = mysqli_fetch_assoc($res)) {
    echo "<p>" . $row['NAME'] . "</p>";

}
mysqli_close($link);
}catch (Exception $e) {
    echo $e->getMessage();
    die();
}

?> 
   <footer>
    <p>© 2024 OxY</p>
   </footer>
</body>
</html>