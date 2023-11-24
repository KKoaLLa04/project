<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');

$permissionData = permissionData();

$checkAdd = checkPermission($permissionData, 'subject_category', 'Thêm');
$checkEdit = checkPermission($permissionData, 'subject_category', 'Sửa');
$checkDelete = checkPermission($permissionData, 'subject_category', 'Xóa');
?>
<div class="container-fluid">
    <?php if ($checkAdd) : ?>
    <a href="?module=subject_category&action=add"><button class="btn btn-success">Thêm danh mục khóa học mới <i
                class="fa fa-plus"></i></button></a>
    <?php endif ?>
    <hr>
    <h4><?php echo !empty($data['title']) ? $data['title'] : 'Lỗi dữ liệu' ?></h4>
    <?php getMsg($msg, $msg_type) ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tiêu đề</th>
                <th>Thời gian</th>
                <th width="10%">Xem Chi Tiết</th>
                <?php if ($checkEdit) : ?>
                <th width="5%">Sửa</th>
                <?php endif;
                if ($checkDelete) : ?>
                <th width="5%">Xóa</th>
                <?php endif ?>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['data'])) :
                foreach ($data['data'] as $key => $item) : ?>
            <tr>
                <td><?php echo $key + 1 ?></td>
                <td><a href="?module=subject&action=lists&cate_id=<?= $item['id'] ?>"><?php echo $item['title'] ?></a>
                </td>
                <td><?php echo !empty($item['create_at']) ? $item['create_at'] : '1-1-2000' ?></td>
                <td><a href="?module=subject&action=lists&cate_id=<?= $item['id'] ?>"><button
                            class="btn btn-primary">Xem chi tiết</button></a></td>
                <?php if ($checkEdit) : ?>
                <td><a href="?module=subject_category&action=edit&id=<?php echo $item['id'] ?>"><button
                            class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                <?php endif;
                        if ($checkDelete) : ?>
                <td><a href="?module=subject_category&action=delete&id=<?php echo $item['id'] ?>"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i
                                class="fa fa-trash"></i></button></a></td>
                <?php endif ?>
            </tr>
            <?php endforeach;
            endif ?>
        </tbody>
    </table>
</div>