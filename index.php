<?php
	$json1 = file_get_contents('study_program.json');
	$studyProgram = json_decode($json1);
	$studyProgramRange = count($studyProgram);

  if(isset($_POST["name"])) {
    $name = $_POST["name"];
  }
  else {
    $name = "Pengunjung";
  }

	if(isset($_GET["login"])) {
		$hideMain		= "hide";
		$hideRegis	= "hide";
		$hideLogin	= ""; 
	}
	else if(isset($_GET["register"])) {
		$hideMain		= "hide";
		$hideRegis 	= "";
		$hideLogin 	= "hide";
	}
	else {
		$hideMain		= "";
		$hideRegis	= "hide";
		$hideLogin	= "hide";
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
			rel="stylesheet"
		/>
		<link rel="stylesheet" href="main.css" />
		<title>Universitas Kita</title>
	</head>
	<body>
		<nav>
			<div class="nav-menu">
				<h3>
					Selamat Datang,
					<?=$name?>!
				</h3>
				<ul>
					<li>
						<a href="?register" class="light ml-auto">Register</a>
					</li>
					<li>
						<b class="ml-12 mr-12">|</b>
					</li>
					<li>
						<a href="?login" class="light">Login</a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="<?=$hideMain?>">
			<header>
				<div id="slider">
					<div>
						<img src="./img/sangga-rima-roman-selia-bgQgAKagQB4-unsplash.jpg" />
						<img src="./img/ryan-jacobson-cXUOQWdRV4I-unsplash.jpg" />
						<img src="./img/eric-sharp-JdzHrfX4l4Q-unsplash.jpg" />
					</div>
				</div>
			</header>
			<section id="about">
				<div class="row">
					<div class="col">
						<h1>Universitas Kita</h1>
					</div>
					<div class="col">
						<p>
							Universitas Kita adalah universitas negeri pertama di Provinsi
							Kita, Indonesia. Hari jadi Unkita ditetapkan pada tanggal 10 Juli
							2202, berdasarkan pada keluarnya Surat Keputusan Menteri PTIP yang
							menetapkan berdirinya Unkita.
						</p>
					</div>
				</div>
			</section>
			<section>
				<div class="row">
					<div class="col">
						<h1>Program Studi</h1>
					</div>
					<div class="col">
						<ul>
							<?php for($i = 0; $i < $studyProgramRange/2; $i++): ?>
							<div class="card-dark">
								<li class="list-none">
									<h2>
										Fakultas
										<?=$studyProgram[$i]->faculty?>
									</h2>
									<ul>
										<?php foreach($studyProgram[$i]->study as $j): ?>
										<li><?=$j?></li>
										<?php endforeach ?>
									</ul>
								</li>
							</div>
							<?php endfor ?>
						</ul>
					</div>
					<div class="col">
						<ul>
							<?php for($i = $studyProgramRange/2; $i < $studyProgramRange; $i++): ?>
							<div class="card-dark">
								<li class="list-none">
									<h2>
										Fakultas
										<?=$studyProgram[$i]->faculty?>
									</h2>
									<ul>
										<?php foreach($studyProgram[$i]->study as $j): ?>
										<li><?=$j?></li>
										<?php endforeach ?>
									</ul>
								</li>
							</div>
							<?php endfor ?>
						</ul>
					</div>
				</div>
			</section>
		</div>
		<section>
			<div class="card <?=$hideRegis?>">
				<form method="post">
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
					<div class="btn-inline">
						<input class="reset" type="reset" name="reset" />
						<input class="submit" type="submit" name="submit" />
					</div>
				</form>
				<a href="./" class="float-left">Beranda</a>
				<a href="?login" class="float-right">Anda sudah punya akun?</a>
			</div>
			<div class="card <?=$hideLogin?>">
				<form method="post">
					<h2>Login Mahasiswa</h2>
					<hr />
					<br />
					<label for="form-npm">NPM: </label>
					<br />
					<input id="form-npm" type="number" name="npm" required />
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
				<a href="?register" class="float-right">Anda belum punya akun?</a>
			</div>
		</section>
		<footer>
			<p>
				Made With &hearts; by
				<a href="https://afrizalyogi.github.io" target="_blank" class="light"
					>Afrizal Yogi</a
				>.
			</p>
		</footer>
	</body>
</html>
