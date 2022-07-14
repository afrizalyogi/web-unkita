<section>
  <div class="card">
    <form method="post">
      <h2>Login Mahasiswa</h2>
      <hr />
      <br />
      <label for="form-login-email">Email: </label>
      <br />
      <input id="form-login-email" type="email" name="login-email" required />
      <br />
      <label for="form-login-pass">Password: </label>
      <br />
      <input id="form-login-pass" type="password" name="login-pass" required />
      <br />
      <div class="btn-inline">
        <input class="reset" type="reset" name="reset" />
        <input class="submit" type="submit" name="submit" />
      </div>
    </form>
    <a href="./" class="float-left">Beranda</a>
    <a href="?register" class="float-right">Anda belum punya akun?</a>
  </div>
</section>

<?php
  $email = $_POST['email'];
  $pass = $_POST['pass'];

  if($email == $_POST['login-email']) {
    if($pass == $_POST['login-pass']) {

    }
    else {
      echo "Password Salah";
    }
  }
  else {
    echo "Email Salah";
  }
?>