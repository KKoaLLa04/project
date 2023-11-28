<?php

require_once './course/model/course.php';

if (isPost()) {
    $body = getBody();

    $errors = [];

    $thumbnail = $_FILES['thumbnail'];

    if ($thumbnail['error'] === UPLOAD_ERR_OK) { // check điều kiện nè
        $uploadDir = '../uploads/course/'; // đường dẫn ảnh nè
        $uploadPath = $uploadDir . basename($thumbnail['name']);
        if (move_uploaded_file($thumbnail['tmp_name'], $uploadPath)) {
            $thumbnailFileName = basename($thumbnail['name']); // cái này để lấy tên ảnh nè
        } else {
            $errors['thumbnail'] = 'Không thể tải lên ảnh khóa học';
        }
    }else{
        $errors['thumbnail'] = 'Vui lòng không để trống ảnh khóa học';
    }

    // validate
    if (empty(trim($body['title']))) {
        $errors['title'] = 'Tiêu đề khóa học không được để trống';
    }

    if (empty(trim($body['teacher_id']))) {
        $errors['teacher_id'] = 'Bắt buộc chọn giảng viên dạy khóa học';
    }

    if (empty(trim($body['cate_id']))) {
        $errors['cate_id'] = 'Bắt buộc chọn danh mục khóa học';
    }

    if (empty(trim($body['price']))) {
        $errors['price'] = 'Bắt buộc nhập giá';
    } else {
        if (!isNumberInt(trim($body['price']))) {
            $errors['price'] = 'Giá bắt buộc phải là 1 số';
        }
    }
    
    if (empty($errors)) {
        $dataInsert = [
            'title' => trim($body['title']),
            'cate_id' => trim($body['cate_id']),
            'thumbnail' => $thumbnailFileName,
            'price' => trim($body['price']),
            'teacher_id' => trim($body['teacher_id']),
            'create_at' => date('Y-m-d H:i:s')
        ];

        $insertStatus = insert('course', $dataInsert);

        if (!empty($insertStatus)) {
            setFlashData('msg', 'Thêm khóa học mới thành công!');
            setFlashData('msg_type', 'success');
        } else {
            setFlashData('msg', 'Lỗi hệ thống, vui lòng thử lại sau!');
            setFlashData('msg_type', 'danger');
        }
    } else {
        setFlashData('msg', 'Lỗi dữ liệu, vui lòng thử lại!');
        setFlashData('msg_type', 'danger');
        setFlashData('errors', $errors);
        setFlashData('old', $body);
    }

    redirect('?module=course&action=add');

}

$data = [
    'teacher' => getAllTeacher(),
    'course_category' => getAllCate(),
];
view($data);