<p class="mb-td">Sản phẩm Mới nhất</p>
<div class="product">
    <?php 
    foreach ($data['data'] as $key => $value) { ?>
    <div class="m-product">
        <a href="index.php?controller=product&action=detailAction&id=<?=$value['id']?>">
            <img src="<?=$value['hinh']?>">
        </a>
        <p><?=$value['ten']?></p>
        <p class="price"><?=number_format($value['gia'],'0', ',', '.')?> đ</p>
        <img src="./images/sao.png">
        <br>
        <img src="./images/mua.png">
        
    </div>
    <?php } ?>
    <?php for($i = 1; $i <= $data['totalPage']; $i++) { ?>
    <a href="index.php?page=<?=$i?>&sl=2">Page <?=$i?></a>
    <?php } ?>
    
</div>