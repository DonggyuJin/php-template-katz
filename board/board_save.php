<?php
include "../dbconn.php";
?>

    <?php 
        
        if(!session_id()) {
            session_start();
        }

        $username = $_SESSION['username'];

        if(isset($username) and isset($_POST['title']) and isset($_POST['content'])){
        $title = $_POST['title'];
        $content = $_POST['content'];
        $regdate = date("Y-m-d H:i:s");

        // $tmpfile =  $_FILES['file']['tmp_name'];
        // $origin_name = $_FILES['file']['name'];
        // $filename = iconv("UTF-8", "EUC-KR", $origin_name);
        // $folder = "./upload/".$filename;
        // move_uploaded_file($tmpfile,$folder);

        


        $write_query = $conn->prepare("insert into katz_board(title,content,username,regdate) values(?,?,?,?);");
        $write_query->bind_param("ssss",$title,$content,$username,$regdate);
        $write_query->execute();
        $write_query->close();

        echo("<script> 
            alert('게시글이 작성되었습니다.');
            document.location.href='board_list.php';
            </script>");

        }
    ?>