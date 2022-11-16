<?php
  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $checkpass = filter_var(trim($_POST['checkpass']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  
  if (mb_strlen($login) < 5 || mb_strlen($login) > 70) {
    echo "Длина логина чисто недопустима";
    exit();
  }

  if (mb_strlen($name) < 3 || mb_strlen($name) > 50) {
    echo "Длина имени чисто недопустима";
    exit();
  }
  
  if (mb_strlen($pass) < 3 || mb_strlen($pass) > 6) {
    echo "Длина пароля чисто недопустима (3-6 символов!)";
    exit();
  }

  if (mb_strlen($pass) != mb_strlen($checkpass)) {
    echo "Пароль не совпадает с введённым!";
    exit();
  }
  
  $pass=hash('sha256','$pass'); //$pass."ghtghtghj"
  $checkpass=hash('sha256','$checkpass'); //$checkpass."ghtghtghj"
  
  $mysql=new mysqli('localhost:53724','root','','authbase');
  $mysql->query("INSERT INTO auth (login, pass, name) VALUES ('$login', '$pass', '$name')");
  $mysql->close();
  
  header('Location: /');
?>