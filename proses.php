<center style="background-image: url(covid1.jpg);">
	<p>Data Pemantaun Covid19 wilayah <?php echo $_GET['nama_wilayah'];?></p>
	<p>Per <?php echo date("d F Y H:i:s");?> (Waktu dan Jam Sekarang)</p>
	<p><?php echo $_GET['nama_operator'];?>/<?php echo $_GET['nim_mahasiswa'];?></p>

	<hr />
	<br />

	<table cellpadding="20">
		<tr style="background-color: aqua; border: solid 1px #ddd;">
			<td>Positif</td>
			<td>Dirawat</td>
			<td>Sembuh</td>
			<td>Meninggal</td>
		</tr>
		<tr>
			<td><?php echo $_GET['jumlah_positif'];?></td>
			<td><?php echo $_GET['jumlah_dirawat'];?></td>
			<td><?php echo $_GET['jumlah_sembuh'];?></td>
			<td><?php echo $_GET['jumlah_meninggal'];?></td>
		</tr>
	</table>
</center>