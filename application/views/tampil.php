<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial scale=1">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('asset/css/bootstrap.min.css');?>" rel="stylesheet">
</head>
<body>
	<div class="panel panel-info" style="border-radius:0px">
	<div class="panel-heading">
		<h4 style="padding:0px;margin:0"><b>Data Master Pengurus OSIS</b></h4>
	</div>
	<div class="panel-body">
		<a href="#" class="btn btn-success">Tambah Data</a>
		<a href="#" class="btn btn-warning">Cetak Laporan</a>
		
		<table class="table table-bordered table-striped" style="margin-top:20px;">
			<thead>
				<tr>
					<th style="text-align:center">NO</th>
					<th style="text-align:center">NIS</th>
					<th style="text-align:center">NISN</th>
					<th style="text-align:center">NAMA DEPAN</th>
					<th style="text-align:center">NAMA BELAKANG</th>
					<th style="text-align:center">KELAS</th>
					<th style="text-align:center">TEMPAT LAHIR</th>
					<th style="text-align:center">TANGGAL LAHIR</th>
					<th style="text-align:center">JENIS KELAMIN</th>
					<th style="text-align:center">AGAMA</th>
					<th style="text-align:center;width:150px;">AKSI</th>
				</tr>
			</thead>
			<tbody>
				<?php
				if ($query->num_rows()>0) {
					$no = 1;
					foreach ($query->result() as $row) {
						echo "<tr>
						<td>".$no."</td>
						<td>".$row->nis."</td>
						<td>".$row->nisn."</td>
						<td>".$row->nama_depan."</td>
						<td>".$row->nama_belakang."</td>
						<td>".$row->kelas."</td>
						<td>".$row->tmp_lahir."</td>
						<td>".$row->tgl_lahir."</td>
						<td>".$row->jk."</td>
						<td>".$row->agama."</td>
						<td class='text-center'>
							<a href='#' class='btn btn-success btn-xs'>Edit</a>
							<a href='#' class='btn btn-danger btn-xs'>Hapus</a>
						</td></tr>
						";
					$no++;
					}
				}else{
					echo "<tr><td class='text-center' colspan='8'>Data Masih Kosong</td></tr>";
				}
				?>
			</tbody>
		</table>
	</div>
</div>
</body>