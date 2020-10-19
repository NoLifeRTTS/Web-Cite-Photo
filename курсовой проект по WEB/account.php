<?php
    session_start();
    $conn = mysqli_connect('localhost', 'mysql', 'mysql');
    $select_db = mysqli_select_db($conn, 'dbstore');
    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        $username = $_SESSION['username'];
        $password = $_SESSION['password'];
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
        }
        else {
            $query = "SELECT email FROM users WHERE username = '$username' and password = '$password' ";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
            //$count = mysqli_num_rows($result);
            $row = mysqli_fetch_row($result);
            $_SESSION['email'] = $row[0];
            $email = $_SESSION['email'];
            }
    }
    else {
        $username = "нету";
        $password = "нету";
        $email = "нету";
    }

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
            <a href="#"><img src="img/icons/user.png" alt="myaccount" class="my-account" id="account"></a>
            <a href="#"><img src="img/icons/basket.png" alt="mybasket" class="my-basket"></a>
        </section>
        <!-- БЛОК НАВИГАЦИИ -->
        <section class = "navigation">
            <nav>
                <input type="checkbox" id="checkbox-menu" />
                <label for="checkbox-menu">
                <ul class="menu touch">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="service.html">Sevice</a></li>
                    <li><a href="#contact" id="Down">Contact</a></li>
                </ul>
                <span class="toggle">☰</span>
                </label>
            </nav>
        </section>
    </header>
    <main>
        <section class = "account wrapper">
            <div class="account__title">
                <h2 id = "persinfo">Personal Information</h2>
            </div>
            <?php
              if(isset($_SESSION['username'])) { 
            ?>
            <div class="account__info">
                <div class="personalInfo">
                    <p class = "personalInfo__info">E-mail</p>
                    <p class = "personalInfo__subinfo"><?php echo $email ?></p>
                </div>
                <div class="personalInfo">
                    <p class = "personalInfo__info">Username</p>
                    <p class = "personalInfo__subinfo"><?php echo $username ?></p>
                </div>
                <div class="personalInfo">
                    <p class = "personalInfo__info">Password</p>
                    <p class = "personalInfo__subinfo"><?php echo $password ?></p>
                </div>
                <div class="logout">
                    <a href="logout.php">Logout</a>
                </div>
            </div>
            <?php } ?> 
        </section>
        <!-- Блок Желания-->
        <section class = "wrapper wishes">
          <div class="wishes__title">
            <h2 id = "wishes">My wishes</h2>
            <div class="wishes__block">
            <?php
              $query1 = "SELECT productname, link, description, price, basketid FROM wishes WHERE username = '$username' ";
              $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
              if($result1) {
                $rows = mysqli_num_rows($result1); // количество полученных строк
                for ($i = 0 ; $i < $rows ; ++$i) {
                  $row = mysqli_fetch_row($result1);
                  ?>
                    <div class="wishes__block__product">
                        <img src="<?php echo $row[1] ?>" alt="polaroid">
                        <div class="wishes__block__product__container">
                            <p class="name"><?php echo $row[0] ?></p>
                            <p class = "description"><?php echo $row[2] ?></p>
                            <div class="wishes__block__product__container__info">
                                <div class="money"><?php echo $row[3] ?> ₽</div>
                                <div class="info">
                                    <a href="#"><i class="fas fa-shopping-basket" id = "<?php echo $row[4] ?>"></i></a>
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
        <!-- Блок Корзина-->
        <section class = "wrapper basket">
          <div class="basket__title">
            <h2 id = "basket">My basket</h2>
            <?php
              if(isset($_SESSION['username'])) { 
            ?>
            <div class="basket__block">
            <?php
              $query2 = "SELECT productname, description, price, unicid FROM basket WHERE username = '$username' ";
              $result2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
              if($result2) {
                $rows2 = mysqli_num_rows($result2); // количество полученных строк
                
                  echo "<table><tr><td>Product name</td><td>Description</td><td>Price</td><td>Delete</td></tr>";
                  for ($i = 0 ; $i < $rows2 ; ++$i) {
                      $row2 = mysqli_fetch_row($result2);
                      echo "<tr>";
                      for ($j = 0 ; $j < 3 ; ++$j) {
                        if ($j == 2) {
                          echo "<td class = 'price'>$row2[$j]</td>";
                       } else {
                          echo "<td>$row2[$j]</td>";
                        }    
                      }
                      $a = $i+1;
                      echo "<td><a href='#del' id = '$row2[3]' class = 'delete'>Удалить $a товар</a></td></tr>";
                  }
                  echo "</table>";
                  ?>
                  <br>Итого: <input type="text" id = "sum" value = "" readonly>
                  <button class = "clear" id = "clrbtn">Clear Basket</button>    
                 <?php } ?>
            </div>
            <?php } ?> 
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
      <!-- ПОДКЛЮЧЕНИЕ JQUERY-->
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script  src="https://code.jquery.com/jquery-migrate-3.3.0.min.js"></script>
       <!-- ПОДКЛЮЧЕНИЕ СВОИХ СКРИПТОВ -->
      <script src="js/script.js"></script>
      <script src="js/ajax.js"></script>
      <script src="js/count.js"></script>
</body>
</html>