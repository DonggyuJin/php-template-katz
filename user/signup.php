<?php
include('../inc/top.php');
?>

<div class="form-signin border">
    <form method="post" action="signup_check.php">
        <h1 class="text-center mb-4 fw-bold fs-4">π νμκ°μ π</h1>
        <div class="pt-3">
            <div class="form-floating mb-3">
                <input type="text" name="userid" class="form-control floatingInput" id="username">
                <label for="userid" class="floatingInput">μμ΄λ*</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="userpw" class="form-control floatingInput" id="password">
                <label for="userpw" class="floatingInput">λΉλ°λ²νΈ*</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="username" class="form-control floatingInput" id="password">
                <label for="username" class="floatingInput">λλ€μ*</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="useremail" class="form-control floatingInput" id="email">
                <label for="useremail" class="floatingInput">μ΄λ©μΌ*</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="userphone" class="form-control floatingInput" id="password">
                <label for="userphone" class="floatingInput">μ°λ½μ²*</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" name="userdesc" class="form-control floatingInput" id="password">
                <label for="userdesc" class="floatingInput">νμ€μκ°</label>
            </div>
            <button type="submit" class="mt-3 w-100 btn btn-lg" id="loginBtn" onclick="button()">
                νμκ°μ
            </button>
        </div>
    </form>
</div>

<?php
include('../inc/bottom.php');
?>