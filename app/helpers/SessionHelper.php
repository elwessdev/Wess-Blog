<?php
  function checkLogin() {
    if (isset($_SESSION['user_id'])) {
      header('Location: /blog/public/');
    }
  }
?>