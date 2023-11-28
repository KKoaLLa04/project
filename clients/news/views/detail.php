<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
if (!empty($data['news_detail'])) {
    $item = $data['news_detail'];
}
?>
<p class="py-1">Trang chủ > Tin tức .......</p>
<div class="row py-3">
    <?php getMsg($msg, $msg_type) ?>
    <?php echo !empty($item['content']) ? html_entity_decode($item['content']) : 'Update..' ?>
</div>
    <hr>
    <p>CÓ THỂ BẠN QUAN TÂM</p>
<div class="row">
      <div class="col-3 background_white">
         <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/news2.jpg" alt="" width="100%">
        <h6 class="py-3">Kinh nghiệm luyện thi</h6>
        <div class="d-flex justify-content-between">
        </div>
       </div>

       <div class="col-3 background_white">
         <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/news2.jpg" alt="" width="100%">
        <h6 class="py-3">Kinh nghiệm luyện thi</h6>
        <div class="d-flex justify-content-between">
        </div>
       </div>

       <div class="col-3 background_white">
         <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/news2.jpg" alt="" width="100%">
        <h6 class="py-3">Kinh nghiệm luyện thi</h6>
        <div class="d-flex justify-content-between">
        </div>
       </div>

       <div class="col-3 background_white">
         <img src="<?php echo _WEB_HOST_TEMPLATE ?>/images/news2.jpg" alt="" width="100%">
        <h6 class="py-3">Kinh nghiệm luyện thi</h6>
        <div class="d-flex justify-content-between">
        </div>
       </div>
    </div>
</div>