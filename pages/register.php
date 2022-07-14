<section>
  <div class="card">
    <form action="?profile" method="post">
      <h2>Registrasi Mahasiswa</h2>
      <hr />
      <br />
      <label for="form-name">Nama Mahasiswa: </label>
      <br />
      <input id="form-name" type="text" name="name" required />
      <br />
      <label for="form-born-place">Tempat Lahir: </label>
      <br />
      <input id="form-born-place" type="text" name="born-place" required />
      <br />
      <label for="form-born-date">Tanggal Lahir: </label>
      <br />
      <input id="form-born-date" type="date" name="born-date" required />
      <br />
      <label for="form-dom">Domisili: </label>
      <br />
      <input id="form-dom" type="text" name="dom" required />
      <br />
      <label for="form-hp">No HP: </label>
      <br />
      <input id="form-hp" type="number" name="hp" required />
      <br />
      <label for="form-email">Email: </label>
      <br />
      <input id="form-email" type="email" name="email" required />
      <br />
      <label for="form-pass">Password: </label>
      <br />
      <input id="form-pass" type="password" name="pass" required />
      <br />
      <div class="btn-inline">
        <input class="reset" type="reset" name="reset" />
        <input class="submit" type="submit" name="submit" />
      </div>
    </form>
    <a href="./" class="float-left">Beranda</a>
    <a href="?login" class="float-right">Anda sudah punya akun?</a>
  </div>
</section>