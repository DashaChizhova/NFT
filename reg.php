<?php
// session_start();
 require_once 'include/db_connection.php'; 
 require_once 'include/classes.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reg</title>

    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/setka.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php include('include/header.php'); ?> 
  <section class="form">
    <div class="container">
        <div class="row justify__content__center form__shadow">
            <div class="col-5 form__block">
                <h2 class="form__title">Welcome!</h2>
                <!-- <p class="form__subtitle">Register to make full use of our resource.</p> -->

                <form enctype="" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div><input class="form__input" type="text" name="login" placeholder="Login" id=""></div>
                    <div><input class="form__input" type="text" name="username" placeholder="Name" id=""></div>
                    <div><input class="form__input" type="tel" name="phone" placeholder="Phone" id=""></div>
                    <div class="warning_message"><span class="warning_message_text">Поле обязательно для заполнения</span></div>
                    <div><input class="form__input" type="email" name="email" placeholder="Email" id="emailInput"></div>
                    <div><input class="form__input" type="password" name="password" placeholder="Password" id=""></div>
                    <!-- <div><input class="form__input" type="password" name="repeat_password" placeholder="Repeat at password" id=""></div> -->
                    <!-- <div><input class="form__input" type="file" name="avatar" placeholder="Your photo" id=""></div> -->
                    <div><input type="text" name="role" value="user" style="display: none;" id=""></div>
                    <input class="form__btn" type="submit" value="Send">
                </form>
              
                <p class="form__polit">By clicking on the button you agree to the privacy policy</p>

            </div>
            <div class="col-4 form__image-aut form__image-reg">
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