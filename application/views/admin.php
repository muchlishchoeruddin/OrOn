<?php
$row=$data['row']->row();
//osis
$cdata=$this->db->get_where('user',['or_id'=>'1'])->num_rows();
$rows=$this->db->get_where('user',['or_id'=>'1']);
$mars=$this->db->get_where('user',['jk'=>'L','or_id'=>'1'])->num_rows();
$venus=$this->db->get_where('user',['jk'=>'P','or_id'=>'1'])->num_rows();
$this->db->like('user.nis','1160','after');
$xi=$this->db->get_where('user',['or_id'=>'1'])->num_rows();
$this->db->like('user.nis','1170','after');
$x=$this->db->get_where('user',['or_id'=>'1'])->num_rows();
//mpk
$cdata1=$this->db->get_where('user',['or_id'=>'2'])->num_rows();
$rows1=$this->db->get_where('user',['or_id'=>'2']);
$mars1=$this->db->get_where('user',['jk'=>'L','or_id'=>'2'])->num_rows();
$venus1=$this->db->get_where('user',['jk'=>'P','or_id'=>'2'])->num_rows();
$this->db->like('user.nis','1160','after');
$xi1=$this->db->get_where('user',['or_id'=>'2'])->num_rows();
$this->db->like('user.nis','1170','after');
$x1=$this->db->get_where('user',['or_id'=>'2'])->num_rows();
//rohis
$cdata2=$this->db->get_where('user',['or_id'=>'3'])->num_rows();
$rows2=$this->db->get_where('user',['or_id'=>'3']);
$mars2=$this->db->get_where('user',['jk'=>'L','or_id'=>'3'])->num_rows();
$venus2=$this->db->get_where('user',['jk'=>'P','or_id'=>'3'])->num_rows();
$this->db->like('user.nis','1160','after');
$xi2=$this->db->get_where('user',['or_id'=>'3'])->num_rows();
$this->db->like('user.nis','1170','after');
$x2=$this->db->get_where('user',['or_id'=>'3'])->num_rows();
?>
<body class="hold-transition skin-blue sidebar-mini">
  <aside class="main-sidebar" style="height: 100vh">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
        <?php
        	if($row->jk=='L'){
				echo "<img src='dist/img/avatar5.png' class='img-circle' alt='User Image'>";        		
        	}else{
        		echo "<img src='dist/img/avatar2.png' class='img-circle' alt='User Image'>";
        	}
        ?>
        </div>
        <div class="pull-left info">
          <p><?php echo $row->nama_depan.' '.$row->nama_belakang;?></p>
          <?php
          	$connected = @fsockopen("google.com", 80);
          	if ($connected){
          		$is_conn = true;
          		fclose($connected);
          	}else{
          		$is_conn = false;
          	}
          	if ($is_conn){
          		echo "<a href=''><i class='fa fa-circle text-success'></i> Online</a>";
          	}else{
          		echo "<a href=''><i class='fa fa-circle text-grey'></i> offline</a>";
          	}
          ?>
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active"><a href="#dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="treeview" id="dk">
          <a href="#">
            <i class="fa fa-address-book"></i> <span>Daftar Keanggotaan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li data-target="1" data-active="false"><a href="#mpk"><i class="fa fa-circle-o"></i> MPK</a></li>
            <li data-target="2"  data-active="true" class="active"><a href="#osis"><i class="fa fa-circle-o"></i> OSIS</a></li>
            <li data-target="3"  data-active="false"><a href="#rohis"><i class="fa fa-circle-o"></i> ROHIS</a></li>
          </ul>
        </li>
        <li><a href="#dokumentasi"><i class="fa fa-book"></i> <span>Dokumentasi</span></a></li>
        <li><a href="<?php echo base_url('Login/logout');?>"><i class="fa fa-sign-out text-yellow"></i> <span class="text-yellow">Keluar</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
<div class="content-wrapper" style="height:100vh;overflow-y: scroll;">
	<div class="Adashboard">
		<section class="content-header">
	      <h1>
	        Dashboard
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Dashboard</li>
	      </ol>
	    </section>
	    <section class="content">
	    	<div class="callout callout-info">
	    		<h4>Informasi!</h4>
	    		<p>Aplikasi web untuk mempermudah percetakan laporan dan data keanggotaan.</p>
	    	</div>
	    	<div class="callout callout-warning">
	    	<h4>Peringatan!</h4>
	    	<p>Gunakan Web ini dengan sebaik mungkin</p>
	    	</div>
	    </section>
	</div>
	<div class="Adanggota1">
		<section class="content-header">
	      <h1>
	        Daftar Keanggotaan MPK
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Daftar Keanggotaan</li>
	        <li class="active">MPK</li>
	      </ol>
	    </section>
	    <section class="content">
	    	<div class="row">
		    	<div class="col-md-6">
		    		<div class="info-box">
		    			<span class="info-box-icon bg-yellow">
		    				<i class="ion ion-ios-people-outline"></i>
		    			</span>
	    				<div class="info-box-content">
	    					<span class="info-box-text">Jumlah Pengurus</span>
	    					<span class="info-box-number"><?php echo $cdata1;?></span>
	    				</div>
		    		</div>
		    	</div>
		    	<div class="col-md-6">
		    		<div class="info-box">
		    			<span class="info-box-icon bg-navy">
		    				<i class="glyphicon glyphicon-user"></i>
		    			</span>
	    				<div class="info-box-content">
	    					<span class="info-box-text">Pembina</span>
	    					<span class="info-box-number">Aca Supriatna, S.Pd.</span>
	    				</div>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="info-box">
		    			<span class="info-box-icon bg-blue">
		    				<i class="fa fa-mars"></i>
		    			</span>
		    			<div class="info-box-content">
		    				<span class="info-box-text">Laki - laki</span>
		    				<span class="info-box-number"><?php echo $mars1;?></span>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="info-box">
		    			<span class="info-box-icon bg-maroon">
		    				<i class="fa fa-venus"></i>
		    			</span>
		    			<div class="info-box-content">
		    				<span class="info-box-text">Perempuan</span>
		    				<span class="info-box-number"><?php echo $venus1;?></span>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="info-box">
		    			<span class="info-box-icon " style="background-color: #55c87c;color:white">
		    				X
		    			</span>
		    			<div class="info-box-content">
		    				<span class="info-box-text">Anggota</span>
		    				<span class="info-box-number"><?php echo $x1;?></span>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="info-box">
		    			<span class="info-box-icon bg-green">
		    				XI
		    			</span>
		    			<div class="info-box-content">
		    				<span class="info-box-text">Anggota</span>
		    				<span class="info-box-number"><?php echo $xi1;?></span>
		    			</div>
		    		</div>
		    	</div>
		    </div>
	    	<div class="box">
	    		<div class="box-header with-border">
	    			<h3 class="box-title">Pengurus Organisasi Siswa Intra Sekolah</h3>
	    		</div>
	    		<div class="box-body">
	    		<a href="#" class="btn btn-success addmember"><i class="fa fa-plus"></i> Tambah Pengurus</a> <a class="btn btn-warning printmpk" style="margin-left:10px"><i class="fa fa-print"></i> Cetak Data Pengurus</a>
	    		<form action="#" method="get" class="col-sm-4 pull-right">
			        <div class="input-group">
			          <input type="text" name="q" class="form-control" placeholder="Search Name...">
			          <span class="input-group-btn">
			                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
			                </button>
			              </span>
			        </div>
			    </form>
			    <!-- table print -->
			    <div id="table-mpk">
			    	<table class="table table-bordered table-striped" style="margin-top:10px;">
	    				<thead>
	    					<th style="text-align:center;">No</th>
	    					<th style="text-align:center;">NIS</th>
	    					<th style="text-align:center;">NISN</th>
	    					<th style="text-align:center;">Nama Lengkap</th>
	    					<th class="td-hidden" style="text-align:center;" hidden="">Kelas</th>
	    					<th style="text-align:center;">Alamat</th>
	    					<th class='td-show' style="text-align:center;">Tanggal Lahir</th>
	    					<th class='td-show' style="text-align:center;">Aksi</th>
	    				</thead>
	    				<tbody>
							<?php
							if ($rows1->num_rows()>0) {
								$no = 1;
								foreach ($rows1->result() as $field) {
									echo "<tr>
									<td>".$no.".</td>
									<td>".$field->nis."</td>
									<td>".$field->nisn."</td>
									<td>".$field->nama_depan." ".$field->nama_belakang."</td>
									<td class='td-hidden' hidden=''>".$field->kelas."</td>
									<td class='td-show'>".substr($field->alamat,0,20).".<span style='opacity:0.75;'>.</span><span style='opacity:0.5;'>.</span></td>
									<td class='td-hidden' hidden=''>".$field->alamat."</td>
									<td class='td-show'>".date_indo($field->tgl_lahir)."</td>
									<td class='text-center td-show'>
										<button ref='#' data-id='".$field->nis."' class='btn btn-success btn-xs editmember'>Edit</button>
										<a href='#' data-id='".$field->nis."' class='btn btn-danger btn-xs hapusjs'>Hapus</a>
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
	    	</div>
	    </section>
	</div>
	<div class="Adanggota2">
		<section class="content-header">
	      <h1>
	        Daftar Keanggotaan OSIS
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Daftar Keanggotaan</li>
	        <li class="active">OSIS</li>
	      </ol>
	    </section>
	    <section class="content">
	    	<div class="row">
		    	<div class="col-md-6">
		    		<div class="info-box">
		    			<span class="info-box-icon bg-yellow">
		    				<i class="ion ion-ios-people-outline"></i>
		    			</span>
	    				<div class="info-box-content">
	    					<span class="info-box-text">Jumlah Pengurus</span>
	    					<span class="info-box-number"><?php echo $cdata;?></span>
	    				</div>
		    		</div>
		    	</div>
		    	<div class="col-md-6">
		    		<div class="info-box">
		    			<span class="info-box-icon bg-navy">
		    				<i class="glyphicon glyphicon-user"></i>
		    			</span>
	    				<div class="info-box-content">
	    					<span class="info-box-text">Pembina</span>
	    					<span class="info-box-number">Aca Supriatna, S.Pd.</span>
	    				</div>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="info-box">
		    			<span class="info-box-icon bg-blue">
		    				<i class="fa fa-mars"></i>
		    			</span>
		    			<div class="info-box-content">
		    				<span class="info-box-text">Laki - laki</span>
		    				<span class="info-box-number"><?php echo $mars;?></span>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="info-box">
		    			<span class="info-box-icon bg-maroon">
		    				<i class="fa fa-venus"></i>
		    			</span>
		    			<div class="info-box-content">
		    				<span class="info-box-text">Perempuan</span>
		    				<span class="info-box-number"><?php echo $venus;?></span>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="info-box">
		    			<span class="info-box-icon " style="background-color: #55c87c;color:white">
		    				X
		    			</span>
		    			<div class="info-box-content">
		    				<span class="info-box-text">Anggota</span>
		    				<span class="info-box-number"><?php echo $x;?></span>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="info-box">
		    			<span class="info-box-icon bg-green">
		    				XI
		    			</span>
		    			<div class="info-box-content">
		    				<span class="info-box-text">Anggota</span>
		    				<span class="info-box-number"><?php echo $xi;?></span>
		    			</div>
		    		</div>
		    	</div>
		    </div>
	    	<div class="box">
	    		<div class="box-header with-border">
	    			<h3 class="box-title">Pengurus Organisasi Siswa Intra Sekolah</h3>
	    		</div>
	    		<div class="box-body">
	    		<a href="#" class="btn btn-success addmember"><i class="fa fa-plus"></i> Tambah Pengurus</a> <a href="<?= base_url('Print');?>" class="btn btn-warning" style="margin-left:10px"><i class="fa fa-print"></i> Cetak Data Pengurus</a>
	    		<form action="#" method="get" class="col-sm-4 pull-right">
			        <div class="input-group">
			          <input type="text" name="q" class="form-control" placeholder="Search Name...">
			          <span class="input-group-btn">
			                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
			                </button>
			              </span>
			        </div>
			    </form>
			    <!-- table print -->
			    <div id="table-osis">
			    	<table class="table table-bordered table-striped" style="margin-top:10px;">
	    				<thead>
	    					<th style="text-align:center;">No</th>
	    					<th style="text-align:center;">NIS</th>
	    					<th style="text-align:center;">NISN</th>
	    					<th style="text-align:center;">Nama Lengkap</th>
	    					<th class="td-hidden" style="text-align:center;" hidden="">Kelas</th>
	    					<th style="text-align:center;">Alamat</th>
	    					<th class='td-show' style="text-align:center;">Tanggal Lahir</th>
	    					<th class='td-show' style="text-align:center;">Aksi</th>
	    				</thead>
	    				<tbody>
							<?php
							if ($rows->num_rows()>0) {
								$no = 1;
								foreach ($rows->result() as $field) {
									echo "<tr>
									<td>".$no.".</td>
									<td>".$field->nis."</td>
									<td>".$field->nisn."</td>
									<td>".$field->nama_depan." ".$field->nama_belakang."</td>
									<td class='td-hidden' hidden=''>".$field->kelas."</td>
									<td class='td-show'>".substr($field->alamat,0,20).".<span style='opacity:0.75;'>.</span><span style='opacity:0.5;'>.</span></td>
									<td class='td-hidden' hidden=''>".$field->alamat."</td>
									<td class='td-show'>".date_indo($field->tgl_lahir)."</td>
									<td class='text-center td-show'>
										<button ref='#' data-id='".$field->nis."' class='btn btn-success btn-xs editmember'>Edit</button>
										<a href='#' data-id='".$field->nis."' class='btn btn-danger btn-xs hapusjs'>Hapus</a>
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
	    	</div>
	    </section>
	</div>
	<div class="Adanggota3">
		<section class="content-header">
	      <h1>
	        Daftar Keanggotaan Rohis
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Daftar Keanggotaan</li>
	        <li class="active">ROHIS</li>
	      </ol>
	    </section>
	    <section class="content">
	    	<div class="row">
		    	<div class="col-md-6">
		    		<div class="info-box">
		    			<span class="info-box-icon bg-yellow">
		    				<i class="ion ion-ios-people-outline"></i>
		    			</span>
	    				<div class="info-box-content">
	    					<span class="info-box-text">Jumlah Pengurus</span>
	    					<span class="info-box-number"><?php echo $cdata2;?></span>
	    				</div>
		    		</div>
		    	</div>
		    	<div class="col-md-6">
		    		<div class="info-box">
		    			<span class="info-box-icon bg-navy">
		    				<i class="glyphicon glyphicon-user"></i>
		    			</span>
	    				<div class="info-box-content">
	    					<span class="info-box-text">Pembina</span>
	    					<span class="info-box-number">Sahilan, S.Pd.I.</span>
	    				</div>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="info-box">
		    			<span class="info-box-icon bg-blue">
		    				<i class="fa fa-mars"></i>
		    			</span>
		    			<div class="info-box-content">
		    				<span class="info-box-text">Laki - laki</span>
		    				<span class="info-box-number"><?php echo $mars2;?></span>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="info-box">
		    			<span class="info-box-icon bg-maroon">
		    				<i class="fa fa-venus"></i>
		    			</span>
		    			<div class="info-box-content">
		    				<span class="info-box-text">Perempuan</span>
		    				<span class="info-box-number"><?php echo $venus2;?></span>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="info-box">
		    			<span class="info-box-icon " style="background-color: #55c87c;color:white">
		    				X
		    			</span>
		    			<div class="info-box-content">
		    				<span class="info-box-text">Anggota</span>
		    				<span class="info-box-number"><?php echo $x2;?></span>
		    			</div>
		    		</div>
		    	</div>
		    	<div class="col-md-3">
		    		<div class="info-box">
		    			<span class="info-box-icon bg-green">
		    				XI
		    			</span>
		    			<div class="info-box-content">
		    				<span class="info-box-text">Anggota</span>
		    				<span class="info-box-number"><?php echo $xi2;?></span>
		    			</div>
		    		</div>
		    	</div>
		    </div>
	    	<div class="box">
	    		<div class="box-header with-border">
	    			<h3 class="box-title">Pengurus Organisasi Siswa Intra Sekolah</h3>
	    		</div>
	    		<div class="box-body">
	    		<a href="#" class="btn btn-success addmember"><i class="fa fa-plus"></i> Tambah Pengurus</a> <a href="#" class="btn btn-warning printrohis" style="margin-left:10px"><i class="fa fa-print"></i> Cetak Data Pengurus</a>
	    		<form action="#" method="get" class="col-sm-4 pull-right">
			        <div class="input-group">
			          <input type="text" name="q" class="form-control" placeholder="Search Name...">
			          <span class="input-group-btn">
			                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
			                </button>
			              </span>
			        </div>
			    </form>
			    <!-- table print -->
			    <div id="table-rohis">
			    	<table class="table table-bordered table-striped" style="margin-top:10px;">
	    				<thead>
	    					<th style="text-align:center;">No</th>
	    					<th style="text-align:center;">NIS</th>
	    					<th style="text-align:center;">NISN</th>
	    					<th style="text-align:center;">Nama Lengkap</th>
	    					<th class="td-hidden" style="text-align:center;" hidden="">Kelas</th>
	    					<th style="text-align:center;">Alamat</th>
	    					<th class='td-show' style="text-align:center;">Tanggal Lahir</th>
	    					<th class='td-show' style="text-align:center;">Aksi</th>
	    				</thead>
	    				<tbody>
							<?php
							if ($rows2->num_rows()>0) {
								$no = 1;
								foreach ($rows2->result() as $field) {
									echo "<tr>
									<td>".$no.".</td>
									<td>".$field->nis."</td>
									<td>".$field->nisn."</td>
									<td>".$field->nama_depan." ".$field->nama_belakang."</td>
									<td class='td-hidden' hidden=''>".$field->kelas."</td>
									<td class='td-show'>".substr($field->alamat,0,20).".<span style='opacity:0.75;'>.</span><span style='opacity:0.5;'>.</span></td>
									<td class='td-hidden' hidden=''>".$field->alamat."</td>
									<td class='td-show'>".date_indo($field->tgl_lahir)."</td>
									<td class='text-center td-show'>
										<button ref='#' data-id='".$field->nis."' class='btn btn-success btn-xs editmember'>Edit</button>
										<a href='#' data-id='".$field->nis."' class='btn btn-danger btn-xs hapusjs'>Hapus</a>
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
	    	</div>
	    </section>
	</div>
	<div class="Adokumentasi">
		<section class="content-header">
	      <h1>
	        Dokumentasi
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Dokumentasi</li>
	      </ol>
	    </section>
	    <section class="content">
	    	
	    </section>
	</div>
	<div class="Atanggota">
		<section class="content-header">
	      <h1>
	        Dokumentasi
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Tambah Anggota</li>
	      </ol>
	    </section>
	    <section class="content">
	    	<form action="<?php echo base_url('Admin/tambah');?>" method="POST" id="form">
	    	<div class="box box-success">
	    		<div class="box-header with-border">
	    			<h4 class="box-title">Tambah Anggota</h4>
	    		</div>
	    		<div class="box-body">
	    				<select class="form-control orselect" name="or">
	    					<option value="none">-- Pilih salah satu Organisasi --</option>
	    					<option value="2">MPK</option>
	    					<option value="1">OSIS</option>
	    					<option value="3">ROHIS</option>
	    				</select>
	    				<br>
	    				<div class="form-group">
	    					<label>Nomor Induk</label><br>
	    					<input class="form-control inline" style="width:250px;" type="number" name="nis" placeholder="NIS" required disabled>
	    					<input class="form-control inline" style="width:350px;" type="number" name="nisn" placeholder="NISN" required disabled>
	    				</div>
	    				<div class="form-group">
	    					<label>Nama</label><br>
	    					<input class="form-control inline" style="width:350px;" type="text" name="nama_depan" placeholder="Nama Depan" required disabled>
	    					<input class="form-control inline" style="width:450px;" type="text" name="nama_belakang" placeholder="Nama Belakang" required disabled>
	    				</div>
	    				<div class="form-group" style="margin-top: 15px;">
	    					<label>Tempat Tanggal Lahir</label><br>
	    					<input class="form-control inline" style="width:350px;" type="text" name="tmp_lahir" placeholder="Tempat Lahir" required disabled>
	    					<input class="form-control inline" style="width:450px;" type="date" name="tgl_lahir" placeholder="Tanggal Lahir" required disabled>
	    				</div>
	    				<div class="form-group">
	    					<label>Identitas lainnya</label>
	    					<select class="form-control" style="width:155px;" name="gender" required disabled>
	    						<option>-- Jenis Kelamin --</option>
	    						<option value="L">Laki - laki</option>
	    						<option value="P">Perempuan</option>
	    					</select><br>
	    					<input class="form-control" style="width:150px;" type="text" name="agama" placeholder="Agama" required disabled><br>
	    					<input class="form-control" style="width:150px;" type="text" name="kls" placeholder="Kelas" required disabled><br>
	    					<textarea class="form-control" placeholder="Alamat" name="alamat" required disabled></textarea>
	    				</div>
	    				<div class="form-group">
	    					<input class="form-control" placeholder="Alasan Masuk Organisasi" name="amo" required disabled><br>
	    					<input class="form-control" placeholder="Prinsip" name="prinsip" required disabled>
	    				</div>
	    		</div>
	    		<div class="box-footer">
	    			<button type="submit" class="btn btn-success tsubmit" value="submit" name="button" disabled>Tambah</button>
	    			<a href="" class="btn btn-warning">Kembali ke Home</a>
	    		</div>
	    	</div>
	    </section>
	    </form>
	</div> 
	<div class="Aeanggota">
		<section class="content-header">
	      <h1>
	        Dokumentasi
	        <small>Control panel</small>
	      </h1>
	      <ol class="breadcrumb">
	        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	        <li class="active">Edit Anggota</li>
	      </ol>
	    </section>
	    <section class="content">
	    	<form action="<?php echo base_url('Admin/edit');?>" method="POST" id="form">
	    	<div class="box box-success">
	    		<div class="box-header with-border">
	    			<h4 class="box-title">Edit Anggota</h4>
	    		</div>
	    		<div class="box-body">
	    				<select class="form-control orselect" name="or">
	    					<option value="none">-- Pilih salah satu Organisasi --</option>
	    					<option value="2">MPK</option>
	    					<option value="1">OSIS</option>
	    					<option value="3">ROHIS</option>
	    				</select>
	    				<br>
	    				<div class="form-group">
	    					<label>Nomor Induk</label><br>
	    					<input class="form-control inline" style="width:250px;" type="number" name="nis" placeholder="NIS" required disabled>
	    					<input class="form-control inline" style="width:350px;" type="number" name="nisn" placeholder="NISN" required disabled>
	    				</div>
	    				<div class="form-group">
	    					<label>Nama</label><br>
	    					<input class="form-control inline" style="width:350px;" type="text" name="nama_depan" placeholder="Nama Depan" required disabled>
	    					<input class="form-control inline" style="width:450px;" type="text" name="nama_belakang" placeholder="Nama Belakang" required disabled>
	    				</div>
	    				<div class="form-group" style="margin-top: 15px;">
	    					<label>Tempat Tanggal Lahir</label><br>
	    					<input class="form-control inline" style="width:350px;" type="text" name="tmp_lahir" placeholder="Tempat Lahir" required disabled>
	    					<input class="form-control inline" style="width:450px;" type="date" name="tgl_lahir" placeholder="Tanggal Lahir" required disabled>
	    				</div>
	    				<div class="form-group">
	    					<label>Identitas lainnya</label>
	    					<select class="form-control" style="width:155px;" name="gender" required disabled>
	    						<option>-- Jenis Kelamin --</option>
	    						<option value="L">Laki - laki</option>
	    						<option value="P">Perempuan</option>
	    					</select><br>
	    					<input class="form-control" style="width:150px;" type="text" name="agama" placeholder="Agama" required disabled><br>
	    					<input class="form-control" style="width:150px;" type="text" name="kls" placeholder="Kelas" required disabled><br>
	    					<textarea class="form-control" placeholder="Alamat" name="alamat" required disabled></textarea>
	    				</div>
	    				<div class="form-group">
	    					<input class="form-control" placeholder="Alasan Masuk Organisasi" name="amo" required disabled><br>
	    					<input class="form-control" placeholder="Prinsip" name="prinsip" required disabled>
	    				</div>
	    		</div>
	    		<div class="box-footer">
	    			<button type="submit" class="btn btn-success tsubmit" value="submit" name="button" disabled>Edit</button>
	    			<a href="" class="btn btn-warning">Kembali ke Home</a>
	    		</div>
	    	</div>
	    </section>
	    </form>
	</div> 
</div>
</body>
