<?php
 require_once 'include/db_connection.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lk</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/setka.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body style="background-color: #F9F9F9;">
<?php include('include/header.php'); ?>


  <article class="article">
   
    <div class="container " >
        <!-- <div class="row bread">
            <ul>
                <li class="bread__item"><a class="bread__link" href="index.php">Home</a></li>
                <li class="bread__item"><img class="bread__img" src="img/ic_outline-keyboard-arrow-right.svg" alt=""></li>
                <li class="bread__item"><p class="bread__name">Personal account</p></li>
            </ul>
        </div> -->
        <div class=" lk__main_img">
            <div class="lk__img"></div> 
        </div>
        <div class="row ">
          
            
            <div class="col-4 lk__info">
                <img class="article__logo" src="img/avatar.png" alt="">
                <div class="article_info">
                    <div>
                        <h2 class="article__name">HarryK.</h2>
                        <p class="article__mintext">@Harryknf</p>
                       
                    </div >
                    
                        <div class="follow__block"><a href="#" class="nav__btn follow__btn">FOLLOW +</a></div>
                </div>
                <ul>
                    <li class="footer__item"><a href="#" class="footer__link"><img  src="img/lksoc/inst.png" alt=""></a></li>
                    <li class="footer__item"><a href="#" class="footer__link"><img  src="img/lksoc/twi.png" alt=""></a></li>
                    <li class="footer__item"><a href="#" class="footer__link"><img  src="img/lksoc/facebook.png" alt=""></a></li>
                </ul>
                <hr>
               
                <p class="article__mintext">The artist who transforms the intangible into priceless assets with their 
                    incredible NFT creations. From stunning visuals to mind-bending concepts,</p>
                
              
                <hr>
                <ul class="k__ul lk__ul">
                    <li class="nav__item"> <h2 class="k__number">86 ETH</h2><h3 class="k__caption">Total Sales</h3></li>
                    <li class="nav__item"><h2 class="k__number">12K</h2><h3 class="k__caption">Followers</h3></li>
                    <li class="nav__item"> <h2 class="k__number">587</h2><h3 class="k__caption">Followings</h3></li>
                </ul>
              
                    <hr>
            </div>
            <div class="col-8 article__left">
                
                   <ul class="lk__list">
                    <li class="lk__item"><a class="lk__link lk__link__active" href="lk.php">Collection</a></li>
                    <li class="lk__item"><a class="lk__link" href="lk-add.php">Add a project</a></li>
                   </ul>


               

           
                <div class="row">
                    <div class="col-3 project__item">
                        <a href="#" class="project__border"><img class="project__img" src="/img/mountains.png" alt=""></a>
                        <h2 class="project__title">Sun-Glass</h2>
                        <br>
                        <h3 class="project__category" >Current bid</h3>
                        <div class="project__price" >
                            <img class="project__logo" src="/img/currency.png" alt=""> 
                            <h2 class="">1.75</h2>
                        </div> 
                        <a href="#" class="nav__btn project__btn">Place Bid</a> 
                        <div class="row justify__content__between align__items__center">
                            <!-- <div class="col-auto">
                                <a class="lk__ed" href="lk-edit.php?id=<?= $resArticle['id'] ?>">Edit</a>
                                <a class="lk__del" href="admin/delete/project.php?id=<?= $resArticle['id'] ?>">Delete</a>
                            </div> -->
                            <!-- <div class="col-auto">
                                <ul>
                                    <li class="proect__like">79</li>
                                    <li class="proect__glass">4k</li>
                                </ul>
                            </div> -->
                        </div>
                    </div>
              
             
        
              

                    
                </div>
                
            </div>
            
        </div>
    </div>
</article>


<?php include('include/footer.php'); ?>


    <script src="js/pages.js"></script>
</body>
</html>