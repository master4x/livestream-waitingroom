<?php
session_start();

include ('logindata.php');

if (isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
}

if (isset($_POST['username'])) {
    if ($userinfo[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
    } else {
    }
}
?>

<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="Konfirmation Siemshof im Livestream von Zuhause verfolgen.">
  <meta name="author" content="Leon Niklas Kelle">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Livestream Waitingroom</title>
  <link rel="stylesheet" href="./style.css" />
  <link rel="shortcut icon" href="./favicon.png" />
  <link rel="preconnect" href="https://www.youtube.com/" />
</head>

<body>
  <div class="wrapper">
    <div class="regbar">
      <h1>Livestream Waitingroom</h1>
      <div class="navthing">
        <h2 class="textline">
          <a href="#" id="loginform">Account</a>
        </h2>
        <div class="login">
          <div class="arrow-up"></div>
          <div class="formholder">
            <div class="randompad">
              <?php if($_SESSION[ 'username']): ?>
                You're loggin in as:
                <b><?=$_SESSION['username']?></b>
                <a href="?logout=1" class="green">(Logout)</a>
                <br><br>
              <?php endif; ?>
              <fieldset>
                <form method="POST">
                  <label name="name"><b> Username</b></label>
                  <input type="name" name="username" autocomplete="off" />
                  <label name="password"><b> Password</b></label>
                  <input type="password" name="password" autocomplete="off" />
                  <button value="submit" name="submit" id="iframe btn">Login</button>
                </form>
              </fieldset>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="textbox">
      <h3>Welcome to my livestream event!</h1> <br>
        <p>To grand acsess follow these steps: <br></p>
        <ol start="1">
          <li> Click on "Account" (top left corner)</li>
          <li> Enter the login credentials assigned to you and press "Login"</li>
          <li> Enjoy the event live from a distance!</li>
        </ol>
        <p><i>If you are having display problems, please try to access the website on a computer or notebook.</i></p>
    </div>
    <?php if($_SESSION[ 'username']): ?>
    <div class="iframebox">
      <iframe id="player1" src="https://www.youtube-nocookie.com/embed/P2OCJ8b2RxQ?vq=hd1080&autoplay=1&loop=1&showinfo=0&rel=0&iv_load_policy=3" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope" allowfullscreen></iframe>
    </div>
    <?php endif; ?>
  </div>
  <div class="footer">
    <p>© 2020 All rights reserved. | Created by <a class="green" rel="noopener" target="_blank" href="https://buymeacoff.ee/lnkelle">Leon Niklas Kelle</a>
      | Problems with the website? <a class="green" href="https://github.com/master4x/livestream-waitingroom/issues">Create an issue.</a>
    </p>
  </div>
  <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="./script.js"></script>
</body>

</html>
