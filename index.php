<?php
	$json1 = file_get_contents('study_program.json');
	$studyProgram = json_decode($json1);

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
		<link rel="stylesheet" href="main.css" />
		<title>Universitas Kita</title>
	</head>
	<body>
		<nav>
			<div class="nav-menu">
				<ul>
					<li>
						<h1>Selamat Datang, <?=$name?>!</h1>
					</li>
					<div class="float-right">
						<li>
							<a href="?register" class="light ml-auto">Register</a>
						</li>
						<li>
							<b class="ml-12 mr-12">|</b>
						</li>
						<li>
							<a href="?login" class="light">Login</a>
						</li>
					</div>
				</div>
		</nav>
		<header class="<?=$hideMain?>">
			<img 
				src="https://images.unsplash.com/photo-1562774053-701939374585?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8Y29sbGVnZXxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=700&h=200&q=60"
				alt="Universitas Kita"
				style="width: 100%; height: auto;"
			/>
		</header>
		<section class="<?=$hideMain?>">
			<h2>Universitas Kita</h2>
			<p>
				Universitas Kita adalah universitas negeri pertama di Provinsi Kita, Indonesia. 
				Hari jadi Unkita ditetapkan pada tanggal 10 Juli 2202, berdasarkan pada keluarnya Surat Keputusan Menteri PTIP yang menetapkan berdirinya Unkita.
			</p>
			<h2>Program Studi</h2>
			<p>
				<ul>
					<?php foreach($studyProgram as $i): ?>
					<li class="list-none">
						<h3>Fakultas <?=$i->faculty?>:</h3>
						<ul>
							<?php foreach($i->study as $j): ?>
							<li><?=$j?></li>
							<?php endforeach ?>
						</ul>
					</li>
					<?php endforeach ?>
				</ul>
			</p>
		</section>
		<section>
			<div class="form-box <?=$hideRegis?>">
				<form method="post">
					<h2>Registrasi Siakad</h2>
					<label for="form-name">Nama Mahasiswa: </label>
					<br />
					<input 
						id="form-name" 
						type="text" 
						name="name" 
						required
					/>
					<br />
					<label for="form-born-place">Tempat Lahir: </label>
					<br />
					<input 
						id="form-born-place" 
						type="text" 
						name="born-place" 
						required
					/>
					<br />
					<label for="form-born-date">Tanggal Lahir: </label>
					<br />
					<input 
						id="form-born-date" 
						type="date" 
						name="born-date" 
						required
					/>
					<br />
					<label for="form-dom">Domisili: </label>
					<br />
					<input 
						id="form-dom" 
						type="text" 
						name="dom" 
						required 
					/>
					<br />
					<label for="form-hp">No HP: </label>
					<br />
					<input 
						id="form-hp" 
						type="text" 
						name="hp"
						required 
					/>
					<br />
					<label for="form-email">Email: </label>
					<br />
					<input 
						id="form-email" 
						type="email" 
						name="email"
						required 
					/>
					<br />
					<input type="submit" name="submit" />
				</form>
				<a href="?login">Anda sudah punya akun?</a>
			</div>
			<div class="form-box <?=$hideLogin?>">
				<form method="post"></form>
				<a href="?register">Anda belum punya akun?</a>
			</div>
		</section>
		<footer>
			<p>Made With &hearts; by <a href="afrizalyogi.github.io" class="light">Afrizal Yogi</a>.</p>
		</footer>
	</body>
</html>
