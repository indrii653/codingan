  <!-- banner part start-->
  <?php
  foreach($banner as $bn){
  ?>
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5><?=$bn->h5;?></h5>
                            <h1><?=$bn->h1;?></h1>
                            <p><?=$bn->p;?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="banner_img">
                        <img src="img/<?=$bn->img;?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
  }
    ?>
    <!-- banner part start-->
    <!-- about us part start-->
    <section class="about_us padding_top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_img">
                        <img src="img/top_service.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <h2>Tentang Kami</h2>
                        <p>UPT Puskemas Siliwangi adalah Puskemas perkotaan yang terletak di Kabupaten Garut, Provinsi Jawa Barat,
                           yang telah terakreditasi utama di Tahun 2019 dan meraih predikat juara I Penilaian Citra Pelayanan Publik di Kabupaten Garut 2021.
                           UPT Puskemas Siliwangi merupakan puskesmas non rawat inap dengan 1 puskesmas pembantu, 
                           yaitu puskesmas pembantu Sodong di Kelurahan Muara Sanding. </p>
                           <a class="btn_2 " href="baca">Baca Selengkapnya</a>
                        <div class="banner_item">
                            <div class="single_item">
                                <img src="<?php echo base_url(); ?>img/icon/medical.png" alt="">
                                <h5>Vaksin</h5>
                            </div>
                            <div class="single_item">
                                <img src="<?php echo base_url(); ?>img/icon/stethoscope.png" alt="">
                                <h5>Pelayanan</h5>
                            </div>
                            <div class="single_item">
                                <img src="<?php echo base_url(); ?>img/icon/pills.png" alt="">
                                <h5>Pengambilan Obat</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Pelayanan Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="img/icon/add.png" alt=""></span>
                            <h4>Ruang Pemeriksaan Gigi dan Mulut</h4>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="img/icon/add.png" alt=""></span>
                            <h4>Ruang Pemeriksaan Umum</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                        <div class="single_feature_img">
                            <img src="img/service.png" alt="">
                        </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="img/icon/add.png" alt=""></span>
                            <h4>UGD (Unit Gawat Darurat)</h4>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="img/icon/add.png" alt=""></span>
                            <h4>Ruang Pemeriksaan KIA KB</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- feature_part start-->
<!-- our depertment part start-->
    <section class="our_depertment section_padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-12">
                    <div class="depertment_content">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="<?php echo base_url(); ?>img/icon/add.png" alt=""></span>
                                            <h4>Ruang Laboratorium</h4>
                                            <h4>Ruang MTBS/MTBM</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="<?php echo base_url(); ?>img/icon/add.png" alt=""></span>
                                            <h4>Ruang Pemeriksaan<br> Kesehatan Jiwa</h4>
                                            <h4>Ruang Pelayanan KIR</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="<?php echo base_url(); ?>img/icon/add.png" alt=""></span>
                                            <h4>Ruang Persalinan</h4>
                                            <h4>Ruang Pemeriksaan <br> Kesehatan Lansia</h4>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon" ><img src="<?php echo base_url(); ?>img/icon/add.png" alt=""></span>
                                            <h4>Ruang TB Paru</h4>
                                            <h4>Ruang Pelayanan Konsultasi Gizi</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- our depertment part end-->    
<!--::blog_part start::-->
<section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Akreditasi</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="<?php echo base_url(); ?>img/blog/akreditasi.jpg" class="card-img-top" alt="penghargaan">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->
<!--::blog_part start::-->
    <section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Penghargaan</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="<?php echo base_url(); ?>img/blog/kapus.jpg" class="card-img-top" alt="penghargaan">
                            <div class="card-body">
                                <a href="penghargaan">
                                    <h5 class="card-title">PERINGKAT KE-3 KEPALA PUSKESMAS BERPRESTASI TINGKAT KABUPATEN GARUT 2021 </h5>
                                </a>
                                <ul>
                                    <li> <span class="ti-user"></span>dr. Nia Soniawaty</li>
                                    <li> <span class="ti-bookmark"></span>Kepala UPT PUSKESMAS SILIWANGI</li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="single-home-blog">
                        <div class="card">
                            <img src="<?php echo base_url(); ?>img/blog/perkotaan.jpg" class="card-img-top" alt="penghargaan">
                            <div class="card-body">
                                <a href="penghargaan">
                                    <h5 class="card-title">JUARA 1 KATEGORI PERKOTAAN PENILAIAN KINERJA UNIT </h5>
                                </a>
                                <ul>
                                    <li> <span class="ti-user"></span>PUSKESMAS SILIWANGI</li>    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::blog_part end::-->
