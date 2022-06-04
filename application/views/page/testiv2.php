<!-- <div class="wrapper">
    <div class="title-head">
        <h2 class="title">Testimoni</h2>
    </div>
    <?php if($testi->num_rows() > 0){ ?>
        <div class="testi mt-4">
            <div class="row">
            <?php foreach($testi->result_array() as $data){ ?>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $data['name']; ?></h5>
                        <p class="card-text"><?= $data['content']; ?></p>
                    </div>
                    </div>
                </div>
            <?php } ?>
            </div>
        </div>
    <?php }else{ ?>
        <div class="alert alert-warning mt-4">Upss.. Belum ada testimoni</div>
    <?php } ?>
</div> -->
<div class="wrapper d-flex justify-content-center align-items-center" style="background-color: #F7F7F7 !important;height:672px;">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <div class="title-head" style="margin-bottom:103px;">
        <h2 class="title text-center">Our clients stories</h2>
    </div>
      <ol class="carousel-indicators">
          <?php for ($i=0; $i < ($testi->num_rows() / 2); $i++) { ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i ?>" class="active"></li>
          <?php } ?>
      </ol>
      <div class="carousel-inner" style="margin-bottom:100px;">
        <?php for ($i=0; $i < ($testi->num_rows() / 2); $i++) { ?>
            <div class="carousel-item <?= $i == 0 ? 'active' : ''?>">
                <div class="container-fluid row d-flex justify-content-center">
                <?php 
                $data = $testi->result_array();
                for($j=$i * 2; $j < ($i * 2)+2; $j++){ 
                    ?>
                    <div class="col-lg-4 mb-4">
                        <div class="card" style="min-height:220px;border:none;background-color:transparent;">
                        <div class="card-body d-flex flex-column justify-content-center align-items-center text-center" style="background-color:#fff;border-clip:border-box;border-radius:20px;">
                            <!-- <h5 class="card-title"><?= $data[$j]['name']; ?></h5> -->
                            <p class="card-text"><?= $data[$j]['content']; ?></p>
                        </div>
                        <div class="talkbubble">
                        </div>
                        <div class="card-footer d-flex justify-content-center" style="border:none;background-color:transparent;">
                            <img src="<?= base_url('/assets/images/testimonial/').($data[$j]['photo'] ? $data[$j]['photo'] : "Photo.png" ) ?>" style="height:56px;width:56px;border-radius:50%;" alt="">
                            <div class="ml-3">
                                <?php 
                                    $split = explode("-",$data[$j]['name']);
                                    $nama = $split[0];
                                    $alamat = $split[1];
                                ?>
                                <span style="font-size : 18px;font-weight:700;"><?= $nama ?></span>
                                <br>
                                <span style="font-size : 14px;font-weight:400;"><?= $alamat ?></span>

                            </div>
                        </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>
        <?php } ?>
    
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</div>

