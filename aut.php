<?php
 require_once 'include/db_connection.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aut</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/setka.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<?php include('include/header.php'); ?>

  <section class="form">
    <div class="container">
        <div class="row justify__content__center form__shadow">
            <div class="col-4 form__block">
                <h2 class="form__title">Welcome!</h2>
                <form enctype="" method="post" action="">
                    <div><input class="form__input" type="email" name="email" placeholder="Email" id=""></div>
                    <div><input class="form__input" type="password" name="password" placeholder="Password" id=""></div>
                    <input class="form__btn" type="submit" value="Send">
                </form>
                <!-- <p class="form__polit">By clicking on the button you agree to the privacy policy</p> -->
            </div>
            <div class="col-4 form__image-aut">
                <img class="aut__img" src="img/pie.png" alt="nft">
                <h1 class="main__title main__aut__title">Start Your Own <br>NFT Gallery</h1>
                <h2 class="aut__subtitle">CloseSea Is A Great Platform For Discover <br> Largest NFTs And Other Stuff !!</h2>
            </div>
        </div>
    </div>
</section>

 <?php include('include/footer.php'); ?>


    <script src="js/pages.js"></script>
</body>
</html>