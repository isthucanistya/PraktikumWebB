<div class="content">
	<div class="c_left">
		<h3>Artikel Populer</h3>
		<ul>
			<li><a href="#">Desain WEB</a></li>
			<li><a href="#">HTML</a></li>
			<li><a href="#">CSS</a></li>
			<li><a href="#">Lain-lain</a></li>
		</ul>
	</div>
	<div class="c_right">
		
		<p style="font-weight: bold; font-size: 17pt"><?php 
		if($user=='NULL'){ 
			echo "Selamat Datang";
		}else{
			echo "Selamat Datang,     ". $user."(".$akses.")";
		}
		?></p>
		<p>Dalam Perpustakaan Online Berbasis WEB dibawah naungan Universitas Udayana. Perpustakaan yang mempunyai koleksi buku sebagian besar dalam bentuk format digital dan yang bisa diakses dengan komputer.</p>
		<p>Ayo, manfaatkan layanan ini untuk menambah ilmumu!</p>
	</div>
</div>