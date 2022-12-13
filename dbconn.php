<?php 
    $conn = mysqli_connect("localhost", "root", "dong1234", "katz");

    if(!$conn) {
      echo "Error Unable to connect to Mariadb.";
      exit;
    }
  
    /* Set to UTF-8 Encoding */
    mysqli_query($conn, 'set session character_set_connection=utf8;');
    mysqli_query($conn, 'set session character_set_results=utf8;');
    mysqli_query($conn, 'set session character_set_client=utf8;');
    
    // 에러 확인
    // var_dump($conn);
  
    mysqli_query($conn, "SET NAMES utf8");
?>