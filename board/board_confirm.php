<?php
include "../dbconn.php";
?>

    <?php

        $boardidx = $_POST['board_idx'];
        $title = $_POST['title'];
        $content = $_POST['content'];
        $confirm_query = mysqli_query($conn, "update katz_board set title = '".$title."', content = '".$content."' where boardidx='".$boardidx."'"); 

    ?>

    <script type="text/javascript">
        alert("게시글이 수정되었습니다.");
        location.replace("board_content.php?boardidx=<?php echo $boardidx;?>");
    </script>