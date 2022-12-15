<?php
include('../inc/top.php');
?>

<div class="form-signin border">
      <form method="GET" name="Login_form" action="login_check.php">
        <h1 class="mt-4 mb-2 fw-bold fs-2 text-center">KATZ</h1>
        <h1 class="mb-5 fw-bold fs-6 fst-italic text-center">KATZ IS A SHOPPING MALL BRAND</h1>
        <div class="form-floating">
          <input type="text" 
                 class="form-control floatingInput" 
                 id="floatingInput" 
                 name="userid"
                 placeholder="ID">
          <label for="floatingInput" class="floatingInput">아이디</label>
        </div>
        <div class="form-floating mt-2">
          <input type="password"
                 class="form-control floatingInput"
                 id="floatingInput"
                 name="userpw"
                 placeholder="PW">
          <label for="floatingInput" class="floatingInput">비밀번호</label>
        </div>
        <button class="mt-5 w-100 btn btn-lg" 
                id="loginBtn"
                type="submit" 
                onClick="javascript:check()">
          로그인
        </button>
        <span class="line">
          <span class="line_or">또는</span>
        </span>
        <button class="w-100 btn btn-lg mb-1"
                id="kakaoBtn"
                type="button"
                onClick="javascript:readyKakaoService()">
          <img class="kakaoBtn" src="../static/img_kakao_logo.svg" alt="kakao"/>
          <span class="ms-1">카카오로 로그인</span>
        </button>
      </form>
      <div class="d-flex mt-4" id="etc">
        <p>
          <a href="/user/signup.php" class="text-secondary">회원가입</a>
        </p>
        <span class="mx-auto"></span>
        <p> 
          <a type="button"
                  onClick="javascript:readyService()"
                  class="text-secondary"
                  id="account">계정 찾기</a>
        </p>
        <p>
          <a type="button"
                  onClick="javascript:readyService()"
                  class="text-secondary ms-3">비밀번호 찾기</a>
        </p>
      </div>
    </div>
    <script>
      function check() {
        if(Login_form.username.value == "" || Login_form.password.value == "") {
          alert("아이디 및 비밀번호가 유효하지 않습니다.");
          Login_form.username.value = "";
          Login_form.password.value = "";
        }
      }
      
      function readyKakaoService() {
        return alert("현재 준비 중인 서비스입니다.");
      }
    </script>
  </body>

<?php
include('../inc/bottom.php');
?>