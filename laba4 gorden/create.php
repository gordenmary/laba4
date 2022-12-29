<?php
    if (isset($_POST['submit'])){

        $newpict =$_POST['pict'];
        $newprice =$_POST['price'];

        $xml=simplexml_load_file("data.xml");

        $newt=$xml->addChild('item','');
        $newt->addChild('pict', $newpict);
        $newt->addChild('price', $newprice);
        $newt->addAttribute('id', $xml->count());

        $xml->saveXML('data.xml');
        echo "<script>alert('Новый товар успешно создан!')</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="pict" placeholder="картинка товара">
        <input type="text" name="price" placeholder="цена товара">
        <input type="submit" name="submit" placeholder="Создать!">
    </form>

    <a href="index.php">Назад</a>
</body>
</html>