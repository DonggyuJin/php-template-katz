<?php

    if(!session_id()) {
        session_start();
    }

    $_SESSION = array();

    if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
    }

    session_destroy();
    
    echo "<script> alert('로그아웃 하셨습니다.'); document.location.href='/index.php'; </script>"; 
?>