<div class="container-fluid">
    <h4>Quản lý hóa đơn của khách hàng</h4>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th width="3%">#</th>
                <th>Thông tin</th>
                <th>Mã hóa đơn</th>
                <th>Địa chỉ</th>
                <th>Tổng</th>
                <th>Hình thức thanh toán</th>
                <th>Tình trạng</th>
                <th width="5%">Sửa</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($data['bill'])) :
                foreach ($data['bill'] as $key => $item) : ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td>
                            Tên: <?= $item['name'] ?> <br>
                            Email: <?= $item['email'] ?> <br />
                            Số điện thoại: <?= $item['phone'] ?>
                        </td>
                        <td><?= $item['code'] ?></td>
                        <td><?= $item['address'] ?></td>
                        <td><?= $item['total'] ?></td>
                        <td><?= $item['pay'] ?></td>
                        <td class="text-center">
                            <?php
                            if ($item['status'] == 0) {
                                echo '<a href="?module=bill&action=status&status=1&id=' . $item['id'] . '"><button class="btn btn-danger">Đơn hàng mới</button></a>';
                            } else if ($item['status'] == 1) {
                                echo '<a href="?module=bill&action=status&status=2&id=' . $item['id'] . '"><button class="btn btn-warning">Đang xử lý</button></a>';
                            } else if ($item['status'] == 2) {
                                echo '<a href="?module=bill&action=status&status=3&id=' . $item['id'] . '"><button class="btn btn-primary">Đang giao</button></a>';
                            } else if ($item['status'] == 3) {
                                echo '<button class="btn btn-success">Đã giao</button>';
                            }
                            ?>
                        </td>
                        <td><a href="?module=bill&action=edit&id=<?= $item['id'] ?>"><button class="btn btn-warning"><i class="fa fa-edit"></i></button></a></td>
                    </tr>
            <?php endforeach;
            endif ?>
        </tbody>
    </table>
</div>