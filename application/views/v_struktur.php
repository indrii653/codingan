<?php
  foreach($struktur as $s){
  ?>
<!-- about us part start-->
<section class="about_us single_about_padding">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-12"class="align-center ">
                    <div class="about_us_img">
                    <img src="img/<?=$s->struktur;?>" alt="" width="100%">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->
    <?php
  }
    ?>