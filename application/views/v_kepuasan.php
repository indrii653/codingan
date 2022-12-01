<?php
foreach($puas as $as){
?>
<section class="blog_part section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Indeks Kepuasan <br> Masyarakat(IKM)</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="single-home-blog">
                        <div class="card">
                        <img src="img/blog/<?=$as->puas;?>" alt=""  class="card-img-top" alt="penghargaan">
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--::blog_part end::-->
<?php
  }
?>