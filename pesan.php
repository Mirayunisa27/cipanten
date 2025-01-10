<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Situs Cipanten</title>
	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
  </head>
  <body>
	<!-- Navbar -->
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand" href="index.html">SitusCipanten.Com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#form_pemesanan">FORM PEMESANAN</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  
	<!-- Header -->
  <header id="home" style="text-align: center; background-color:rgb(116, 113, 113); padding: 50px 0;">
	<div class="container">
		<h1 style="color: rgb(255, 255, 255);">SELAMAT DATANG DI WISATA<br> SITU CIPANTEN</h1>
		<p class="lead">Nikmati keindahan alam dan pengalaman yang menyenangkan di Situ Cipanten!</p>
	</div>
  </header>
</head>
<body>
<main id="form_pemesanan" class="flex-shrink-0">
    <div class="container" background-color:rgb(116, 113, 113);>
        <form method="post" action="proses.php">
            <div class="card mt-2"  >
                <div class="card-header bg-dark text-white">
                    Form Pemesanan Paket Wisata
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama_pemesanan" name="nama_pemesanan" placeholder="Nama Lengkap Sesuai Tanda Pengenal" required>
                    </div>
                    <div class="mb-3">
                        <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
                        <input type="text" class="form-control" id="hp_pemesan" name="hp_pemesan" placeholder="Nomor Handphone 08..." required>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_pemesanan" class="form-label">Tanggal Pemesanan</label>
                        <input type="date" class="form-control" id="tanggal_pemesanan" name="tanggal_pemesanan" required>
                    </div>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="destinasi" name="kategori[]" value="destinasi" onchange="toggleOptions('destinasi'); updateTotal();">
                                <label class="form-check-label" for="destinasi">Destinasi</label>
                            </div>
                            <div class="form-check">
									<input class="form-check-input" type="checkbox" id="kulineran" name="kategori[]" value="kulineran" onchange="toggleOptions('kulineran'); updateTotal();">
									<label class="form-check-label" for="kulineran">Kulineran</label>
								</div>
                        </div>
                    </div>
                    <div id="destinasi-options" class="mb-3" style="display: none;">
                        <label class="form-label">Pilih Destinasi</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox"  name="destinasi[]" value="20000" data-nama="Wahana Karpet Ajaib" onchange="updateTotal()">
                            <label class="form-check-label">Wahana Karpet Ajaib (Rp.20.000,00-)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="destinasi[]" value="15000" data-nama="wahana_bebek_goes"onchange="updateTotal()">
                            <label class="form-check-label">Wahana Bebek Goes (Rp.15.000,00-)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="destinasi[]" value="30000" data-nama="Wahana Perahu" onchange="updateTotal()">
                            <label class="form-check-label">Wahana Perahu (Rp.30.000,00-)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="destinasi[]" value="25000" data-nama="wahana Sepeda Gantung" onchange="updateTotal()">
                            <label class="form-check-label">Wahana Sepeda Gantung (Rp.25.000,00-)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="destinasi[]" value="10000" data-nama="Wahana Ayunan" onchange="updateTotal()">
                            <label class="form-check-label">Wahana Ayunan (Rp.10.000,00-)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="destinasi[]" value="0" id="caffe-option" data-nama="caffe" onchange="enableSeatSelection(); updateTotal()">
                            <label class="form-check-label">Caffe (Rp.0-)</label>
                        </div>
                    </div>
                    <div id="kulineran-options" class="mb-3" style="display: none;">
                    <label class="form-label">Pilih Kulineran</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="pisang_crispy" value="15000"  data-nama="Pisang Crispy" onchange="updateTotal()">
                            <label class="form-check-label">Pisang Crispy (Rp.15.000,00-)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kulineran[]" value="25000" data-nama="Chicken Katsu" onchange="updateTotal()">
                            <label class="form-check-label">Chicken Katsu (Rp.25.000,00-)</label>
                        </div>
						<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kulineran[]" value="18000" data-nama="Kentang Goreng" onchange="updateTotal()">
                            <label class="form-check-label">Kentang Goreng (Rp.18.000,00-)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kulineran[]" value="16000" data-nama="Nasi Goreng" onchange="updateTotal()">
                            <label class="form-check-label">Nasi Goreng (Rp.16.000,00-)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kulineran[]" value="14000" data-nama="Jus Alpukat" onchange="updateTotal()">
                            <label class="form-check-label">Jus Alpukat (Rp.14.000,00-)</label>
                        </div>
						<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kulineran[]" value="26000" data-nama="Nasi Timbel" onchange="updateTotal()">
                            <label class="form-check-label">Nasi Timbel (Rp.26.000,00-)</label>
                        </div>
						<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kulineran[]" value="17000" data-nama="Roti Bakar" onchange="updateTotal()">
                            <label class="form-check-label">Roti Bakar (Rp.17.000,00-)</label>
                        </div>
						<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kulineran[]" value="19000" data-nama="Jus Alpukat" onchange="updateTotal()">
                            <label class="form-check-label">Jus Alpukat (Rp.19.000,00-)</label>
                        </div>
						<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kulineran[]" value="11000" data-nama="Chocolatos"  onchange="updateTotal()">
                            <label class="form-check-label">Chocolatos (Rp.11.000,00-)</label>
                        </div>
						<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kulineran[]" value="22000" data-nama="Waffle" onchange="updateTotal()">
                            <label class="form-check-label">Waffle (Rp.22.000,00-)</label>
                        </div>
						<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kulineran[]" value="13000" data-nama="Jus Buah Naga" onchange="updateTotal()">
                            <label class="form-check-label">Jus Buah Naga (Rp.13.000,00-)</label>
                        </div>
						<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kulineran[]" value="10000" data-nama="Latte Coffe" onchange="updateTotal()">
                            <label class="form-check-label">Latte Coffe (Rp.10.000,00-)</label>
                        </div>
						<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kulineran[]" value="18000" data-nama="Flavoured Soda" onchange="updateTotal()">
                            <label class="form-check-label">Flavoured Soda (Rp.23.000,00-)</label>
                        </div>
						<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kulineran[]" value="24000" data-nama="Mojito" onchange="updateTotal()">
                            <label class="form-check-label">Mojito (Rp.24.000,00-)</label>
                        </div>
						<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kulineran[]" value="21000"  data-nama="Cappucino" onchange="updateTotal()">
                            <label class="form-check-label">Cappucino (Rp.21.000,00-)</label>
                        </div>
						<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kulineran[]" value="27000" data-nama="Mocktail" onchange="updateTotal()">
                            <label class="form-check-label">Mocktail (Rp.27.000,00-)</label>
                        </div>
						<div class="form-check">
                            <input class="form-check-input" type="checkbox" name="kulineran[]" value="28000" data-nama="Macchiato" onchange="updateTotal()">
                            <label class="form-check-label">Macchiato (Rp.28.000,00-)</label>
                        </div>
                    </div>
                    <div id="seat-selection" class="mb-3" style="display: none;">
                        <label for="pilih_nomor_kursi" class="form-label">Pilih Nomor Kursi</label>
                        <select class="form-control" id="seat_number" name="seat_number">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
							<option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                            <option value="16">16</option>
                            <option value="17">17</option>
                            <option value="18">18</option>
                            <option value="19">19</option>
                            <option value="20">20</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
                        <input type="number" class="form-control" id="jumlah_peserta" value="1" name="jumlah_peserta" placeholder="Jumlah Hari Perjalanan" required>
                    </div>
                    <form method="post" action="proses.php"></form>
                    <div class="mb-3">
                            <label for="daftar_wahana" class="form-label">Wahana yang Dipilih</label>
                            <textarea class="form-control" id="daftar_wahana" name="daftar_wahana" readonly></textarea>
                        </div>
                        <form method="post" action="proses.php"></form>
                        <div class="mb-3">
                            <label for="daftar_kulineran" class="form-label">kulineran yang Dipilih</label>
                            <textarea class="form-control" id="daftar_kulineran" name="daftar_kulineran" readonly></textarea>
                        </div>
                    <div class="mb-3">
                        <label for="total_harga" class="form-label">Total Harga</label>
                        <input type="text" class="form-control" id="total_harga" name="total_harga" value="Rp.0" readonly>
                    </div>
                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-primary" value="Simpan">
                    <input type="reset" class="btn btn-danger" value="Ulangi" onclick="resetTotal()">
                </div>
            </div>
        </form>
    </div>
    <script>
    function toggleOptions(category) {
        const destinasiOptions = document.getElementById("destinasi-options");
        const kulineranOptions = document.getElementById("kulineran-options");

        if (category === "destinasi") {
            destinasiOptions.style.display = document.getElementById("destinasi").checked ? "block" : "none";
        }

        if (category === "kulineran") {
            kulineranOptions.style.display = document.getElementById("kulineran").checked ? "block" : "none";
        }
    }

    function enableSeatSelection() {
        const seatSelection = document.getElementById("seat-selection");
        const caffeOption = document.getElementById("caffe-option");

        seatSelection.style.display = caffeOption.checked ? "block" : "none";
    }
    function updateTotal() {
    // Mengambil elemen checkbox destinasi dan kulineran
    const destinasiCheckboxes = document.querySelectorAll('#destinasi-options input[type="checkbox"]:checked');
    const kulinerCheckboxes = document.querySelectorAll('#kulineran-options input[type="checkbox"]:checked');
    const jumlahPeserta = parseInt(document.getElementById("jumlah_peserta").value) || 1;

    let total = 0;
    let daftarWahana = [];
    let daftarKulineran = [];

    // Menghitung total dari destinasi
    destinasiCheckboxes.forEach(checkbox => {
        total += parseInt(checkbox.value) || 0;
        daftarWahana.push(checkbox.getAttribute("data-nama"));
    });

    // Menghitung total dari kulineran
    kulinerCheckboxes.forEach(checkbox => {
        total += parseInt(checkbox.value) || 0;
        daftarKulineran.push(checkbox.getAttribute("data-nama"));
    });

    // Total dikalikan jumlah peserta
    total *= jumlahPeserta;

    // Format harga ke format IDR
    const formattedTotal = `Rp.${total.toLocaleString('id-ID')}`;
    
    // Menampilkan hasil di input form
    document.getElementById("total_harga").value = formattedTotal;
    document.getElementById("daftar_wahana").value = daftarWahana.join(', ');
    document.getElementById("daftar_kulineran").value = daftarKulineran.join(', '); // Untuk daftar kulineran
}

// Tambahkan event listener ke input checkbox untuk memperbarui daftar secara langsung
document.querySelectorAll('#destinasi-options input[type="checkbox"], #kulineran-options input[type="checkbox"]').forEach(checkbox => {
    checkbox.addEventListener('change', updateTotal);
});

// Menambahkan event listener pada jumlah peserta
document.getElementById("jumlah_peserta").addEventListener("input", updateTotal);

function resetTotal() {
    // Mereset total harga dan daftar
    document.getElementById("total_harga").value = "Rp.0";
    document.getElementById("daftar_wahana").value = "";
    document.getElementById("daftar_kulineran").value = "";
    
    // Mereset checkbox destinasi dan kulineran
    const allCheckboxes = document.querySelectorAll('#destinasi-options input[type="checkbox"], #kulineran-options input[type="checkbox"]');
    allCheckboxes.forEach(checkbox => checkbox.checked = false);

    // Mereset jumlah peserta ke default
    document.getElementById("jumlah_peserta").value = 1;
}

    document.getElementById("jumlah_peserta").addEventListener("input", updateTotal);
</script>

    </main>


	  <footer class="footer">
		<div class="container">
		  <div class="row align-items-center">
			<!-- Kolom 1: Logo -->
			<div class="col-md-4">
			  <div class="footer-logo">
				<img src="img/logo.png" alt="Logo" class="footer-logo-img">
			  </div>
			</div>
	  
			<!-- Kolom 2: Layanan dan Dukungan -->
			<div class="col-md-4 d-flex justify-content-between">
			  <!-- Bagian Layanan -->
			  <div class="footer-links">
				<h5>LAYANAN</h5>
				<ul>
				  <li><a href="#">Saran Destinasi</a></li>
				  <li><a href="#">Hubungi Kami</a></li>
				</ul>
			  </div>
	  
			  <!-- Bagian Dukungan -->
			  <div class="footer-links">
				<h5>DUKUNGAN</h5>
				<ul>
				  <li><a href="#">Tentang Situ Cipanten</a></li>
				  <li><a href="#">Ketentuan</a></li>
				  <li><a href="#">Kebijakan Privasi</a></li>
				</ul>
			  </div>
			</div>
	  
			<!-- Kolom 3: Ikuti Kami di Instagram -->
			<div class="col-md-4 text-md-end d-flex justify-content-between">
			  <div class="footer-follow">
				<h5>IKUTI KAMI DI</h5>
				<a href="https://instagram.com/situcipanten_mjlk" target="_blank" class="social-link">
				  <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" class="social-icon">
				  @situcipanten_mjlk
				</a>
			  </div> 
			</div>
		  </div>
		</div>
	  </footer>
	  
		<!-- Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	  </body>
	  </html>
	  
	  </main>
</body>
</html>
