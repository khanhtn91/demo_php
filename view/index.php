<p class="mb-td">Sản phẩm Mới nhất</p>
<div class="product">
    <?php 
    foreach ($data['data'] as $key => $value) { ?>
    <div class="m-product">
        <img src="<?=$value['hinh']?>">
        <p><?=$value['ten']?></p>
        <p class="price"><?=$value['gia']?> đ</p>
        <img src="./images/sao.png">
        <br>
        <img src="./images/mua.png">
    </div>
    <?php } ?>
</div>