<?php
include('../inc/top.php');
?>

    <div class="container my-3 pt-5">
        <h2 class="my-3 border-bottom pb-2">KATZ 자유게시판</h2>
        <form action="board_save.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="subject" class="form-label">제목</label>
                <input type="text" name="title" class="form-control" id="subject">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">내용</label>
                <textarea class="form-control" type="text" name="content"
                        id="content" rows="10" style="resize:none;"></textarea>
            </div>
            <div class="mb-3 d-flex">
                <!-- <input type="file" value="1" name="file" class="pt-1"> -->
                <input type="submit" id="btn_write" value="저장하기" class="btn btn-primary ms-auto me-0">
            </div>
        </form>
    </div>

<?php
include('../inc/bottom.php');
?>