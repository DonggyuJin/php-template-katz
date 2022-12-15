<?php 

    include "../dbconn.php";

    $userid = $_GET['userid'];
    $userpw = $_GET['userpw'];

    $login_query = "select * from katz_user where username='$userid'";
    $login_result = $conn->query($login_query);
    $login_confirm = mysqli_num_rows($login_result);

    if($login_confirm) {

        $row = mysqli_fetch_array($login_result);

        if($row['userpw'] == $userpw){
            mysqli_free_result($login_result);
        } else {
            ?>
            <script>
                alert("아이디 또는 비밀번호를 확인해주세요.");
                history.back();
            </script>
            <?php
        }
    } else {
        ?> 
        <script>
            alert("아이디 또는 비밀번호를 확인해주세요.");
            history.back();
        </script>
        <?php
    }

?>