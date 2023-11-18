<?php
$msg = getFlashData('msg');
$msg_type = getFlashData("msg_type");
$errors = getFlashData('errors');
$old = getFlashData('old');
if (empty($old) && !empty($data['news_detail'])) {
    $old = $data['news_detail'];
}
?>
<div class="container-fluid">
    <a href="?module=news&action=lists"><button class="btn btn-warning">Quay lai</button></a>
    <hr>
    <h4>Cập nhật tin tức: <?php echo !empty($old['title']) ? $old['title'] : false ?></h4>
    <?php getMsg($msg, $msg_type) ?>
    <form action="" method="post">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="">tiêu đề</label>
                    <input type="text" class="form-control" placeholder="Tiêu đề" name="title" value="<?php echo oldData('title', $old) ?>">
                    <p class="error"><?php echo errorData('title', $errors) ?></p>
                </div>

            </div>

            <div class="col-6">
            <div class="form-group">
                    <label for="">Ảnh Minh Họa</label>
                    <input type="file" class="form-control" name="thumbnail">
                    <p class="error"><?php echo errorData('thumbnail', $errors) ?></p>
                </div>
            </div>
        </div>
        <div class="form-group">
                    <label for="">Nội dung</label>
                    <textarea class="form-control" rows="5" placeholder="Nội dung..." name="content"><?php echo oldData('content', $old) ?></textarea>
                    <p class="error"><?php echo errorData('content', $errors) ?></p>
                </div>
                <div class="form-group">
                    <label for="">Danh mục tin tức</label>
                    <select class="form-control" name="news_id">
                        <option value="0">Chọn danh mục tin tức </option>
                        <?php if (!empty($data['news_category'])) :
                            foreach ($data['news_category'] as $item) : ?>
                                <option value="<?php echo $item['id'] ?>" <?php echo (oldData('news_id', $old) == $item['id']) ? 'selected' : false ?>>
                                    <?php echo $item['title'] ?></option>
                        <?php endforeach;
                        endif; ?>
                    </select>
                    <p class="error"><?php echo errorData('news_id', $errors) ?></p>
                </div>
        <input type="hidden" name="id" value="<?php echo !empty($data['id']) ? $data['id'] : 1 ?>">
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>