
<h3 class="gray-text">Dashboard</h3>

	<div class="row">
		<div class="col s4">
		  <div class="card black">
		    <div class="card-content white-text">
			<?php 
				$query = mysqli_query($koneksi,"SELECT * FROM aspirasi");
				$jlmmember = mysqli_num_rows($query);
				if($jlmmember<1){
					$jlmmember=0;
				}
			 ?>
		      <span class="card-title">Laporan Masuk<b class="right"><?php echo $jlmmember; ?></b></span>
		      <p></p>
		    </div>
		  </div>
		</div>	

		<div class="col s4">
		    <div class="card blue">
		    <div class="card-content white-text">
			<?php 
				$query = mysqli_query($koneksi,"SELECT * FROM aspirasi WHERE status='selesai'");
				$jlmmember = mysqli_num_rows($query);
				if($jlmmember<1){
					$jlmmember=0;
				}
			 ?>
		      <span class="card-title">Laporan Selesai <b class="right"><?php echo $jlmmember; ?></b></span>
		      <p></p>
		    </div>
		  </div>
		</div>
	</div>