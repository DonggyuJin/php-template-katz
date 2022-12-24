function ready_service() {
  const readyText = "준비중인 서비스입니다.";
  alert(readyText);
}

function login_check() {
  if (Login_form.username.value == "" || Login_form.password.value == "") {
    alert("아이디 및 비밀번호가 유효하지 않습니다.");
    Login_form.username.value = "";
    Login_form.password.value = "";
  }
}
