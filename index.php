<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'])){
    header ("location:login.php");
}
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Database</title>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/1.css" type="text/css" media="screen,projection" />
</head>
<body>
<div id="sidebar">
  <h1><a href="#">Database</a></h1>
  <p> Menu untuk login ke akun yang sudah ada atau membuat dan mengedit akun kamu. </p>
  <ol id="nav">
    <li><a href="login.php"><b>»</b>Login</a></li>
	 <li><a href="create.php"><b>»</b>Create New Account</a></li>
     <li><a href="logout.php"><b>»</b>Logout</a></li>
  </ol>
</div>
<div id="content">
  <h2 class="first"><a href="#" id="intro">Berita tentang RIAU</a></h2>
  <p class="postdata"> Posted on 01.02.21 by <a href="#">Dibya</a> || <a href="#">666 Comments</a> </p>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<div id="hot-news">
	<ul id="js-news" class="js-hidden">
		<li>Dari Pemakaman Mantan Menkes Endang Rahayu Sedyaningsih</li>
		<li>Kantor Bupati Mesuji Dibakar Kantor Bupati Mesuji Dibakar Kantor Bupati Mesuji Dibakar</li>
		<li>Dari Pemakaman Mantan Menkes Endang Rahayu Sedyaningsih</li>
		<li>Kantor Bupati Mesuji Dibakar Mantan Menkes Endang Rahayu Sedyaningsih</li>
	</ul>
</div>

</div>
</div>
</div>

<div class="cleaner_h30"></div>
<div id="line-header">
<div id="center-header">
<div id="left-center-header">
	<img src="images/logo.png" />
</div>

</div>
</div>
<div id="line-menu">

</div>
</div>
<div id="content">
	<div id="center-content">
	<div id="left-center-content">
	<div class="cleaner_h10"></div>

	
	<div class="cleaner_h10"></div>
	
	<script>
$(document).ready(function(){
$("a.tab").click(function () {
$(".active").removeClass("active");
$(this).addClass("active");
$(".content").slideUp();
var content_show = $(this).attr("title");
$("#"+content_show).slideDown();
});
});
</script>
<div class="tabbed_box">
<div class="tabbed_area">
<ul class="tabs">
<li><a href="javascript:void(0);" title="content_1" class="tab active">Terkini</a></li>
<li><a href="javascript:void(0);" title="content_2" class="tab">Terpopuler</a></li>
<li><a href="javascript:void(0);" title="content_3" class="tab">Terkomentari</a></li>
</ul>
<div id="content_1" class="content">
<ul>
<li>Dari Pemakaman Mantan Menkes Endang Rahayu Sedyaningsih</li>
<li>Real Setop Hat-trick Barca Hat-trick Barca</li>
<li>JSS Radar Lampung Sudah 15 Ribu</li>
<li>Dari Pemakaman Mantan Menkes Endang Rahayu Sedyaningsih</li>
<li>Real Setop Hat-trick Barca</li>
<li>JSS Radar Lampung Sudah 15 Ribu</li>
<li>JSS Radar Lampung Sudah 15 Ribu</li>
<li>Dari Pemakaman Mantan Menkes Endang Rahayu Sedyaningsih</li>
<li>Real Setop Hat-trick Barca</li>
<li>JSS Radar Lampung Sudah 15 Ribu</li>
</ul>
</div>
<div id="content_2" class="content">
<ul>
<li>Dari Pemakaman Mantan Menkes Endang Rahayu Sedyaningsih</li>
<li>Real Setop Hat-trick Barca Hat-trick Barca</li>
<li>JSS Radar Lampung Sudah 15 Ribu</li>
<li>Dari Pemakaman Mantan Menkes Endang Rahayu Sedyaningsih</li>
<li>Real Setop Hat-trick Barca</li>
<li>JSS Radar Lampung Sudah 15 Ribu</li>
<li>JSS Radar Lampung Sudah 15 Ribu</li>
<li>Dari Pemakaman Mantan Menkes Endang Rahayu Sedyaningsih</li>
</ul>
</div>
<div id="content_3" class="content">
<ul>
<li>Real Setop Hat-trick Barca Hat-trick Barca</li>
<li>JSS Radar Lampung Sudah 15 Ribu</li>
<li>Dari Pemakaman Mantan Menkes Endang Rahayu Sedyaningsih</li>
<li>Real Setop Hat-trick Barca</li>
<li>JSS Radar Lampung Sudah 15 Ribu</li>
<li>JSS Radar Lampung Sudah 15 Ribu</li>
<li>Dari Pemakaman Mantan Menkes Endang Rahayu Sedyaningsih</li>
<li>Real Setop Hat-trick Barca</li>
<li>JSS Radar Lampung Sudah 15 Ribu</li>
</ul>
</div>
</div>
</div>
	<div class="cleaner_h10"></div>

<div id="sub-left-center-content">
<div id="single-sub-left-center-content">
<div id="title-sub-small">Jajak Pendapat</div>
<div class="cleaner_h10"></div>
<strong>Menurut anda, rubrik atau kategori apa yang perlu ditambahkan di Harian Banyuwangi?</strong>
<div class="cleaner_h5"></div>
<form method="post" action="">
<input type="radio" name="isi" />Pariwisata Daerah<div class="cleaner_h5"></div>
<input type="radio" name="isi" />Wisata Kuliner<div class="cleaner_h5"></div>
<input type="radio" name="isi" />Kesehatan<div class="cleaner_h5"></div>
<input type="radio" name="isi" />Sexs Education<div class="cleaner_h5"></div>
<input type="radio" name="isi" />Teknologi<div class="cleaner_h5"></div>
<input type="image" src="images/kirim.png" /> <input type="image" src="images/lihat.png" />
</form>
</div>
</div>
	<div class="cleaner_h5"></div>
	
	<div class="cleaner_h5"></div>

<div id="sub-left-center-content">
<div id="single-sub-left-center-content">
<div id="title-sub-small">Bergabung Dengan Facebook Kami</div>
<div class="cleaner_h10"></div>
<img src="images/fb.png" />
</div>
</div>
	<div class="cleaner_h10"></div>

<div id="sub-left-center-content">
<div id="single-sub-left-center-content">
<div id="title-sub-small">User Yang Online</div>
<div class="cleaner_h10"></div>
109 User Online
</div>
</div>

</div>
	
	
	<div id="right-center-content">
	<div class="cleaner_h10"></div>
	
<ul id="crumbs">
		<li><a href="#">Home</a></li>
		<li><a href="#">Bumi Lancang Kuning</a></li>
		<li>JSS Radar Lampung Sudah 15 Ribu</li>
	</ul>
	
	<div class="cleaner_h5"></div>
	<img src="images/iklan-center-top.png" />
	<div class="cleaner_h5"></div>
	
	<h3>Dua Subak Kekeringan Petani Mengeluh</h3>
<div id="content-attribute">
<span style="float:left; width:200px; text-align:left;">Jumat, 04 Mei 2012	 | 21:32</span>
<span style="float:right; width:390px; text-align:right;">Dibaca: <strong>57</strong> kali | <strong>0</strong> komentar | Share 
<script language="javascript">
document.write("<a href='http://twitter.com/home/?status=" + document.URL + "' target='_blank'> Twitter</a> | <a href='http://www.facebook.com/share.php?u=" + document.URL + "' target='_blank'> Facebook</a> ");
</script></span>
<div class="cleaner_h0"></div>
</div>

<div class="cleaner_h10"></div>
<div id="detail-img-with-article">
<img src="berita/10.jpg" width="300" height="200" />
<div class="cleaner_h10"></div>
<strong>Berita Lainnya</strong>
<ul>
	<li><a href="">IKI Salurkan Bantuan ke Posyandu</a></li>
	<li><a href="">Lukman Usulkan Tiga Calon Sekwan</a></li>
	<li><a href="">Dewan Desak RSUD Sukadana Berbenah</a></li>
	<li><a href="">Munculkan Azwar Dampingi Erwin</a></li>
	<li><a href="">IKI Salurkan Bantuan ke Posyandu</a></li>
	<li><a href="">Lukman Usulkan Tiga Calon Sekwan</a></li>
</ul>
</div>
HarianBanyuwangi.com. Negara. Memasuki musim kemarau saat ini di Jembrana para petani di Subak Tegal Lantang dan Subak Mertasari, Jembrana mengeluh. Pasalnya saat ini debit air dikawasan tersebut sangat kecil sehingga ratusan hektar sawah di subak tersebut mengalami kekeringan, akibatnya petani kini teracam gagal panen.
<br /><br />
Dari pantauan HarianBanyuwangi.com Jumat (4/5), disepanjang aliran irigasi nampak tidak ada air yang mengalir, bahkan tanah di saluran irigasi tersebut telah mongering. Demikiannya di Bendungan Sungai Pendem Nampak debit air sangat kecil.  Ketinggian air hanya berkisar 40 cm.  
<br /><br />
Menurut warga turunnya debit air di bendungan tersebut telah terjadi sejak dua tahun lalu. Penyebabnya karena di lokasi tersebut pernah terjadi banjir bandang, sehingga material longsoran menimbun sungai. Sehingga sungai menjadi sempit dan dangkal. Karena kondisi ini Subak Tegal Lantang dan Subak Mertasari kena imbasnya. Padi yang telah berumur 20 hari di dua subak tersebut dipastikan gagal panen karena kurangnya pasokan air.
<br /><br />
”Sejak dua minggu air sudah tidak mengalir ke sini pak, padi saya jelas akan mati karena tidak ada air,” terang I Gede Widana,43, petani Subak Tegal Lantang.
<br /><br />
Menurutnya beberapa petani yang sawahnya mengalami kekeringan, kini hanya mengharapkan keajaiban bisa memanen padinya. Sebenarnya menurut Widana petani di subak tersebut sudah berusaha mencarikan jalan keluar dengan membuat sumur bos. Namun sumur bor tersebut tidak mampu mengaliri sawah dengan maksimal. Demikian halnya air sumur bor tidak bisa bertahan lama.
<br /><br />
“kalau terus tidak ada hujan, sebentar lagi air di sumur bor ini akan kering,” ungkapnya.
<br /><br />
Lain halnya dengan I Putu Santika,40, petani setempat. Dirinya mengaku pasrah dengan kondisi tersebut. Dirinya mengaku air dari sumur bor yang dibuat secara suadaya tidak akan mampu mengaliri sawah sampai panen. “ Saya sudah tidak bisa berbuat banyak pak, sekarang hanya adu nasib saja,” keluhnya.(jsp)

<div class="cleaner_h20"></div>

<div id="content-attribute">
<span style="float:left; width:200px; text-align:left;">Jumat, 04 Mei 2012	 | 21:32</span>
<span style="float:right; width:390px; text-align:right;">Dibaca: <strong>57</strong> kali | <strong>0</strong> komentar | Share 
<script language="javascript">
document.write("<a href='http://twitter.com/home/?status=" + document.URL + "' target='_blank'> Twitter</a> | <a href='http://www.facebook.com/share.php?u=" + document.URL + "' target='_blank'> Facebook</a> ");
</script></span>
<div class="cleaner_h0"></div></div>

	
	<div class="cleaner_h5"></div>
	<img src="images/iklan-center-top.png" />
	<div class="cleaner_h5"></div>

<div id="content-attribute">
<strong>APA KOMENTAR ANDA...???</strong>
<div class="cleaner_h0"></div>
</div>
<div class="cleaner_h10"></div>
<div id="comment-box">
<form method="post" action="">
<table width="100%" cellpadding="5" cellspacing="0" border="0">
<tr><td>Nama Lengkap</td><td>:</td><td><input type="text" class="input-textfield-comment" /></td></tr>
<tr><td>Email</td><td>:</td><td><input type="text" class="input-textfield-comment" /></td></tr>
<tr><td>Komentar Anda</td><td>:</td><td><textarea class="input-comment" /></textarea></td></tr>
<tr><td></td><td></td><td><img src="images/captcha.jpg" /></td></tr>
<tr><td>Kode Captcha</td><td>:</td><td><input type="text" class="input-textfield-comment" /></td></tr>
<tr><td></td><td></td><td><input type="image" src="images/kirim.png" /> <input type="image" src="images/batal.png" /></td></tr>
</table>
</form>
<div class="cleaner_h10"></div>
<div id="footnote-comment-box">
Redaksi menerima komentar terkait artikel yang ditayangkan. Isi komentar menjadi tanggung jawab pengirim. Pembaca berhak melaporkan komentar jika dianggap tidak etis, kasar, berisi fitnah, atau berbau SARA. Redaksi akan menilai laporan dan berhak memberi peringatan dan menutup akses terhadap pemberi komentar.
</div>
</div>
	
	<div class="cleaner_h5"></div>
	
	<div class="cleaner_h5"></div>
	

<div class="cleaner_h40"></div>
	
	</div>
<div class="cleaner_h0"></div>
	
	</div>
</div>

</div>

<div id="footer">
  <h2><a href="#" id="author">About the Author</a></h2>
  <p class="postdata"> Posted on 01.02.21 by <a href="#">Aryo</a> || <a href="#">666 Comments</a> </p>
  <p> Dibya Fadlan Tarigan - 191401130 </p>
  <p> Aryo Harjosatrio - 191401124 </p>
  <h3>QOTD</h3>
  <blockquote>
    <p> Semoga dapat nilai 100. </p>
  </blockquote>
</body>
</html>
