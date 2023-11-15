<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
?>

<div class="container-fluid">
    <a href="?module=course&action=add"><button class="btn btn-success">Thêm khóa học mới</button></a>
    <hr>
    <h4>Danh sách khóa học</h4>
    <?php getMsg($msg, $msg_type) ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Ảnh mh</th>
                <th>Tiêu đề</th>
                <th>Khóa học</th>
                <th>Giá</th>
                <th>Giảng Viên</th>
                <th width="5%">Sửa</th>
                <th width= "5%">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php if(!empty($data['course'])):
                foreach($data['course'] as $key => $item): ?>
            <tr>
                <td><?php echo $key+1 ?></td>
                <td><?php echo $item['thumbnail'] ?></td>
                <td><?php echo $item['title'] ?></td>
                <td><?php echo $item['cate_name'] ?></td>
                <td><?php echo $item['price'] ?></td>
                <td><?php echo $item['teacher_id'] ?></td>
                    <td><a href="?module=course&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                    <td><a href="?module=course&action=delete&id=<?php echo $item['id'] ?>"><button class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><i class = "fa fa-trash"></i></button></a></td>
                </tr>
            <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>