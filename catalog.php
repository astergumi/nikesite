<?php 
require_once('php/connect.php');
$stmt=$pdo->prepare("SELECT * FROM clothes");
$stmt->execute();
$result=$stmt->fetchAll()

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Russia</title>
    <link rel="icon" href="img/ico/ico.ico">
    <link rel="stylesheet" href="css/menu.css">
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
</head>
<body>

    <header>

        <div class="logo"><a href="index.html"><img src="img/logotype/logo.png" alt="logo"></a></div>

<nav>
    <div class="mainlist">
    <a href="index.php">Главная</a>
      <a href="menu.php">Кроссовки</a>
      <a href="catalog.php">Одежда</a>
      <a href="menu.php">Аксессуары</a>
      <a href="delivery.php">Доставка</a>
      <a href="sale.php">Предзаказ</a>
    </div>
</nav>


    </header>

    <main>
             <div class="novinki">
             <h1>Одежда</h1>
             <hr size=1px color="blue">
            </div>
            <div class="main_container">
         <div class="containers">

         <?php 
                                foreach ($result as $value) {
				
				?>
           <div class="container_items">
           <p><a href="#"><img src="img/clothesitems/<?echo $value ['img_clothes']?>"></a></p>
               <h1><?echo $value ['name_clothes']?></h1>
               <div class="texts">
                
              </div>

                 </div>
                 
                 <?}?>
                 <!-- <div class="container_items">
                    <p><a href="#"><img src="img/mainitems/2.png" title="Black Burger Big"></a></p>
                    <h1>TEXT</h1>
                    <h2>270р</h2>
                    <div class="texts">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam illo ut repellat tempora, sequi vitae!</p>
                  </div>
                      </div>

                      <div class="container_items">
                        <p><a href="#"><img src="img/mainitems/7.png" title="Black Burger Original"></a></p>
                        <h1>TEXT</h1>
                        <h2>200р</h2>
                        <div class="texts">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam illo ut repellat tempora, sequi vitae!</p>
                      </div>
                          </div>

                          <div class="container_items">
                            <hr size=1px color="blue">
                            <p><a href="#"><img src="img/mainitems/8.png" title="Black Burger"></a></p>
                            <h1>TEXT</h1>
                            <h2>270р</h2>
                            <div class="texts">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam illo ut repellat tempora, sequi vitae!</p>
                          </div>
                              </div>

                              <div class="container_items">
                                <hr size=1px color="blue">
                                <p><a href="#"><img src="img/mainitems/9.png" title="Black Burger"></a></p>
                                <h1>TEXT</h1>
                                <h2>270р</h2>
                                <div class="texts">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam illo ut repellat tempora, sequi vitae!</p>
                              </div>
                                  </div>

                                  <div class="container_items">
                                    <hr size=1px color="blue">
                                    <p><a href="#"><img src="img/mainitems/10.png" title="Black Burger"></a></p>
                                    <h1>TEXT</h1>
                                    <h2>270р</h2>
                                    <div class="texts">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam illo ut repellat tempora, sequi vitae!</p>
                                  </div>
                                      </div>

                                      <div class="container_items">
                                        <hr size=1px color="blue">
                                        <p><a href="#"><img src="img/mainitems/179.png" title="Black Burger"></a></p>
                                        <h1>TEXT</h1>
                                        <h2>270р</h2>
                                        <div class="texts">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam illo ut repellat tempora, sequi vitae!</p>
                                      </div>
                                          </div>

                                          <div class="container_items">
                                            <hr size=1px color="blue">
                                            <p><a href="#"><img src="img/mainitems/12.png" title="Black Burger"></a></p>
                                            <h1>TEXT</h1>
                                            <h2>270р</h2>
                                            <div class="texts">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam illo ut repellat tempora, sequi vitae!</p>
                                          </div>
                                              </div>

                      <div class="container_items">
                        <hr size=1px color="blue">
                        <p><a href="#"><img src="img/mainitems/3.png" title="Chicken Burger"></a></p>
                        <h1>TEXT</h1>
                        <h2>190р</h2>
                        <div class="texts">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam illo ut repellat tempora, sequi vitae!</p>
                        </div>
         
                          </div>

                          <div class="container_items">
                            <hr size=1px color="blue">
                            <p><a class="nizkie" href="#"><img src="img/mainitems/4.png" title="Texas Burger"></a></p>
                            <h1>TEXT</h1>
                            <h2>250р</h2>
                            <div class="texts">
                              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam illo ut repellat tempora, sequi vitae!</p>
                            </div>
             
                              </div>

                              <div class="container_items">
                                <hr size=1px color="blue">
                                <p><a class="nizkie" href="#"><img src="img/mainitems/5.png" title="Chocolate cocktail"></a></p>
                                <h1>TEXT</h1>
                                <h2>110р</h2>
                                <div class="texts">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam illo ut repellat tempora, sequi vitae!</p>
                                </div>
                 
                                  </div>

                                  <div class="container_items">
                                    <hr size=1px color="blue">
                                    <p><a class="nizkie" href="#"><img src="img/mainitems/6.png" title="Happy Meal"></a></p>
                                    <h1>TEXT</h1>
                                    <h2>170р</h2>
                                    <div class="texts">
                                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam illo ut repellat tempora, sequi vitae!</p>
                                    </div>
                                    </div> -->
                                    </div>
                                    </div>
    </main>
    <footer>

    
<br><nav class="mail"><a href="mailto:oliveralmedia@gmail.com">nikerussia@gmail.com</a></nav>


<div class="social"><a href=""><img src="img/footeritems/paypal.png"></a>
  <a href=""><img src="img/footeritems/whatsapp.png"></a>
  <a href=""><img src="img/footeritems/instagram.png"></a>
</div>
    </footer>
    
</body>
</html>