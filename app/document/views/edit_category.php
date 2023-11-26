<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$errors = getFlashData('errors');
$old = getFlashData('old');
$docDetail = getFlashData('doc_cate');
if (empty($old) && !empty($docDetail)) {
    $old = $docDetail;
}
?>
<h4>Cập nhật danh mục - <?php echo $docDetail['name'] ?></h4>
<?php getMsg($msg, $msg_type) ?>
<form action="" method="post">
    <div class="form-group">
        <label for="">Tiêu đề danh mục</label>
        <input type="text" class="form-control" placeholder="Tiêu đề danh mục...." name="name"
            value="<?php echo oldData('name', $old) ?>">
        <p class="error"><?php echo errorData('name', $errors) ?></p>
    </div>

    <button class="btn btn-primary" type="submit">Cập nhật</button>
</form>