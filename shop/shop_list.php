<?php
include('inc/top.php');
?>

<div class="mx-auto">
      <div class="d-flex flex-column">

        <div class="py-4"> 

        <table class="table table-dark table-hover">
          <thead>
              <tr>
                  <th scope="col" width="70">번호</th>
                    <th scope="col" width="500">제목</th>
                    <th scope="col" width="120">글쓴이</th>
                    <th scope="col" width="100">작성일</th>
                    <th scope="col" width="100">조회수</th>
                </tr>
            </thead>
          <tbody>
            <tr>
              <td width="70">아이디</td>
              <td width="300"><a href="/board_read.html?id">제목</a></td>
              <td width="120">닉네임</td>
              <td width="200">날짜</td>
              <td width="70">조회수</td>
              <!-- <td width="100">
                <--?php echo $data['thumbup'] --?>
              </td> -->
            </tr>
          </tbody>
        </table>
        <div class="d-flex justify-content-center">
          <a class="btn btn-success text-white" href="/board_write.html">글쓰기</a>
        </div>
      </div>
      </div>
    </div>

<?php
include('inc/bottom.php');
?>