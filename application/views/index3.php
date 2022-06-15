<div class="product-wrapper">
  <h2 class="title text-center">Islamic Home Decoration</h2>
  <p class="text-center">“ The interior can reflect who the owner is ”</p>
  <!-- <hr> -->
  <div 
    style="display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            padding: 0 4px;
            justify-content:center;"
            >
    <?php $products = $allProducts->result_array();$startIndex =0; ?>
    <?php if($allProducts->num_rows() > 0){ ?>
    <?php for ($i=0; $i < 3; $i++) { ?>
        <div  
            class="column"
                    >
            <?php for ($z=$startIndex; $z < ($startIndex + ($allProducts->num_rows()/3)); $z++) { 
                $p = $products[$z];
                ?>
                <a 
                    href="<?= base_url(); ?>p/<?= $p['slug']; ?>"
                    style="
                                padding:0;
                                width:364px;">
                    <img 
                        src="<?= base_url(); ?>assets/images/product/<?= $p['img']; ?>" 
                        style="
                                vertical-align: middle;
                                width: 100%;">
                </a>
                
            <?php } $startIndex=$startIndex + ($allProducts->num_rows()/3);?>
        </div>
    <?php } ?>
    
    <div class="clearfix"></div>
    
    <?php }else{ ?>
      <div class="alert alert-warning">Upss.. Belum ada produk!</div>
    <?php } ?>
  </div>
  <?php if($countProduct > $allProducts->num_rows()){ ?>
    <a href="<?= base_url(); ?>product/<?php echo $page+1 ?>"><button class="more">LOAD MORE</button></a>
  <?php } ?>
</div>