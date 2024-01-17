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
        $listJokes=array(
            "— Чем в России отличается свадьба от похорон?<br>— На одного пьяного меньше.",
           "Вася так быстро одевал свой шерстяной свитер, что его убило током.",
            "— Какую песню вы бы отказались петь на похоронах?<br>— \"Позови меня с собой\".",
            "Уборщица на Титанике в последние 20 минут задолбалась тряпку выжимать.",
            "Больной пошел на поправку. Но не дошел.",
            "Ритуальная компания \"Аист\" — Мы вас принесли, мы и унесём!",
            "Обидно, когда дождалась парня из армии, а он тебя из тюрьмы — нет.",
            "В аду все женщины будут любить тебя, но только как друга.",
            "Люди похожи на снежинки. В мире нет двух одинаковых.<br>И они тоже выглядят очень грустно, когда падают на лобовое стекло машины.",
            "Добрая и сильная девочка насмерть закидала утку хлебом.",
            "Боря, всё детство провёл с отцом на рыбалке, поэтому он так и не научился разговаривать."
            );

    //Display all the jokes on the page
        // for($i=0; $i<11; $i++){
        //     echo "<p>$listJokes[$i]</p><br>";
        // }
    
    //Display random joke
    $ramdomJoke = $listJokes[array_rand($listJokes)];
    echo "<p>$ramdomJoke</p>";

    ?>
    
   <footer>
    <p>© 2024 OxY</p>
   </footer>
</body>
</html>