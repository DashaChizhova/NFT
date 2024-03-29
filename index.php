<?php
//session_start(); 
 require_once 'include/db_connection.php'; 
 require_once 'include/classes.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/setka.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
  
<?php include('include/header.php'); ?>

  <header class="header">
        <div class="container">
            <div class="row align__items__center">
                <div class="header__utp">
                    <hr class="header__hr">
                    <br>
                    <h1 class="header__title">Discover And</h1>
                    <h1 class="header__title">Create NFTs</h1>
                    <h2 class="header__subtitle">Discover, Create and Sell NFTs On Our NFT Marketplace <br> With Over Thousands Of NFTs And Get a <b class="bold__text">$20 bonus</b> .</h2>
                    <br>
                    <li class="nav__item"><a href="#" class="nav__btn">Explore More</a></li>
                    <li class="nav__item"><a href="reg.php" class="nav__btn nav__btn2 ">Create NFT</a></li>

                    <ul class="k__ul">
                        <li class="nav__item"> <h2 class="k__number">430K+</h2><h3 class="k__caption">Art Works</h3></li>
                        <li class="nav__item"><h2 class="k__number">159K+</h2><h3 class="k__caption">Creators</h3></li>
                        <li class="nav__item"> <h2 class="k__number">87K+</h2><h3 class="k__caption">Collections</h3></li>
                    </ul>
                </div>

                <div class="header__utp header__imgs">
                  <img class="header__img header__img1" src="img/pie.png" alt="nft">
                  <img class="header__img header__img2" src="img/sun.png" alt="nft">
                 
                 
                    <div class="arrow">
                        <a href="reg.php" class="head__btn head__btn__left">←</a>
                        <a href="reg.php" class="head__btn head__btn__right">→</a>
                   </div>
                
                </div>
            </div>
        </div>
    </header>

    <section class="project project1">
        <div class="main__title main__title1">
           <h1>Weekly - Top NFT</h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-3 project__item">
                    <a href="#" class="project__border"><img class="project__img" src="img/mountains.png" alt=""></a>
                        <h2 class="project__title">Sun-Glass</h2>
                        <br>
                        <h3 class="project__category" >Current bid</h3>
                        <div class="project__price" >
                            <img class="project__logo" src="img/currency.png" alt=""> 
                            <h2 class="">1.75</h2>
                        </div> 
                        <a href="#" class="nav__btn project__btn">Place Bid</a> 
                </div>
            </div>
        </div>
       <div class="arrow">
            <a href="reg.php" class="head__btn head__btn__left">←</a>
            <a href="reg.php" class="head__btn head__btn__right">→</a>
       </div>
           
    </section>

    <!-- <section class="project">
        <div class="main__title ">
           <h1>Top Collection</h1>
       </div>
        <div class="container">
            <div class="row">
                <div class="col-3 project__item">
                    <a href="#" class="project__border"><img class="project__img" src="img/mountains.png" alt=""></a>
                        <h2 class="project__title">Sun-Glass</h2>
                        <br>
                        <h3 class="project__category" >Current bid</h3>
                        <div class="project__price" >
                            <img class="project__logo" src="/img/currency.png" alt=""> 
                            <h2 class="">1.75</h2>
                        </div> 
                        <a href="#" class="nav__btn project__btn">Place Bid</a> 
                </div>
            </div>
        </div>
       <div class="arrow">
            <a href="reg.php" class="head__btn head__btn__left">←</a>
            <a href="reg.php" class="head__btn head__btn__right">→</a>
       </div>
           
    </section> -->




    <?php include('include/footer.php'); ?>

    <script src="js/pages.js"></script>
</body>
</html>