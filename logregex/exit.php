<?php
  setcookie('user', $user['name'] ?? true, time() - 420, "/");
  header('Location: /');
?>