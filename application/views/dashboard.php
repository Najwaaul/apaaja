<!DOCTYPE html>
<html lang="en">
<?php $this->load->view('partials/header') ?>
<?php $this->load->view('partials/sidenav') ?>
<!-- page header -->
<header id="home" class="header">
        <div class="overlay"></div>
        <div class="header-content container">
            <h3 class="header-title">
                <span class="up">Selamat Datang</span>
                <span class="down">Di Situs lelang Online</span>
            </h3>
            <p class="header-subtitle">Sepatu Branded</p>

        </div>
    </header><!-- end of page header -->

    <!-- about section -->
    <section class="section pt-0" id="about">
        <!-- container -->
        <div class="container text-center">
            <!-- about wrapper -->
            <div class="about">
                <div class="about-img-holder">
                    <img src="assets/imgs/airforce.jpg" class="about-img"
                        alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                </div>
                <div class="about-caption">
                    
                    <h2 class="section-title mb-3">Tentang Nike</h2>
                    <p>
                    Nike adalah produsen terbesar pakaian dan sepatu olahraga. Merek Nike terkenal dengan cepat di seluruh dunia, terutama logo Swoosh dan slogan “Just Do It”. Perusahaan ini didirikan di Oregon tahun 1964 dengan nama Blue Ribbon Sports belakangan nama ini diganti menjadi Nike pada tahun 1971.
                    <br>
                        <br>Nike telah beroperasi di Indonesia sejak 1988 dan hampir sepertiga dari sepatu yang ada sekarang merupakan produk dari sana.

Hubungan antara Nike dan kontraktor di Indonesia cukup dekat. Setiap personel Nike di setiap pabrik di Indonesia memeriksa kualitas dan pengerjaan yang memenuhi persyaratan ketat Nike.
Sebagian besar pabrik yang memproduksi untuk Nike berlokasi di daerah yang baru dikembangkan untuk industri ringan di Tangerang dan Serang, sebelah barat Jakarta. Pada pabrik yang dimiliki Korea (dan beberapa yang dimiliki Indonesia juga) manajemen puncaknya dipegang oleh orang Korea. manajer tingkat menengah dan supervisor juga dapat berasal dari Korea atau Indonesia. Tapi para pekerja produksi semua berasal dari Indonesia, terutama wanita muda dalam kelompok usia 16-22, biasanya pekerja tersebut berasal dari pulau Jawa.
                    </p>
                </div>
            </div><!-- end of about wrapper -->
        </div><!-- end of container -->
    </section> <!-- end of about section -->

    <!-- portfolio section -->
    <section class="section" id="portfolio">
        <div class="container text-center">
            <p class="section-subtitle">Mau lelang yang mana?</p>
            <h6 class="section-title mb-6">Lelang Berlangsung</h6>
            <!-- row -->
            <div class="row">
                <?php foreach ($berlangsung as $b) { ?>
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img src="<?=site_url('upload/barang/' .$b->gambar)?>" class="portfolio-card-img"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4><?= $b->nama_barang?></h5>
                                    <p>IDR <?= number_format($b->harga_awal, 2) ?></p>
                                    <a href="<?=site_url('page/detail_lelang/'. $b->id_lelang)?>">Detail</a>

                            </span>
                        </span>
                    </a>
                </div>
                <?php } ?>
            </div><!-- end of row -->
        </div><!-- end of container -->
    </section> <!-- end of portfolio section -->


        </div><!-- end of container -->
    </section><!-- end of blog section -->
     <!-- partial:partials/_footer.html -->
     <footer class="footer">
        <div class="container">
  <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
    <div class="col mb-4">
      <h5>LELANG SEPATU BRANDED</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"> Sistem Lelang ini dibuat semata-mata untuk memenuhi syarat kelulusan dari SMK Farmako Medika Plus.</a></li>
        <!-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li> -->
      </ul>
    </div>

    <div class="col mb-4">
      <h5>KONTAK KAMI</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Cinagara, Kec. Caringin, Kabupaten Bogor, Jawa Barat 16730</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tel. 0838-1998-2303</a></li>
      </ul>
    </div>

    <div class="col mb-4">
      <h5>JADWAL BUKA</h5>
      <ul class="nav flex-column">
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Buka :</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Senin - Jumat, pukul 09.00 - 15.00 WIB <br> Sabtu, pukul 9.00 - 12.00 WIB</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Tutup :</a></li>
        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Minggu dan Hari Libur Nasional</a></li>
      </ul>
    </div>
  </footer>
</div>
  </footer>
</div>
    <?php $this->load->view('partials/footer') ?>
</html>