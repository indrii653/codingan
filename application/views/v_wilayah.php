<?php
  foreach($wilayah as $wly){
  ?>
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h4 class="m-0 font-weight-bold text-primary align-middle text-center">Wilayah Puskemas Siliwangi</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th rowspan="2" class="align-middle text-center">Nama Puskesmas</th>
                                            <th rowspan="2" class="align-middle text-center">Kecamatan</th>
                                            <th rowspan="2" class="align-middle text-center">Kelurahan</th>
                                            <th colspan="2" class="align-middle text-center">Jumlah Penduduk</th>
                                            <th rowspan="2" class="align-middle text-center">Jumlah Total</th>
                                            <th rowspan="2" class="align-middle text-center">Jumlah KK</th>
                                            <th rowspan="2" class="align-middle text-center">Rumah</th>
                                            
                                           
                                        </tr>
                                        <tr>
                                            <th class="align-middle text-center">L</th>
                                            <th class="align-middle text-center">P</th>
                                        </tr>
                                        <tr>
                                            <td rowspan="4">UPT PUSKESMAS SILIWANGI</td>
                                            <td rowspan="4">GARUT KOTA</td>
                                            <td>REGOL</td>
                                            <td><?=$wly->L;?></td>
                                            <td><?=$wly->P;?></td>
                                            <td><?=$wly->jumlah_total;?></td>
                                            <td><?=$wly->jumlah_kk;?></td>
                                            <td><?=$wly->rumah;?></td>
                                        </tr>
                                        <tr>
                                            
                                            <td>PAKUWON</td>
                                            <td><?=$wly->pL;?></td>
                                            <td><?=$wly->pP;?></td>
                                            <td>5.652</td>
                                            <td>1.774</td>
                                            <td>1.640</td>
                                        </tr>
                                        <tr>
                                            
                                            <td>PAMINGGIR</td>
                                            <td><?=$wly->pmL;?></td>
                                            <td><?=$wly->pmP;?></td>
                                            <td>9.184</td>
                                            <td>2.861</td>
                                            <td>2.664</td>
                                        </tr>
                                        <tr>
                                            
                                            <td>MUARA SANDING</td>
                                            <td><?=$wly->msL;?></td>
                                            <td><?=$wly->msP;?></td>
                                            <td>9.892</td>
                                            <td>3.342</td>
                                            <td>3.133</td>
                                        </tr>

                                        <tr>
                                        <td colspan="3" class="align-middle text-center">JUMLAH TOTAL</td>
                                            <td><?=$wly->all1;?></td>
                                            <td><?=$wly->all2;?></td>
                                            <td><?=$wly->all3;?></td>
                                            <td><?=$wly->all4;?></td>
                                            <td><?=$wly->all5;?></td>
                                        </tr>
                                        
                                    </thead>
                                </table>   
                            </div>     
                        </div>
                </div>
                </div>
            </div>
        </div>
</section>
<?php
  }
    ?>