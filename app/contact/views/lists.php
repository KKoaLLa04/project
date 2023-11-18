<div class="container-fluid">
    <hr>
    <h4>Danh sách liên hệ</h4>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Nội dung</th>
                <th width="12%">Trạng thái</th>
                <th width="5%">Xóa</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['contact'])) :
                foreach ($data['contact'] as $key => $item) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $item['fullname'] ?></td>
                        <td><?php echo $item['email'] ?></td>
                        <td><?php echo $item['phone'] ?></td>
                        <td><?php echo $item['content'] ?></td>
                        <td><?php echo ($item['status'] == 0) ? '<a href="?module=contact&action=status&id='.$item['id'].'"><button class="btn btn-warning">Chưa duyệt</button></a>' : '<a href="?module=contact&action=status&id='.$item['id'].'"><button class="btn btn-dark">Đã duyệt</button></a>' ?>
                        </td>
                        <td><a href="?module=contact&action=delete&id=<?php echo $item['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?')"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a></td>
                    </tr>
            <?php endforeach;
            endif ?>
        </tbody>
    </table>
</div>