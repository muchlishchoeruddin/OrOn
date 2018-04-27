<body>
<section class="Bsec" style="background-image: url('<?php echo IMG;?>bg.png');">
	<div class="col-sm-9 t-oron" style="background-image:url('<?php echo IMG?>bg.png');">
		<div class="operator-h"><a href="<?php echo base_url('Login');?>"><i class="fa fa-expeditedssl" style="position:absolute;color:white;right:20px;top:20px;"></i></a>
		<!--<div style="position: absolute;background-color:white;width:100px;height:100px;overflow:hidden;margin-top:12%;margin-left:12.5%;border-radius:100%;border:3px solid #3d7eaa;"><img style="width:75px;position: absolute;margin:0 auto;left:0;right:0;top:0;bottom:0;" src="<?php echo IMG?>smea.png"></div>
		<h3 style="position: absolute;margin-top: 23%;margin-left:5.5%">Organization Of Nesas</h3>
		<center>
		<h5 style="position: absolute;margin-top:29.5%; margin-left:8.5%;">Sekolah Menengah Kejuruan<br> Negeri 1 Subang</h5>
		</center>-->
		<img style="position:absolute;width:175px; margin-left:10%;margin-top:12%;opacity: 0.4;" src="<?php echo IMG?>smea.png">
		<img style="position:absolute;width:350px;margin-top:-30px;margin-left:-70px;" src="<?php echo IMG;?>siswa.png">
		<div style="position: absolute;margin-top:10%;margin-left:30%;">
			S<br>M<br>K<br>N<br><br>1<br><br>S<br>U<br>B<br>A<br>N<br>G
		</div>
			<div class="operator-i-h">
				<img class="img-1" style="margin-left:35px; margin-top:20px;" src="<?php echo IMG?>mpk.png" data-target="item-1" data-target2="img-1"><br>
				<img class="img-2 point" style="margin-left:35px; margin-top:50px;" src="<?php echo IMG?>osis.png" data-target="item-2" data-target2="img-2"><br>
				<img class="img-3" style="margin-left:35px; margin-top:60px;" src="<?php echo IMG?>rohis.png" data-target="item-3" data-target2="img-3">
			</div>
			<div class="anim item-1">Cerdas Tegas<br>Responsif</div>
			<div class="item-active anim item-2">Pengayom Penegak<br>Responsif</div>
			<div class="anim item-3">Salam Jihad<br>Allahu Akbar</div>
		</div>
	<div id="cicle-down"><i class="fa fa-chevron-down" style="font-size: 25px;padding-left:17.5px;padding-top:17.5px;text-shadow:2px 5px rgba(0,0,0,0.5);"></i></div>
	</div>
</section>
<div class="bodyc">
	<div class="nav navbar-default">
		<ul class="nav navbar-nav">
			<li><a href="#">MPK</a></li>
			<li><a href="#">OSIS</a></li>
			<li><a href="#">ROHIS</a></li>
		</ul>
	</div>
	<div class="container">
		<div class="box box-purple" style="border-color: purple">
			<div class="box-header with-border">
				<h4 class="box-title">MPK</h4>
			</div>
			<div class="box-body">
				<table class="table table-striped">
					<thead>
						<th>No</th>
						<th>NIS</th>
						<th>NISN</th>
						<th>Nama</th>
						<th>Kelas</th>
						<th>Alamat</th>
					</thead>
					<tbody>
						<?php
						$mpk=$this->db->get_where('user',['or_id'=>2]);
						if($mpk->num_rows()>0){
							$no=1;
							foreach($mpk->result()as$row){
								?>
								<tr>
									<td><?=$no?></td>
									<td><?=$row->nis?></td>
									<td><?=$row->nisn?></td>
									<td><?=$row->nama_depan.' '.$row->nama_belakang?></td>
									<td><?=$row->kelas?></td>
									<td><?=$row->alamat?></td>
								</tr>
								<?php
							$no++;
							}
						}else{
							echo "
							<tr><td colspan='6' style='text-align:center'>Data Masih Kosong</td></tr>
							";
						}
						?>
					</tbody>
				</table>
			</div>
			<div class="box-footer" style="background-color: rgba(100,50,100,0.1)"></div>
		</div>
		<div class="box box-primary">
			<div class="box-header with-border">
				<h4 class="box-title">OSIS</h4>
			</div>
			<div class="box-body">
				<div class="box-header with-border">
				<h4 class="box-title">MPK</h4>
			</div>
			<div class="box-body">
				<table class="table table-striped">
					<thead>
						<th>No</th>
						<th>NIS</th>
						<th>NISN</th>
						<th>Nama</th>
						<th>Kelas</th>
						<th>Alamat</th>
					</thead>
					<tbody>
						<?php
						$osis=$this->db->get_where('user',['or_id'=>1]);
						if($osis->num_rows()>0){
							$no=1;
							foreach($osis->result()as$row){
								?>
								<tr>
									<td><?=$no?></td>
									<td><?=$row->nis?></td>
									<td><?=$row->nisn?></td>
									<td><?=$row->nama_depan.' '.$row->nama_belakang?></td>
									<td><?=$row->kelas?></td>
									<td><?=$row->alamat?></td>
								</tr>
								<?php
							$no++;
							}
						}else{
							echo "
							<tr><td colspan='6' style='text-align:center'>Data Masih Kosong</td></tr>
							";
						}
						?>
					</tbody>
				</table>
			</div>
			<div class="box-footer" style="background-color: rgba(0,0,100,0.1)"></div>
		</div>
		<div class="box box-success">
			<div class="box-header with-border">
				<h4 class="box-title">ROHIS</h4>
			</div>
			<div class="box-body">
				<table class="table table-striped">
					<thead>
						<th>No</th>
						<th>NIS</th>
						<th>NISN</th>
						<th>Nama</th>
						<th>Kelas</th>
						<th>Alamat</th>
					</thead>
					<tbody>
						<?php
						$rohis=$this->db->get_where('user',['or_id'=>3]);
						if($rohis->num_rows()>0){
							$no=1;
							foreach($rohis->result()as$row){
								?>
								<tr>
									<td><?=$no?></td>
									<td><?=$row->nis?></td>
									<td><?=$row->nisn?></td>
									<td><?=$row->nama_depan.' '.$row->nama_belakang?></td>
									<td><?=$row->kelas?></td>
									<td><?=$row->alamat?></td>
								</tr>
								<?php
							$no++;
							}
						}else{
							echo "
							<tr><td colspan='6' style='text-align:center'>Data Masih Kosong</td></tr>
							";
						}
						?>
					</tbody>
				</table>
			</div>
			<div class="box-footer" style="background-color: rgba(0,100,0,0.1)"></div>
		</div>
	</div>
</div>
</body>