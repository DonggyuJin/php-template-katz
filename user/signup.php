<?php
include('../inc/top.php');
?>

<div class="form-signin border">
    <form method="post" action="signup_check.php">
        <h1 class="text-center mb-4 fw-bold fs-4">🛒 회원가입 🛒</h1>
        <div class="pt-3">
            <div class="form-floating mb-3">
                <input type="text" name="userid" class="form-control floatingInput" id="username">
                <label for="userid" class="floatingInput">아이디*</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="userpw" class="form-control floatingInput" id="password">
                <label for="userpw" class="floatingInput">비밀번호*</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="username" class="form-control floatingInput" id="password">
                <label for="username" class="floatingInput">닉네임*</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="useremail" class="form-control floatingInput" id="email">
                <label for="useremail" class="floatingInput">이메일*</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="userphone" class="form-control floatingInput" id="password">
                <label for="userphone" class="floatingInput">연락처*</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="userdesc" class="form-control floatingInput" id="password">
                <label for="userdesc" class="floatingInput">한줄소개</label>
            </div>
            <button type="submit" class="mt-3 w-100 btn btn-lg" id="loginBtn" onclick="button()">
                회원가입
            </button>
        </div>
    </form>
</div>

<?php
include('../inc/bottom.php');
?>