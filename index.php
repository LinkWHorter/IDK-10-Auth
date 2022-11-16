<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css" />
  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
	<title>Second IDK-10: Auth.me</title>
</head>
<body>
  <?php 
    if(isset($_COOKIE['user']) == false):
  ?>
  <div class="dived">
  <div class="mask"></div>
  <div id="btn-up-div">
    <button class="btn-up" id="btn-reg">Регистрация</button>
  </div>
 <div id="btn-up-div">
    <button class="btn-up" id="btn-log">Логин</button>
  </div>
  
  <div id="showreg">
    <div class="btn-close" id="btn-reg-close">
      <span>×</span>
    </div>
    <h2>Регистрация на сайте</h2>
    <hr>
    <form action="logregex/check.php" method="post">
    <li><input type="text" placeholder="Введите никнейм" name="login"></li>
    <li><input type="text" placeholder="Введите имя" name="name"></li>
    <li><input type="text" placeholder="Введите пароль" name="pass"></li>
    <li><input type="text" placeholder="Повторите пароль" name="checkpass"></li>
    <hr>
    <button class="subm" type="submit">Зарегистрировать</button>
    </form>
  </div>
  <div id="showlog">
    <div class="btn-close" id="btn-log-close">
      <span>×</span>
    </div>
    <h2>Залогиниться на сайте</h2>
    <hr>
    <form action="logregex/login.php" method="post">
    <li><input type="text" placeholder="Введите никнейм" name="login"></li>
    <li><input type="text" placeholder="Введите пароль" name="pass"></li>
    <hr>
    <button class="subm">Логин</button>
    </form>
  </div>
  </div>
  <?php else: ?>
  <div id="showmess">
  <p>Здорова, <span><?=$_COOKIE['user']?></span>. Чтобы выйти, нажми <a href="logregex/exit.php">здесь</a>.</p>
  </div>
  <?php endif; ?>
  <script src="script.js">
  </script>
</body>