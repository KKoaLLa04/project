<p class="py-1">Trang chủ > tin tức</p>

<h4 style="font-size: 26px;" class="pb-4">TIN TỨC</h4>

<div class="news__category pb-5">
    <ul>
    <?php    if(!empty($data['news_category'])):
        foreach($data['news_category'] as $key => $item): ?>
        <li><a class="active__category"><?php echo $item['title']?></a></li>
        <?php endforeach;endif;?>
        <!-- <li><a href="#">Các gói VIP ưu đãi</a></li>
        <li><a href="#" class="active__category">Sách khóa học</a></li>
        <li><a href="#">Hỗ trợ từ xa</a></li>
        <li><a href="#">Tin tức trong ngày</a></li> -->
    </ul>
</div>

<div class="news__text">
    <div class="news__block">
    <?php    if(!empty($data['news'])):
        foreach($data['news'] as $key => $item): ?>
    <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/news2.jpg" alt="">
    <h6> <?php echo $item['title']?></h6>
    <p> <?php echo $item['create_at'] ?></p>
    <?php endforeach;endif; ?>
    </div>
</div>