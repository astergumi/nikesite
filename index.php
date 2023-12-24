<?php 
require_once('php/connect.php');
$stmt=$pdo->prepare("SELECT * FROM product where count=1");
$stmt->execute();
$result=$stmt->fetchAll()

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Russia</title>
    <link rel="icon" href="img/ico/icon.ico">
    <link rel="stylesheet" href="css/style.css">
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

        <div class="all">
            <input checked type="radio" name="respond" id="desktop">
                <article id="slider">
                    <input checked type="radio" name="slider" id="switch1">			
                    <input type="radio" name="slider" id="switch2">
                    <input type="radio" name="slider" id="switch3">
    
    
                    <div id="slides">
                        <div id="overflow">
                            <div class="image"><a href="index.html">
                           
                                <article><img src="img/14.png"></article>
                                <article><img src="img/12.jpg"></article>
                                <article><img src="img/13.jpg"></article>
                                <article><img src="img/11.png"></article>
                                <article><img src="img/15.jpg"></article>
                                </a>
                            </div>
                                 </div>
                        </div>
                        <div id="controls">
                            <label for="switch1"></label>
                            <label for="switch2"></label>
                            <label for="switch3"></label>
          
                        </div>
                        
                        <div id="active">
                            <label for="switch1"></label>
                            <label for="switch2"></label>
                            <label for="switch3"></label>
     
                        </div>
    
                </article>
    
            </div>
            
            <div class="novinki">
             <h1>НОВИНКИ</h1>
             <hr size=1px color="red">
            </div>
            <div class="main_container">
         <div class="containers">

         <?php 
                                foreach ($result as $value) {
				
				?>
                 <div class="container_items">
                 <p><a href="#"><img src="img/mainitems/<?echo $value ['imgmain']?>"></a></p>
                    <h1><?echo $value ['name_product']?></h1>
                    <div class="texts">
                    
                  </div>
                 
                      </div> 
                      <?}?>
                          </div>
                          </div>
                            
                            <hr size=1px color="blue">


                            <div class="novinki">
                              <h1>РОЛИКИ НАШИХ ПАРТНЕРОВ</h1>
                              <hr size=1px color="blue">
                             </div>

<div class="video">
  <div class="videowidth">
  
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/HazM07-G9Z0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/N6ZFbywmRdo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/eCrc_7Z_4xI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/bB7HsGFHSVk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                        </div>
                          </main>

    <footer>

    
<br><nav class="mail"><a href="mailto:oliveralmedia@gmail.com">nikerussia@gmail.com</a></nav>

<div class="social"><a href=""><img src="img/footeritems/paypal.png"></a>
  <a href=""><img src="img/footeritems/whatsapp.png"></a>
  <a href="https://www.instagram.com/lennyfess/"><img src="img/footeritems/instagram.png"></a>
</div>
    </footer>
    
</body>
</html>