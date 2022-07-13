<?php
	if(isset($_GET['register'])) {
		$title = "Registrasi";
		$content = "./pages/register.php";
	}
	elseif(isset($_GET['login'])) {
		$title = "Login";
		$content = "./pages/login.php";
	}
	else {
		$title = "Home";
		$content = "./pages/home.php";
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php 
			include './includes/meta.php';
			include './includes/style.php';
		?>
		<title><?=$title?> | Universitas Kita</title>
	</head>
	<body>
		<?php
			include './includes/nav.php';
			include $content;
			include './includes/footer.php';
		?>
	</body>
</html>
