<?php 

    include "../dbconn.php";

    $userid = $_POST['userid'];
    $userpw = $_POST['userpw'];
    $username = $_POST['username'];
    $useremail = $_POST['useremail'];
    $userphone = $_POST['userphone'];
    $userdesc = $_POST['userdesc'];

    $userid_query = "select * from katz_user where username='$userid'";
    $userid_result = $conn->query($userid_query);
    $count = mysqli_num_rows($userid_result);

    if ($count) {
        ?>
        <script>
        alert("중복된 계정입니다.");
        history.back();
        </script>
        <?php } 
                else {

                $sign_query = "insert into katz_user(userid, userpw, username, useremail, userphone, userdesc) values('$userid', '$userpw', '$username', '$useremail', '$userphone', '$userdesc')";
                $sign_result = $conn->query($sign_query);
        
                if ($sign_result) {
                
                ?>
        <script>
        alert('회원가입에 성공하였습니다.');
        location.replace("/user/login.php");
        </script>
        <?php } 
                else {
                ?>
        <script>
        alert('회원가입에 실패하였습니다.');
        history.back();
        </script>
        <?php }
                }
      
        mysqli_close($connect);

?>