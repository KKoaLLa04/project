<?php
$msg = getFlashData('msg');
$msg_type=getFlashData('msg_type');
if(!empty($data['news_detail'])){
    $item=$data['news_detail'];
}
?>
<p class="py-1">Trang chủ > Tin tức .......</p>
<div class="row py-3">
    <?php getMsg($msg,$msg_type) ?>
        <?php echo html_entity_decode($item['content']) ?>
    </div>
</div>