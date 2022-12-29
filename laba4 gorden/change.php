<?php
    $id=0;
    $pict='';
    $price='';

    $xml=simplexml_load_file("data.xml");

    if($_SERVER['REQUEST_METHOD']==='GET'){
        $id=$_GET['id'];

        foreach($xml->item as $item){
            if ($item['id']==$id){
                $pict=$item->pict;
                $price=$item->price;
                break;
            }
        }
    } else if ($_SERVER['REQUEST_METHOD']==='POST'){
        $id=$_GET['id'];
        foreach($xml->item as $item){
            if ($item['id'] == $id){
                $item->pict=$_POST['pict'];
                $item->price=$_POST['price'];
                break;
            }
        }
        

        $xml->saveXML('data.xml');
        echo "<script>alert('Данные о товаре успешно обновлены!')</script>";
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
        <input type="text" name="pict" placeholder="картинка товара" value="<?php echo $pict ?>">
        <input type="text" name="price" placeholder="введите цену"value="<?php echo $price ?>">
        <input type="submit" name="submit" placeholder="Создать!">
    </form>
    <a href="index.php">Назад</a>
</body>
</html>