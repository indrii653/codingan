<section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                    <?php
                    foreach($zona as $z):
                    $tgl = $z->tgl;                    
                    ?>
                    <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/<?=$z->latar;?>" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3><?=tanggal($tgl);?></h3>
                                    <p><?=bulan($tgl);?></p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <a class="d-inline-block" href="zona/detail/<?=$z->id?>">
                                    <h2><?=$z->judul;?></h2>
                                </a>
                                <p><?php echo strip_tags(substr(substr($z->deskripsi,0,200),0,strrpos(substr($z->deskripsi,0,200),' ')));?></p>
                                <a href="zona/detail/<?=$z->id?>">
                                  Baca Selanjutnya
                                </a>                                
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-comments"></i></a></li>
                                </ul>
                            </div>
                        </article>
                    <?php
                    endforeach;
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
