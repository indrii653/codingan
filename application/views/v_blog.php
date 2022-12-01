<section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                    <?php
                    foreach($blog as $bl):
                    $tgl = $bl->tgl;                    
                    ?>
                    <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?=base_url()?>img/blog/<?=$bl->foto;?>" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3><?=tanggal($tgl);?></h3>
                                    <p><?=bulan($tgl);?></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?=base_url()?>blog/detail/<?=$bl->id?>">
                                  <h2><?=$bl->judul;?>
                                  </h2>
                                </a>
                                <p><?php echo strip_tags(substr(substr($bl->p1,0,200),0,strrpos(substr($bl->p1,0,200),' ')));?></p>
                                <a href="blog/detail/<?=$bl->id?>">
                                  Baca Selanjutnya
                                </a>                                
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-comments"></i></a></li>
                                </ul>
                            </div>
                        </article>
                    <?php
                    endforeach;
                    echo $this->pagination->create_links();
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
