<link rel="stylesheet" href="css/responsive.css">
<style>

/* Menyesuaikan tata letak kartu pada layar yang lebih kecil */
@media screen and (max-width: 768px) {
    .gray-text {
        font-size: 1.2em; /* Atur ukuran teks yang responsif */
    }
    .col {
        width: 100%; /* Mengisi lebar layar pada layar yang lebih kecil */
    }
	.container {
    max-width: 1200px; /* Sesuaikan dengan kebutuhan */
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.gray-text {
    position: absolute;
    top: 0;
    right: 0;
    margin: 20px; /* Berikan margin agar tidak tepat di pojok */
	font-weight: bold;
}

.row {
    display: flex;
    justify-content: center; /* Menempatkan kotak di tengah horizontal */
    flex-wrap: wrap; /* Untuk wrapping kotak jika ada lebih banyak */
    gap: 20px; /* Jarak antara kotak 1 dan 2 */
}

.col {
    width: 300px; /* Atur lebar kotak sesuai kebutuhan */
    margin-bottom: 20px; /* Ruang antara kotak 1 dan 2 */
}

.card-content{
	text-align: left;
	margin-top: 15px;
}

.card-title{
	display: flex;
    justify-content: center; /* Mengatur teks judul kartu menjadi terpusat */
    align-items: center; /* Memusatkan teks secara vertikal */
    height: 100%;
}

.card {
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    height: 80px; /* Atur tinggi kotak sesuai kebutuhan */
	width: 150px;
	right: 30px;
}

.card-title {
    margin: 0; /* Menghapus margin agar teks lebih terpusat */
}
}

</style>
<div class="container">
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
</div>