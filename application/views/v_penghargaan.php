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
                            <img src="img/blog/akreditasi.jpg" class="card-img-top" alt="penghargaan" >
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
            <?php
foreach($penghargaan as $p){
    ?>
                <div class="col-sm-6">
                    <div class="single-home-blog">
                        <div class="card">
                        <img src="img/blog/<?=$p->penghargaan;?>" alt="" width="100%" class="card-img-top" alt="penghargaan">
                            <div class="card-body">
                                <a href="penghargaan">
                                    <h5 class="card-title"><?=$p->judul1;?></h5>
                                </a>
                                <ul>
                                    <li> <span class="ti-user"></span><?=$p->p1;?></li>
                                    <a href="penghargaan/detail/<?=$p->id?>">
                                  Baca Selanjutnya
                                </a>                                
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-comments"></i></a></li>
                                </ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
    <?php
}
    ?>      </div>
        </div>
    </section>
    <!--::blog_part end::-->