<?php
include('../inc/top.php');
?>

<?php
include "../dbconn.php";
?>

<?php
    $board_idx = $_GET['boardidx'];

	$is_viewcnt = false;
	if (!isset($_COOKIE["board_{$board_idx}"])) {    
		setcookie(md5("board_{$board_idx}"), $board_idx, time() + 60 * 60 * 1);
		$is_viewcnt = true;
	}

	if ($is_viewcnt) {
		$view_query = mysqli_fetch_array(mysqli_query($conn, "select * from katz_board where boardidx = '".$board_idx."'"));
		$view_result = $view['viewcnt'] + 1;

		$fet = mysqli_query($conn, "update katz_board set viewcnt = '".$view_result."' where boardidx = '".$board_idx."'");
	}

	$board_query = mysqli_query($conn, "select * from katz_board where boardidx='".$board_idx."'");
	$board_content = $board_query->fetch_array();
?>
	<div class="mx-auto board_content">
	<div id="container my-3">
		<h2 class="border-bottom py-2"><?php echo $board_content['title']; ?></h2>
		<div class="card my-3">
			<div class="card-body">
				<div class="card-text" style="white-space: pre-line">
					<?php echo nl2br("$board_content[content]"); ?>
				</div>
				<!-- <div class="card-text" style="white-space: pre-line">
					파일: <a href="upload/<-?php echo $board_content['file'];?>" download><-?php echo $board_content['file'];?></a>
				</div> -->
				<div class="d-flex mt-3">
					<div class="badge bg-light text-dark p-2 text-start me-2">
						<div class="mb-2">date</div>
						<div><?php echo $board_content['regdate']; ?></div>
					</div>
					<div class="badge bg-light text-dark p-2 text-start">
					<div class="mb-2"><?php echo $board_content['username']; ?></div>
					<div>
						조회: <?php echo $board_content['viewcnt']; ?>
					</div>
					</div>
				</div>
				<div class="my-3">
					<a href="board_list.php" 
					class="text-white btn btn-sm btn-success me-1">
					목록
					</a>
					<a href="board_delete.php?id=<?php echo $board_content['boardidx']; ?>" 
					class="text-white btn btn-sm btn-danger">
					삭제
					</a>
				</div>
			</div>
		</div>
    </div>

<?php
include('../inc/bottom.php');
?>