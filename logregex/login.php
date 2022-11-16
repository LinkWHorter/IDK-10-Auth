<?php
  $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  
  $pass=hash('sha256','$pass'); //$pass."ghtghtghj"
  
  $mysql=new mysqli('localhost:53724','root','','authbase');
  
  $result = $mysql->query("SELECT * FROM auth WHERE login = '$login' AND pass = '$pass'");
  $user = $result->fetch_assoc();
  if(count((array)$user) == 0) : ?>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <div id="showmess"><p> Такой пользователь не найден!<p></div>
<?php else:
  
  setcookie('user', $user['name'], time() + 420, "/");
  
  $mysql->close();
  
  header('Location: /');
  exit();
  endif;
?>