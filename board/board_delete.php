<?php
include "../dbconn.php";
?>

    <?php

        $board_idx = $_GET['boardidx'];
        $delete_query = mysqli_query($conn, "delete from katz_board where boardidx='$board_idx';");

    ?>
    <script type="text/javascript">
        alert("게시글이 삭제되었습니다.");
        location.replace("board_list.php");
    </script>