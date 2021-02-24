<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">

</head>
<body>
     <header class="header">
        <!-- <button class="navbar-toggler" type="button" data-toggler="collapse"></button>
        <span class="navbar-togler-icon"></span> -->
        <div class="container">
            <?php include 'menu.inc.php'?>
        </div>

    </header>

    <section class="greeting ">
        <div class="container">
                <div class="row justify-content-center">
                    <h3 class="greeting-item"><?php echo $p ?></h3>
                </div>
            </div>
    </section>

    <section class="about_me">
        <div class="container">
            <div class="row justify-content-center">
                   <?php include 'myphoto.inc.php' ?>
                <div class="col col-3 fullname">
                    <p>Name: <?php echo $name?>;</p>
                    <p>SurName: <?php echo $surname?>;</p>
                    <p>Age: <?php echo $age?>;</p>
                    <p>City: <?php echo $city?>;</p>
                </div>
        </div>
        </div>
    </section>
    <section class="knowledge">
        <div class="container">
            <div class="row justify-content-center">
                <?php include 'knowledge.inc.php'?>
                <p class="knowledge__text">Число типа int: <?php echo $int ?><br>
                Число типа double: <?php echo $doub ?><br>
                Cумма этих чисел типа double: <?php echo $resd ?><br>
                Переводим результат в int:<?php echo $resi ?><br>
                Просто строка: <?php echo $str ?><br>
                Сложение строки и числа:<?php echo $str.(string)$resd ?><br>
                Путь к файлу с разметкой: <?php echo __FILE__ ?><br>
                Время выполнения блока knowledge: <?php echo microtime(true)-$start?><br>
                </p>
            </div>
        </div>
    </section>
    <article>
        <div class="container">
            <div class="text justify-content-center">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias! 
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                </p>
            </div>
        </div>
    </article>
   <?php 
   include 'footer.inc.php'
   ?>
    
</body>
</html>