<body>
<section class="Lsec">
	<div class="Lbox">
		<div class="Llogin">
			<h1>Login</h1>
			<?php echo $result;?>
			<form action="" method="POST" style="margin-top:35px">
				<input type="text" class="textin" name="nis" placeholder="NIS" required><br>
				<input type="password" class="textin" name="nisn" placeholder="****" required></br>
				<input type="submit" value="Login" class="btn btn-success" name="submit" style="margin-top:25px;margin-left:-290px;margin-right:20px;">
				<a href="<?php echo base_url('Beranda')?>" class="btn btn-warning" style="margin-top:25px;">Kembali</a>
			</form>
		</div>
	</div>
</section>
</body>