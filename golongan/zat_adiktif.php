<?php 
  include '../admin/config/koneksi.php';

  $id_zat_adiktif = $_GET["id"];
  $ambil = $koneksi->query("SELECT * FROM golongan WHERE id_golongan='$id_zat_adiktif'");
  $singlePage = $ambil->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Golongan Zat Adiktif</title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="../admin/assets/css/bootsrap.min.css">
	<link rel="stylesheet" href="../admin/assets/css/custom-css.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand text-light" href="../index.php">SIPENAP</a> <button aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler" data-target="#navbarSupportedContent" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link text-light" href="../index.php">Beranda</a>
					</li>
          <div class="dropdown show">
						<li><a class="nav-link" style="color: white;" href="../zat_adiktif.php">Zat Adiktif</a></li>
					</div>
					<li class="nav-item">
						<a class="nav-link text-light" href="../contact.php">Contact Us</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light" href="../admin/login.php">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
  
  <section class="kontent">
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-8 mb-5">
          <article class="artikel-website mt-5">
            <div class="container artikel">
								Tag: <u><small class="mb-4 pt-4"><?php echo $singlePage['kategori']; ?></small></u><br>
								<h2><?php echo $singlePage['judul']; ?></h2><br>
								<video src="../video/<?php echo $singlePage['animasi']; ?>" controls width='600'></video>
                <p class="text-justify"><?php echo $singlePage['keterangan']; ?></p>
								<a href="../zat_adiktif.php" class="btn btn-outline-default">Back to posts</a>
            </div>
          </article>
        </div>
      </div>
  </section>
	<!-- ini merupakan akhir section pada bagian footer single page untuk halaman zat adiktif -->
	
	<!-- footer -->
	<?php include '../footer.php'; ?>
	<!-- footer -->
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  
</body>
</html>
