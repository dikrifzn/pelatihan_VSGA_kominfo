<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perusahaan </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>
  <!-- Navigsi -->
    <nav>
        <div class="logo"><a href="#"></a></div>
        <div><a href="#">Home</a></div>
        <div><a href="#profile">Profile</a></div>
        <div><a href="#visimisi">Visi dan Misi</a></div>
        <div><a href="#produk">Produk Kami</a></div>
        <div><a href="#kontak">Kontak</a></div>
        <!-- Dropdown Menu -->
        <div>
            <li id="dropdownToogle" class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  About
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="pages/galeri_foto.php">Galeri Foto</a></li>
                  <li><a class="dropdown-item" href="pages/client.php">Client Kami</a></li>
                  <li><a class="dropdown-item" href="#">Logout</a></li>
                </ul>
              </li>
        </div>
    </nav>
    <!-- Home -->
    <section id="home" class="home">
      <h1>Ruang Buah</h1>
      <a href="#produk">Produk Kami</a>
    </section>
    <!-- Profile -->
    <section id="profile" class="profile">
      <h2>Profile</h2>
      <p>kini sudah banyak orang-orang menjadikan UMKM sebagai suatu profesi. Mereka berusaha mengembangkan perusahaan mereka. mulai dari perusahaan jasa hingga makanan.</p>
      <p>Namun, terkadang salah satu kesulitan dalam mengembangkan usaha ialah mencari bahan-bahan terutama untuk perusahaan makanan yang tentu bahan-bahan makanan yang mereka cari.</p>

      <p>karna itu, kami dari "Ruang Buah" menyediakan layanan Suply Bahan Makanan untuk memajukan para pendiri UMKM.</p>

      <p>"Ruang Buah" adalah suatu Perusahaan penyedia bahan  makanan dengan harga yang terjangkau untuk para UMKM. Kami telah bermitra dengan banyak perusahaan di Indonesia.
      </p>
      <p>Bahan yang kami sediakan sangat bagus dan di rawat dengan baik sampai ke tangan mitra kami.</p>
    </section>
    <!-- Visi Dan Misi -->
    <section id="visimisi" class="visimisi">
      <h2>VISI dan MISI</h2>
      <p>visi Kami ialah "Menyediakan Bahan untuk para Usaha Mikro Kecil dan Menengah dan Meningkatkan pemanfaatan bahan lokal"</p>
      <p>MISI kami ialah :</p>
      <ul>
        <li>Memenuhi kebutuhan barang dan jasa konsumen dengan melakukan stok barang yang cukup dan berkualitas tinggi.</li>
        <li>Memaksimalkan sumber daya alam dalam menciptakan barang dan jasa yang dibutuhkan.</li>
        <li>Memaksimalkan sumber daya manusia supaya perusahaan tetap berjalan.</li>
        <li>Memiliki karyawan yang selalu belajar dan selalu mengembangkan barang sesuai dengan perkembangan zaman</li>
      </ul>
    </section>
    <!-- Produk -->
    <section id="produk" class="produk">
      <h2>Produk Kami</h2>
      <div class="produkbox">
        <div><img src="img/anggur.jpg" alt=""></div>
        <div><img src="img/mangga.jpg" alt=""></div>
        <div><img src="img/leci.jpg" alt=""></div>
        <div><img src="img/stroberry.jpg" alt=""></div>
        <div><img src="img/kiwi.jpg" alt=""></div>
        <div><img src="img/apel.jpg" alt=""></div>
        <div><img src="img/.jpg" alt=""></div>
        </div>
      </div>
    </section>
    <!-- Kontak -->
    <section id="kontak" class="kontak">
      <div class="contactBox">
        <div class="medsos">
            <h3>Contact Us</h3>
            <a href=""><img src="img/whatlogo.png" alt="whatsapp"></a>
            <a href=""><img src="img/Instalogo.png" alt="instagram"></a>
        </div>
    </div>
    </section>
</body>
</html>