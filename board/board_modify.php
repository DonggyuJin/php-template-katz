<?php
include('../inc/top.php');
?>

<?php
include "../dbconn.php";
?>

<?php

    $boardidx = $_GET['boardidx'];
	$modify_query = mysqli_query($conn, "select * from katz_board where boardidx='$boardidx';");
	$board = $modify_query->fetch_array();

?>
	<div class="container my-3 pt-5">
        <h2 class="my-3 border-bottom pb-2">KATZ 자유게시판</h2>
        <form action="board_confirm.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="board_idx" value="<?php echo $board['boardidx']; ?>">
            <div class="mb-3">
                <label for="subject" class="form-label">제목</label>
                <input type="text" name="title" class="form-control" id="subject" value="<?php echo $board['title']; ?>">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">내용</label>
                <textarea class="form-control" type="text" name="content"
                        id="content" rows="10" style="resize:none;"><?php echo $board['content']; ?></textarea>
            </div>
            <div class="mb-3 d-flex">
                <!-- <input type="file" value="1" name="file" class="pt-1"> -->
                <input type="submit" id="btn_write" value="수정하기" class="btn btn-primary ms-auto me-0">
            </div>
        </form>
    </div>

<?php
include('../inc/bottom.php');
?>