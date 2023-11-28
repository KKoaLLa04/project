<p class="py-1">Trang chủ > tin tức</p>

<h4 style="font-size: 26px;" class="pb-4">TIN TỨC</h4>

<div class="news__category pb-5">
    <ul>
    <?php if (!empty($data['news_category'])) :
    foreach ($data['news_category'] as $key => $item) : ?>
        <li><a href="?module=news&action=listsdm&id=<?= $item['id'] ?>" class="active__category"><?php echo $item['title']?></a></li>
        <!-- <li><a href="#" class="active__category">Sách khóa học</a></li>
        <li><a href="#">Hỗ trợ từ xa</a></li>
        <li><a href="#">Tin tức trong ngày</a></li> -->
        <?php endforeach;
        endif?>
    </ul>
</div>

<div class="news__text">
<?php if (!empty($data['newsdm'])) :
                foreach ($data['newsdm'] as $count => $value) :
            ?>
    <div class="news__block">
    <a href="?module=news&action=detail&id=<?= $value['id'] ?>"><img src="<?php echo _WEB_HOST_ROOT . '/uploads/books/' . $value['thumbnail'] ?>" alt="" width="100%"></a>
        <h6><?php echo $value['title']?></h6>
        <p>29/07/2023</p>
    </div>
    <?php endforeach;
        endif?>
</div>