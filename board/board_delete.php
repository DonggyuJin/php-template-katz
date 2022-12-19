<?php
include "../dbconn.php";
?>

    <?php

        $board_idx = $_GET['boardidx'];
        $sql = mysqli_query($conn, "delete from katz_board where boardidx='$board_idx';");

    ?>
    <script type="text/javascript">
        alert("게시글 삭제를 완료했습니다.");
        location.replace("board_list.php");
    </script>
    <meta http-equiv="refresh" content="0 url=board_list.php" />