<p class="mb-td">
    <?=$data['category']['tendm1']?>
    <?php if ($data['category']['tendm2'] && $_GET['id_danhmuc2']) {
        echo '/' . $data['category']['tendm2'];
    }?>
</p>
<div class="product">
    <?php 
    foreach ($data['data'] as $key => $value) { ?>
    <div class="m-product">
        <a href="index.php?controller=product&action=detailAction&id=<?=$value['id']?>">
            <img src="<?=$value['hinh']?>">
        </a>
        <p><?=$value['ten']?></p>
        <p class="price"><?=number_format($value['gia'],'0', ',', '.')?> đ</p>
        <img src="public/assets/images/sao.png">
        <br>
        <img src="public/assets/images/mua.png">
        
    </div>
    <?php } ?>
</div>