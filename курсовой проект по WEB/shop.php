<?php 
    session_start();
    $conn = mysqli_connect('localhost', 'mysql', 'mysql');
    $select_db = mysqli_select_db($conn, 'dbstore');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PhotoRTTS</title>
    <!-- ИКОНКА НА ВКЛАДКЕ СТРАНИЦЫ -->
    <link rel="shortcut icon" href="img/icons/logo.png" type="image/png">
      <!-- ПОДКЛЮЧЕНИЕ ФАЙЛА СО СТИЛЯМИ -->
    <link rel="stylesheet" href="css/style.css">
      <!-- ПОДКЛЮЧЕНИЕ KIT ДЛЯ ИКОНОК -->
    <script
    src="https://kit.fontawesome.com/dd4a236084.js"
    crossorigin="anonymous">
    </script>
</head>
<body>
    <!-- СТРЕЛКА ДЛЯ ПРОКРУТКИ СТРАНИЦЫ ВВЕРХ -->
    <div id="toTop">
        <div class="arrow">
          <span class="arrow__left"></span>
          <span class="arrow__right"></span>
       </div>
    </div>
    <!-- ШАПКА САЙТА -->
    <header>
        <!-- БЛОК ШАПКИ -->
        <section class = "head">
            <a href=""><img src="img/icons/logo.png" alt="logo" class="logo-img"></a>
            <a href=""><p class="company-name">PhotoRTTS</p></a>
            <?php
                if (isset($_SESSION['username'])) {
                    ?>
                    <a href="account.php"><img src="img/icons/user.png" alt="myaccount" class="my-account" id="acount"></a>
                <?php
                }
                else {
                    ?>
                    <a href="#"><img src="img/icons/user.png" alt="myaccount" class="my-account" id="account"></a>
                    <?php
                }
            ?>
            <a href="#"><img src="img/icons/basket.png" alt="mybasket" class="my-basket"></a>
        </section>
        <!-- БЛОК НАВИГАЦИИ -->
        <section class = "navigation">
            <nav>
                <input type="checkbox" id="checkbox-menu" />
                <label for="checkbox-menu">
                <ul class="menu touch">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="service.html">Sevice</a></li>
                    <li><a href="#contact" id="Down">Contact</a></li>
                    <li><a href="account.php">My Account</a></li>
                </ul>
                <span class="toggle">☰</span>
                </label>
            </nav>
        </section>
    </header>
    <main>
        <!-- БЛОК С ТОВАРАМИ КАТАЛОГА -->
        <section class="shop">
            <div class="wrapper shop__block">
                <h2>SHOP</h2>
                <nav class="shop__block__categories">
                    <label for="checkbox-menu">
                    <ul class="menu touch submenu">
                        <li><a href="#cameras">Cameras</a></li>
                        <li><a href="#objectives">Objectives</a></li>
                        <li><a href="#bestsellers">Bestsellers</a></li>
                        <li><a href="#accessories">Accessories</a></li>
                    </ul>
                    </label>
                </nav>
                <h3 id="cameras">Cameras</h3>
                <div class="shop__block__products">
                    <?php
                        $query1 = "SELECT productname, link, description, price, likeid, basketid FROM store WHERE category = 'cameras' ";
                        $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
                        if($result1) {
                            $rows = mysqli_num_rows($result1); // количество полученных строк
                            for ($i = 0 ; $i < $rows ; ++$i) {
                            $row = mysqli_fetch_row($result1);
                            ?>
                                <div class="shop__block__products__product">
                                    <img src="<?php echo $row[1] ?>" alt="polaroid">
                                    <div class="shop__block__products__product__container">
                                        <p class="name"><?php echo $row[0] ?></p>
                                        <p class = "description"><?php echo $row[2] ?></p>
                                        <div class="shop__block__products__product__container__info">
                                            <div class="money"><?php echo $row[3] ?> ₽</div>
                                            <div class="info">
                                                <?php 
                                                   /* $link = "img/catalog/polaroid1.jpg";
                                                    $description = "Lorem ipsum dolor sit amet consectetur.";
                                                    $price = "3500 ₽"; 
                                                    $_SESSION['link'] = $link;
                                                    $_SESSION['decsription'] = $description;
                                                    $_SESSION['price'] = $price;*/
                                                ?>
                                                <a href="#add"><i class="far fa-heart" id = "<?php echo $row[4] ?>"></i></a>
                                                <a href="#"><i class="fas fa-shopping-basket" id = "<?php echo $row[5] ?>"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <?php
                    }
                }
                ?>
                </div>
                <h3 id="objectives">Obectives</h3>
                <div class="shop__block__products">
                <?php
                        $query1 = "SELECT productname, link, description, price, likeid, basketid FROM store WHERE category = 'objectives' ";
                        $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
                        if($result1) {
                            $rows = mysqli_num_rows($result1); // количество полученных строк
                            for ($i = 0 ; $i < $rows ; ++$i) {
                            $row = mysqli_fetch_row($result1);
                            ?>
                                <div class="shop__block__products__product">
                                    <img src="<?php echo $row[1] ?>" alt="polaroid">
                                    <div class="shop__block__products__product__container">
                                        <p class="name"><?php echo $row[0] ?></p>
                                        <p class = "description"><?php echo $row[2] ?></p>
                                        <div class="shop__block__products__product__container__info">
                                            <div class="money"><?php echo $row[3] ?> ₽</div>
                                            <div class="info">
                                                <?php 
                                                   /* $link = "img/catalog/polaroid1.jpg";
                                                    $description = "Lorem ipsum dolor sit amet consectetur.";
                                                    $price = "3500 ₽"; 
                                                    $_SESSION['link'] = $link;
                                                    $_SESSION['decsription'] = $description;
                                                    $_SESSION['price'] = $price;*/
                                                ?>
                                                <a href="#add"><i class="far fa-heart" id = "<?php echo $row[4] ?>"></i></a>
                                                <a href="#"><i class="fas fa-shopping-basket" id = "<?php echo $row[5] ?>"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <?php
                    }
                }
                ?>
                </div>
                <h3 id="accessories">Accessories</h3>
                <div class="shop__block__products">
                <?php
                        $query1 = "SELECT productname, link, description, price, likeid, basketid FROM store WHERE category = 'accessories' ";
                        $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
                        if($result1) {
                            $rows = mysqli_num_rows($result1); // количество полученных строк
                            for ($i = 0 ; $i < $rows ; ++$i) {
                            $row = mysqli_fetch_row($result1);
                            ?>
                                <div class="shop__block__products__product">
                                    <img src="<?php echo $row[1] ?>" alt="polaroid">
                                    <div class="shop__block__products__product__container">
                                        <p class="name"><?php echo $row[0] ?></p>
                                        <p class = "description"><?php echo $row[2] ?></p>
                                        <div class="shop__block__products__product__container__info">
                                            <div class="money"><?php echo $row[3] ?> ₽</div>
                                            <div class="info">
                                                <?php 
                                                   /* $link = "img/catalog/polaroid1.jpg";
                                                    $description = "Lorem ipsum dolor sit amet consectetur.";
                                                    $price = "3500 ₽"; 
                                                    $_SESSION['link'] = $link;
                                                    $_SESSION['decsription'] = $description;
                                                    $_SESSION['price'] = $price;*/
                                                ?>
                                                <a href="#add"><i class="far fa-heart" id = "<?php echo $row[4] ?>"></i></a>
                                                <a href="#"><i class="fas fa-shopping-basket" id = "<?php echo $row[5] ?>"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    <?php
                    }
                }
                ?>
                </div>
            </div>
        </section>
    </main>
    <!-- ПОДВАЛ СТРАНИЦЫ -->
    <footer>
        <div class="footer">
          <div class="footer__links">
            <div class="footer__link">
              <p>MY ACCOUNT</p>
              <a href="#">my account</a>
              <a href="#">shoping basket</a>
              <a href="#">my wishes</a>
              <a href="#">personal information</a>
            </div>
            <div class="footer__link">
              <p>SERVICE</p>
              <a href="#">printing photos</a>
              <a href="#">cameras repair</a>
              <a href="#">objectives repair</a>
            </div>
            <div class="footer__link">
              <p id="contact">CONTACT</p>
              <a href="#"><i class="fas fa-phone-alt"></i> +7(923)-777-55-86</a>
              <a href="#"><i class="far fa-envelope"></i> alex.shevelev.01@mail.ru</a>
              <a href="#"><i class="fab fa-discord"></i> NoLifeRTTS</a>
            </div>
            <div class="footer__link">
              <p>STAY UP TO DATE</p>
              <a href="#">PhotoRTTS club members receive <br>
                a 15% discount code <br>
                redeemable against all orders. <br>
                New friends get free shipping <br>
                on your first order.</a>
            </div>
          </div>
          <div class="footer__block">
            <div class="footer__block__logo">
              <h3>© PhotoRTTS</h3>
            </div>
          </div>
        </div>
      </footer>
      <!-- Скрытый блок для регистрации -->
      <div class="register">
        <div class="register__inner">
            <h2>Registration</h2>
            <form action="register.php" method="POST">
                <input type="text" name="username" id="username" placeholder="Username" required><br>
                <input type="text" name="email" id="email" placeholder="Email" required><br>
                <input type="password" name="password" id="password" placeholder="Password" required><br>
                <input type="submit" value="Register"><br>
                <a href="#log" id="log"><div>Login</div></a>
            </form>
        </div>
    </div>
    <!-- Скрытый блок для авторизации -->
    <div class="author">
        <div class="author__inner">
            <h2>Login</h2>
            <form action="login.php" method="POST">
                <input type="text" name="username" id="username" placeholder="Username" required><br>
                <input type="password" name="password" id="password" placeholder="Password" required><br>
                <input type="submit" value="Login"><br>
                <a href="#log" id="reg"><div>Register</div></a>
            </form>
        </div>
    </div>
    <!--    Фон для невидимых блоков -->
    <div class="popup__bg"></div>
      <!-- ПОДКЛЮЧЕНИЕ JQUERY -->
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script  src="https://code.jquery.com/jquery-migrate-3.3.0.min.js"></script>
      <!-- ПОДКЛЮЧЕНИЕ СВОЕГО СКРИПТА -->
      <script src="js/script.js"></script>
      <script src="js/ajax.js"></script>
</body>
</html>