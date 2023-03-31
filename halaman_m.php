<?php 

if(isset($_GET['url']))
{
    $url = $_GET['url'];
    switch($url){

        case 'tulis_pengaduan';
        include 'tulis_p.php';
        break;

        case 'lihat_pengaduan';
        include 'lihat_p.php';
        break;

        case 'detail_pengaduan';
        include 'detail_p.php';
        break;

        case 'lihat_tanggapan';
        include 'tanggapan.php';
        break;




    }
}
else
{
    ?>
    <?php 

if(isset($_GET['url']))
{
    $url = $_GET['url'];
    switch($url){

        case 'tulis_pengaduan';
        include 'tulis_p.php';
        break;

        case 'lihat_pengaduan';
        include 'lihat_p.php';
        break;

        case 'detail_pengaduan';
        include 'detail_p.php';
        break;

        case 'lihat_tanggapan';
        include 'tanggapan.php';
        break;




    }
}
else
{
    ?>
    <div class="container" text-align="center">
	<h4 class="text-center mt-3">Uji Kompetensi Keahlian <br>Rekayasa Perangkat Lunak <br>Tahun 2022/2023</h4>
	<hr>
	<div class="row mt-3">
		<div class="col md-8">
			<div class="card">
				<div class="card-header">INFORMASI</div>
				<div class="card-body">
					Aplikasi Pengaduan Masyarakat ini dibuat untuk memenuhi tugas Uji Kompetensi Keahlian RPL Tahun 2023<br><br>
					
				</div>
				<div class="card-footer"></div>
		</div>
	</div>
	<div class="col md-4">
			<div class="card">
				<div class="card-header">Alamat</div>
				<div class="card-body">
					Dikembangkan oleh <br>
					Nama : Bayhaqi<br>
					Kelas : XII<br>
					Alamat : Jakarta Selatan<br>
				</div>
				<div class="card-footer"></div>
</div>
</div>
</div>
</div>
    <?php
}



?>
    <?php
}



?>