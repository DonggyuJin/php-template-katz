<?php
include('../inc/top.php');
?>

<?php
include "../dbconn.php";
?>

<div class="mx-auto">
      <div class="d-flex flex-column">

        <div class="mt-5 ms-5 pe-5 ps-3 col-md-11"> 

        <table class="table table-hover border">
          <thead>
              <tr>
                  <th scope="col" width="70">번호</th>
                    <th scope="col" width="500">제목</th>
                    <th scope="col" width="120">글쓴이</th>
                    <th scope="col" width="100">작성일</th>
                    <th scope="col" width="100">조회수</th>
                </tr>
            </thead>
            <?php
              
            //   $list_query = "select * from katz_board";
            //   $list_result = $conn->query($list_query);

              $list_query = $conn->prepare("select * from katz_board");
              $list_query->execute();
              $list_result = $list_query->get_result();
              $list_query->close();

              while($board_list = $list_result->fetch_array())
              {
                $title = $board_list['title']; 
                if(strlen($title)>30)
                { 
                  $title=str_replace($board_list['title'],mb_substr($board_list['title'],0,30,"utf-8")."...",$data['title']);
                }
            ?>
          <tbody>
            <tr>
              <td width="70"><?php echo $board_list['boardidx']; ?></td>
              <td width="300"><a href="/board/board_content.php?boardidx=<?php echo $board_list['boardidx'];?>"><?php echo $board_list['title']; ?></a></td>
              <td width="120"><?php echo $board_list['username']; ?></td>
              <td width="200"><?php echo $board_list['regdate']; ?></td>
              <td width="70"><?php echo $board_list['viewcnt']; ?></td>
              <!-- <td width="100">
                <--?php echo $data['thumbup'] --?>
              </td> -->
            </tr>
          </tbody>
          <?php } ?>
        </table>
        <?php

          if(isset($_SESSION['username'])) {
            ?>
              <div class="d-flex justify-content-end">
              <a class="board_btn btn btn-success text-white text-decoration-none" href="/board/board_create.php">글쓰기</a>
              </div>
            <?php
          } else {
            ?>
            <div class="d-flex justify-content-end">
              <a class="board_btn btn btn-secondary text-white text-decoration-none disabled" href="/board/board_create.php">글쓰기</a>
            </div>
            <?php
          }
        ?>
        
      </div>
      </div>
    </div>

<?php
include('../inc/bottom.php');
?>