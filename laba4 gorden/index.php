<?php
    $xml=simplexml_load_file("data.xml");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel = "stylesheet" href = "src/css/style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Nunito:wght@700&family=Poppins:wght@500&family=Raleway:wght@500&family=Work+Sans:wght@400;500&display=swap" rel="stylesheet">

    <title>Laba-1-i-2</title>

</head>

<body>

    <section class="frame-welcome">

        <img class= "img-1" src="src/img/img-1.png" alt="">
        <div>

            <header class="links-sign">

                <img class= "button" src="src/icons/mag-glass-icon.svg" alt="">
                <img class= "button" id= "sc" src="src/icons/shopping-cart-icon.svg" alt="">

                <a href="" id="sign_up_link">Sign Up</a>
                <a href="" id="sign_in_link">Sign In</a>

            </header>

            
            <div class="text-welcome">
                <h1>Kembang Flower Mantap</h1>

                <p class="txt-1">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
            </div>

        </div>

    </section>



    <section class= "benefits">
        <div class= "container">

            <img class= "icon" src="src/icons/truck-icon.svg" alt ="">

            <h2>Fast <br> Delivery</h2>

            <p class= "txt-2">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
            </p>
            
        </div>

        <div class= "container">

            <img class= "icon" src="src/icons/headphones-icon.svg" alt ="">

            <h2  id= "service">Great Customer Service</h2>

            <p class= "txt-2">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
            </p>

        </div>

        <div class= "container">

            <img class= "icon" src="src/icons/plant-icon.svg" alt ="">

            <h2>Original <br> Plants</h2>

            <p class= "txt-2">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
            </p>

        </div>

        <div class= "container">
            
            <img class= "icon"  src="src/icons/dollar-icon.svg" alt ="">

            <h2> Affordable <br> Price</h2>

            <p class= "txt-2">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
            </p>

        </div>

    </section>



    <section class= "featured_plants">

        <div>

            <h3>Featured Plants</h3>
            <a href="create.php">?????????????? ?????????? ??????????</a>
            <div class= "plant_items">
            
                <?php foreach($xml->item as $item) { ?>

                    <div class= "plant_item">
                        <img class= "plant_pict" src="<?php echo $item->pict ?>" alt=""> 
                        <h4 class= "plant_name"> My Plants </h4>
                        <div class= "plant_price"> <?php echo $item->price?> </div>

                        <a class="text" href="change.php?id=<?php echo $item['id'] ?>">???????????????? ??????????</a>
                        <br>
                        <a class ="text" href="delete.php?id=<?php echo $item['id'] ?>">?????????????? ??????????</a>
                        <br>
                        
                    </div>

                <?php } ?>
            
                

                <div class= "plant_item">

                    <img class= "plant_pict" src="src/img/Landak Plants.png">

                    <h4 class= "plant_name"> Landak Plants </h4>

                    <div class= "plant_price"> IDR 105.000 </div>

                </div>

                <div class= "plant_item">

                    <img class= "plant_pict" src="src/img/Kecubung Plants-1.png">

                    <h4 class= "plant_name"> Kecubung Plants </h4>

                    <div class= "plant_price"> IDR 85.000 </div>

                </div>

                <div class= "plant_item">

                    <img class= "plant_pict" src="src/img/Kecubung Plants-2.png">

                    <h4 class= "plant_name"> Kecubung Plants </h4>

                    <div class= "plant_price"> IDR 85.000 </div>

                </div>

                <div class= "plant_item">

                    <img class= "plant_pict" src="src/img/Kecubung Plants-3.png">

                    <h4 class= "plant_name"> Kecubung Plants </h4>

                    <div class= "plant_price"> IDR 85.000 </div>

                </div>

            </div>

        </section>



        <section class= "frame-slogan">

            <div>

                <div class= "slogan">
                    Buy more plants, it helps you to be relaxed
                </div>

                <p class= "txt-3">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi gravida gravida aliquam. Pellentesque et lobortis nisl. Sed et mauris justo. Nulla eu enim non mauris maximus dignissim. Maecenas vitae eros sapien. Quisque pellentesque tempus dignissim.  
                </p>

                <img id="img-2" src= "src/img/img-2.png">

            </div>
            
            <img id="img-3" src= "src/img/img-3.png">
        
        </div>
        
    </section>



    <section class= "adv">

        <div class="ad_block">

            <div class= "phrase"> Get your favourites plant on <br> our shop now </div>

            <a href="" id="visit_shop_link">Visit Shop</a>

            </div>

        </div>

        <img id="img-4" src= "src/img/img-4.png">

    </section>
    
    <footer>

        <div class= "adress box">

            <div class= "logo"> PLANTKU </div>

            <div class= "house"> Plantku House </div>

            <p class= "txt-4">
                Jl. Laksda Adisucipto No.51, Demangan, Kec. Depok, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55282
            </p>

        </div>

        <div class= "ppl box">

            <div class= "hn"> Perusahaan </div>

            <div class= "txt-5"> Tentang Kami </div>

            <div class= "txt-5"> Hubungi Kami </div>

        </div>

        <div class= "ppl box">

            <div class= "hn"> Produk </div>

            <div class= "txt-5"> Tanaman </div>

            <div class= "txt-5"> Tanaman Lain </div>
            
        </div>

        <div class= "email box">

            <div class= "hn"> Berlangganan Email Kami </div>
            
            <div><input type="email" placeholder = "Masukan Alamat Email"></div>
            
            <a href="" id="submit">Submit</a>
            
        </div>

    </footer>

</body>

</html>
