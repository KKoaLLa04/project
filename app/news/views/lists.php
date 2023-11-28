<?php
$msg = getFlashData('msg');
$msg_type = getFlashData('msg_type');
$limit=55;
?>
<div class="container-fluid">
    <a href="?module=news&action=add"><button class="btn btn-success">Thêm tin tức tin tức mới <i class="fa fa-plus"></i></button></a>
    <hr>
    <h4>Danh mục tin tức</h4>
    <?php getMsg($msg,$msg_type) ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>thumbnail</th>
                <th>Tiêu đề</th>
                <th>Nội dung</th>
                <th width="5%">Sửa</th>
                <th width= "5%">Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $uploadDir = '../uploads/news/'; 
            if(!empty($data['news'])):
                foreach($data['news'] as $key => $item): ?>
            <tr>
                <td><?php echo $key+1 ?></td>
                <td>
                            <?php
                            if (is_file($uploadDir . $item['thumbnail'])) {
                                echo "<img src='" . $uploadDir . $item['thumbnail'] . "' height='80' width='80' >";
                            } else {
                                echo "Không có ảnh";
                            }
                            ?>
                        </td>
                <td><?php echo $item['title'] ?></td>
                <td><?php echo substr($item['content'],0,$limit) ?></td>
                <td><a href="?module=news&action=edit&id=<?php echo $item['id'] ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                <td><a href="?module=news&action=delete&id=<?php echo $item['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                </tr>
            <?php endforeach; endif; ?>
        </tbody>
    </table>
</div>